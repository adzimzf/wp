<?php

/**
 * Convert old «:id="100-1"» ids to «_id="100-1"» ids.
 * TODO: Remove this before release.
 */
add_filter( 'ux_builder_to_array', function ( $item ) {
  foreach ( $item['options'] as $key => $value ) {
    if ( preg_match_all( "/\:([\S]+)\s*?\=\s*\"([\s\S]+?)\"/", $value, $matches, PREG_SET_ORDER ) ) {
      $item['options']['_id'] = $matches[0][2];
      unset( $item['options'][$key] );
    }
  }
  return $item;
});

/**
 * Preprocess content before it is transfomed into an array.
 *
 * @param   string  $content
 * @param   string  $tag
 * @return  string
 */
add_filter( 'ux_builder_preprocess_array_content', function (  $content, $tag, $options ) {

  // Convert old product shortcodes
  $prod_shortcodes = array('/ux_latest_products/', '/ux_bestseller_products/','/ux_featured_products/', '/ux_sale_products/','/product_lookbook/','/ux_custom_products/','/products_pinterest_style/');
  $content = preg_replace( $prod_shortcodes, 'ux_products fix="$0"', $content );

  // fix old product categories
  $content = preg_replace( '/ux_product_categories_grid/', 'ux_product_categories type="grid"', $content );

  // Convert old background to section
  $content = preg_replace( '/\[background/', '[section', $content );
  $content = preg_replace( '/\[\/background/', '[/section', $content );

  // fix old tabgroups
  $content = preg_replace( '/tabgroup_vertical/', 'tabgroup type="vertical"', $content );

  // Convert ____ to dividers.
  $content = preg_replace( array( '/_____/','/____/', '/___/', ), '[divider]', $content );

  // Fix Old Banner Grids when opening builder
  if( $tag == 'ux_banner_grid' && !has_shortcode( $content, 'col_grid' ) && !has_shortcode( $content, 'col' ) ) {
      $pattern = get_shortcode_regex();
      $columns = 0;
      $current_grid = 0;
      $grid = flatsome_get_grid1($options['grid']);
      $grid_total = count($grid);
      if (preg_match_all( '/'. $pattern .'/s', $content, $matches )
          && array_key_exists( 2, $matches )
          && in_array( 'ux_banner', $matches[2] ) ){

        foreach ($matches[0] as $shortcode) {
            if($grid_total > $current_grid) $current_grid++;
            $current = $current_grid-1;
            $content = str_replace($shortcode, '[col_grid span="'.$grid[$current]['span'].'" span__md="'.$grid[$current]['md'].'" height="'.$grid[$current]['height'].'"]'.$shortcode.'[/col_grid]', $content);
        }
      }
  }

  // Wrap existing ux_banner content in a text_box shortcode if not exists.
  if ( $tag == 'ux_banner' &&
    ( ! has_shortcode( $content, 'text_box' ) &&
      ! has_shortcode( $content, 'ux_hotspot' ) &&
      ! has_shortcode( $content, 'ux_image' ) ) ) {
    // Get options
    extract( wp_parse_args( $options, array(
      'padding' => '',
      'animate' => '',
      'animated' => '',
      'animation' => '',
      'text_pos' => 'x50 y50',
      'text_align' => '',
      'text_bg' => '',
      'text_color' => '',
      'text_width' => '40',
      'parallax_text' => '',
    ) ) );

    if ( $animate ) $animation = $animate;
    if ( $animated ) $animation = $animated;

    // Set Text Box position
    $x = '50'; $y = '50';
    if ( $text_pos !== 'center' || $text_pos !== 'center center' ) {
      $values = explode( ' ', $text_pos );
      if(isset($values[0]) && isset($values[1])) {
      if ( $values[0] == 'left' || $values[1] == 'left' ) $x = '10';
      if ( $values[0] == 'right' || $values[1] == 'right' ) $x = '90';
      if ( $values[0] == 'far-left' || $values[1] == 'far-left' ) $x = '0';
      if ( $values[0] == 'far-right' || $values[1] == 'far-right' ) $x = '100';
      if ( $values[0] == 'top' || $values[1] == 'top' ) $y = '10';
      if ( $values[0] == 'bottom' || $values[1] == 'bottom' ) $y = '90';
      }
      $depth = '';
      if($text_bg && !$padding) $padding = '30px 30px 30px 30px';
      if($text_bg) $depth = '1';
    }
    $content = '[text_box depth="'.$depth.'" text_align="'.$text_align.'" parallax="'.$parallax_text.'" animate="'.$animation.'" padding="'.$padding.'" bg="'.$text_bg.'" text_color="'.$text_color.'" width="'.intval($text_width).'" width__sm="60" position_y="'.$y.'" position_x="'.$x.'"]'.$content.'[/text_box]';
  }

  return $content;
}, 10, 3 );

/**
 * Get block contents.
 *
 * @param   array   $options
 * @param   string  $shortcode
 *
 * @return  string
 */
add_filter( 'ux_builder_preprocess_array_content', function ( $content, $tag, $options ) {
  global $wpdb;

  if ( $tag != 'block' ) return $content;

  if ( ! array_key_exists( 'id', $options ) ) return $content;
  $post_id = is_numeric( $options['id'] ) ? $options['id'] : $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE post_name = '" . $options['id'] . "'" );

  return get_post_field( 'post_content', $post_id );
}, 10, 3 );

/**
 * Modify the element options that will be stored in the array.
 *
 * @param   string  $options
 * @return  string
 */
add_filter( 'ux_builder_preprocess_array_options', function ( $options, $tag ) {

  // Fix Old Grid heights
  if ($tag == 'ux_banner_grid' && isset( $options['height'] ) ){
    $options['height'] = intval($options['height']);
  }

  // Fix old product shortcodes
  if($tag == 'ux_products'){
    if(isset($options['fix']) && $options['fix'] == 'ux_bestseller_products') {
      $options['orderby'] = 'sales';
    } else if(isset($options['fix']) && $options['fix'] == 'ux_featured_products'){
     $options['show'] = 'featured';
    } else if(isset($options['fix']) && $options['fix'] == 'ux_sale_products'){
      $options['show'] = 'onsale';
    } else if(isset($options['fix']) && $options['fix'] == 'products_pinterest_style'){
      $options['type'] = 'masonry';
      $options['style'] = 'overlay';
      $options['text_align'] = 'center';
      $options['image_size'] = 'medium';
      $options['text_pos'] = 'middle';
      $options['text_hover'] = 'hover-slide';
      $options['image_hover'] = 'overlay-add';
      $options['image_hover_alt'] = 'zoom-long';
      $options['class'] = 'featured-product';
      $options['back_image'] = false;
    } else if(isset($options['fix']) && $options['fix'] == 'product_lookbook'){
     $options['type'] = 'slider';
     $options['style'] = 'overlay';
     $options['col_spacing'] = 'collapse';
     $options['text_align'] = 'center';
     $options['image_size'] = 'medium';
     $options['slider_nav_style'] = 'circle';
     $options['text_pos'] = 'middle';
     $options['text_hover'] = 'hover-slide';
     $options['image_hover'] = 'overlay-add';
     $options['image_hover_alt'] = 'zoom-long';
     $options['class'] = 'featured-product';
     $options['back_image'] = false;
    }
  }

  // We have to convert the old column span values to numbers.
  if ( $tag == 'col' && isset( $options['span'] ) && preg_match( '/[0-9]\/[0-9]/', $options['span'] ) ) {
    switch ( trim( $options['span'] ) ) {
      case '3/4' : $options['span']  = 9;  break;
      case '1/1' : $options['span']  = 12; break;
      case '1/2' : $options['span']  = 6;  break;
      case '2/4' : $options['span']  = 6;  break;
      case '1/3' : $options['span']  = 4;  break;
      case '1/4' : $options['span']  = 3;  break;
      case '2/3' : $options['span']  = 8;  break;
      default : $options['span'] = 12;
    }
  }
  return $options;
}, 10, 2 );

/**
 * Modify CSS declarations before element styles are generated.
 *
 * @param   array  $declaration
 * @return  array
 */
add_filter( 'ux_builder_css_declaration', function ( $declaration ) {
  switch ( $declaration['property'] ) {
    case 'background-image':
      if ( is_numeric( $declaration['value'] ) ) {
        $value = wp_get_attachment_image_src( $declaration['value'], $declaration['size'] );
        $declaration['value'] = 'url(' . $value[0] . ')';
      } else {
        $declaration['value'] = 'url(' . $declaration['value'] . ')';
      }
      break;
  }
  return $declaration;
} );

// TODO: Vet ikke hvor jeg skal legge denne?
function flatsome_get_grid1($grid = 1){

  $g = array();

  if($grid == '1'){
    $g = array(
      array('height' => '1','span' => '6', 'size' => 'medium','md' => '12'),
      array('height' => '1','span' => '3', 'size' => 'medium','md' => '6'),
      array('height' => '1-2','span' => '3', 'size' => 'thumbnail','md' => '6'),
      array('height' => '1-2','span' => '3', 'size' => 'thumbnail','md' => '6'),
    );
  }
  if($grid == '2'){
    $g = array(
        array('height' => '1','span' => '12', 'size' => 'large','md' => '12'),
        array('height' => '1-4','span' => '4','size' => 'thumbnail','md' => '12'),
        array('height' => '1-4','span' => '4','size' => 'thumbnail','md' => '12'),
        array('height' => '1-4','span' => '4','size' => 'thumbnail','md' => '12'),
      );
  }

  if($grid == '3'){
    $g = array(
        array('height' => '1','span' => '6','size' => 'large','md' => '12'),
        array('height' => '1-2','span' => '6','size' => 'medium','md' => '6'),
        array('height' => '1-2','span' => '3','size' => 'thumbnail','md' => '6'),
      );
  }

  if($grid == '4'){
    $g = array(
       array('height' => '1','span' => '3','md' => '6'),
    );
  }

  if($grid == '5'){
    $g = array(
       array('height' => '1','span' => '4','md' => '6'),
    );
  }

  if($grid == '6'){
    $g = array(
        array('height' => '1','span' => '9','size' => 'large','md' => '12'),
        array('height' => '1-2','span' => '3','size' => 'thumbnail','md' => '6'),
        array('height' => '1-2','span' => '3','size' => 'thumbnail','md' => '6'),
      );
  }


  if($grid == '7'){
    $g = array(
       array('height' => '1','span' => '3','md' => '12'),
       array('height' => '1','span' => '6','size' => 'medium','md' => '6'),
       array('height' => '1-2','span' => '3','size' => 'thumbnail','md' => '6'),
      );
  }

if($grid == '8'){
    $g = array(
       array('height' => '1','span' => '3','size' => 'thumbnail','md' => '12'),
       array('height' => '1','span' => '6','size' => 'large','md' => '6'),
       array('height' => '1','span' => '3','size' => 'thumbnail','md' => '6'),
       array('height' => '1','span' => '3','size' => 'thumbnail','md' => '6'),
      );
  }

if($grid == '9'){
    $g = array(
       array('height' => '1','span' => '6','size' => 'medium','md' => '12'),
       array('height' => '1','span' => '3','size' => 'thumbnail','md' => '6'),
      );
  }

if($grid == '10'){
    $g = array(
        array('height' => '1','span' => '6','md' => '12'),
        array('height' => '1-3','span' => '6','md' => '6'),
        array('height' => '1-3','span' => '3','md' => '6'),
        array('height' => '1-3','span' => '3','md' => '6'),
        array('height' => '1-3','span' => '6','md' => '6'),
      );
  }

 if($grid == '11'){
    $g = array(
        array('height' => '2-3','span' => '6','md' => '12'),
        array('height' => '2-3','span' => '3','md' => '6'),
        array('height' => '1','span' => '3','md' => '6'),
        array('height' => '2-3','span' => '3','md' => '6'),
        array('height' => '1-3','span' => '6','md' => '6'),

      );
  }

  if($grid == '12'){
    $g = array(
        array('height' => '1-2','span' => '8','md' => '12'),
        array('height' => '1','span' => '4','md' => '6'),
        array('height' => '1','span' => '4','md' => '6'),
        array('height' => '1-2','span' => '8','md' => '6'),
        array('height' => '1-2','span' => '8','md' => '6'),
        array('height' => '1','span' => '4','md' => '6'),
      );
  }


  if($grid == '13'){
    $g = array(
        array('height' => '2-3','span' => '6','md' => '12'),
        array('height' => '1-2','span' => '3','md' => '6'),
        array('height' => '1','span' => '3','md' => '6'),
        array('height' => '1-2','span' => '3','md' => '6'),
        array('height' => '1-3','span' => '6','md' => '6'),
      );
  }

  if($grid == '14'){
    $g = array(
        array('height' => '1-2','span' => '8', 'md' => '12'),
        array('height' => '1','span' => '4', 'md' => '6'),
        array('height' => '1','span' => '4', 'md' => '6'),
        array('height' => '1','span' => '2','md' => '6'),
        array('height' => '1','span' => '2','md' => '6'),
        array('height' => '1-2','span' => '4','md' => '6'),
      );
   }
   return $g;
}

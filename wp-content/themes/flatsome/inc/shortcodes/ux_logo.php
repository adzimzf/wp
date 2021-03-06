<?php
// [logo img=""]
function ux_logo( $atts, $content = null ){
    extract( shortcode_atts( array(
      'img' => '',
      'padding' => '15px',
      'title' => '',
      'hover' => '',
      'link' => '',
      'target' => '',
      'height' => '50',
    ), $atts ) );

    $height = intval($height);
    $width = 'auto';

    if(!$img){
      $org_img = get_template_directory_uri().'/assets/img/logo.png';
      $width = ($height / 84) * 400 + ($padding*2).'px';
    }

    if ($img && !is_numeric($img)) {
      $org_img = $img;
    } else if($img) {
      $img = wp_get_attachment_image_src($img, 'small');
      $org_img = $img[0];
      $org_height = $img[2];
      $width = $img[1];
      $width = ($height / $org_height) * $width + ($padding*2).'px';
    }

    $content = '<div class="ux-logo has-hover align-middle ux_logo inline-block" style="max-width: 100%!important; width: '.$width.'!important"><a class="ux-logo-link block image-'.$hover.'" title="'.$title.'" href="'.$link.'" style="padding: '.$padding.';"><img src="'.$org_img.'" title="'.$title.'" alt="'.$title.'" class="ux-logo-image block" style="height:'.$height.'px;" /></a></div>';

    return $content;
}
add_shortcode('logo', 'ux_logo');
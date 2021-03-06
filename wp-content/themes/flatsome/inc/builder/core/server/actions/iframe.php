<?php

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Add Angular app attribute to html tag.
 *
 * @param  string $output
 * @return string
 */
add_filter( 'language_attributes', function ( $output ) {
  return $output . ' ng-app="uxBuilder" ng-strict-di';
} );

/**
 * Add ux-builder class and Angular attributes to body element.
 *
 * @param  array $classes
 * @return array
 */
add_filter( 'body_class', function ( $classes ) {
  $classes[] = 'ux-builder-iframe';
  return $classes;
} );

/**
 * Overwrite content for a specified post.
 *
 * @param  string $content
 * @param  number $post_id
 * @param  string $context
 * @return string
 */
add_filter( 'post_content', function ( $content, $post_id, $context ) {
  if( array_key_exists( 'edit_post_id', $_GET ) && $_GET['edit_post_id'] == $post_id ) {
    return '<post-wrapper></post-wrapper>';
  }
  return $content;
}, 10, 3 );

/**
 * Override meta data with custom values from the url.
 * This makes it possible to change page tempalte etc. in the builder.
 *
 * @param  string  $value
 * @param  number  $object_id
 * @param  string  $meta_key
 * @param  boolean $single
 */
add_filter( 'get_post_metadata', function ( $value, $object_id, $meta_key, $single ) {
  if ( array_key_exists( $meta_key, $_GET ) ) {
      return $_GET[$meta_key];
  }
  return $value;
}, 10, 4 );

/**
 * Change post content to prevent shortcodes
 * beeing rendered before the builder content.
 *
 * @param  array $posts
 * @return array
 */
add_action( 'the_posts', function ( $posts ) {
  // Do nothing if another post is beeing edited.
  if ( array_key_exists( 'edit_post_id', $_GET ) )  return $posts;
  // do nothing if «the_post» action has already been called.
  if( did_action('the_post') ) return $posts;
  // Get current post if no posts are found. Happens when editing a draft.
  if ( empty ( $posts ) && ( array_key_exists( 'page_id', $_GET ) || array_key_exists( 'p', $_GET ) ) ) {
    $posts[] = get_post( isset( $_GET['page_id'] ) ? $_GET['page_id'] : $_GET['p'] );
  }
  // Change post content to an Anagular component.
  $posts[0]->post_content = '<post-wrapper></post-wrapper>';
  return $posts;
} );

/**
 * Add assets to the iframe.
 */
add_action( 'ux_builder_enqueue_scripts', function ( $context ) {
  $version = UX_BUILDER_VERSION;
  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'ux-builder-core', ux_builder_asset( 'css/builder/core/content.css' ), null, $version );
  wp_enqueue_script( 'ux-builder-vendors', ux_builder_asset( 'js/builder/core/vendors.js' ), null, $version, true );
  wp_enqueue_script( 'ux-builder-core', ux_builder_asset( 'js/builder/core/content.js' ), array( 'underscore' ), $version, true );
}, 0 );

/**
 * Add assets to the editor.
 */
add_action( 'wp_enqueue_scripts', function () {
  do_action( 'ux_builder_enqueue_scripts', 'content' );
} );



/**
 * Add the tools components to footer.
 */
add_action( 'wp_print_footer_scripts', function () {
  echo '<app-tools></app-tools>';
} );

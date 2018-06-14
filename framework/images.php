<?php

// Featured images
add_theme_support( 'post-thumbnails' );

// Register custom sizes of image
add_image_size( 'blog-thumb-medium', 730, 312, array( 'center', 'top' ) );
add_image_size( 'blog-thumb-diff', 500, 312, array( 'center', 'top' ) );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}

<?php

register_nav_menus( array(
	'top_desktop'    => __( 'Top Desktop Menu', 'blog' ),
	'top_mobile' => __( 'Top Mobile Menu', 'blog' )
) );

function show_menu( $location ) {
	$args = array(
		'theme_location' => $location,
		'menu' => '',
		'container' => '',
		'container_class' => '',
		'container_id' => '',
		'menu_class' => '',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'items_wrap' => '<ul>%3$s</ul>',
		'depth' => 0,
		'walker' => ''
	);

	wp_nav_menu( $args );
}
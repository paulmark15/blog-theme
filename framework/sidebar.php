<?php
function sidebars_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar Right', 'blog' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Add widgets here to appear in your right sidebar.', 'blog' ),
		'before_widget' => '<section id="%1$s" class="panel %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'sidebars_init' );
<?php

function fb_og_meta() {
	global $post;

	if( is_single() ) {
		$excerpt = str_replace("", "'", strip_tags($post->post_excerpt)); ?>

		<meta property="og:title" content="<?= the_title(); ?>"/>
		<meta property="og:description" content="<?= $excerpt; ?>"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="<?= the_permalink(); ?>"/>
		<meta property="og:site_name" content="<?= get_bloginfo(); ?>"/>
		<meta property="og:image" content="<?= the_post_thumbnail_url('blog-article'); ?>"/>
		<meta property="og:image:width" content="960"/>
		<meta property="og:image:height" content="600"/>

		<?php
	}
}
add_action('wp_head', 'fb_og_meta', 5);
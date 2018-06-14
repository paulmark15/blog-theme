<?php get_header(); ?>
<div class="row">
	<div class="col-lg-8">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'partials/blog-post', 'front-page' );
			endwhile;
		endif; ?>
	</div>

	<div class="col-lg-4 sidebar">
        <?php dynamic_sidebar( 'sidebar-right' ); ?>
	</div>
</div>


<?php get_footer(); ?>

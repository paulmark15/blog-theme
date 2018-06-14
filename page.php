<?php get_header(); ?>

	<div class="row">
		<main id="main" class="col-lg-8">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					the_title( '<h1 class="page-title"><span>', '</span></h1>' ); ?>
						<section class="single-page"><?php the_content(); ?></section>
				<?php endwhile;
			endif; ?>
		</main>

		<div class="col-lg-4 sidebar">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div>
	</div>

<?php get_footer(); ?>
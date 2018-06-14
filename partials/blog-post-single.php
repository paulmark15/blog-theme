
	<div class="article-full">
		<h1 class="article-title"><span><?php the_title(); ?></span></h1>
		<div class="article-meta">
			<span class="date-head"><?php the_date(); ?></span>
		</div>
		<div class="article-full-image"><?php $img_alt = get_the_title(); the_post_thumbnail( 'blog-thumb-medium', array( 'alt' => $img_alt, 'class' => 'mb-3' ) ); ?></div>
		<div class="article-content">
			<?php the_content(); ?>
		</div>
	</div>
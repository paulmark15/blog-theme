<article class="article-small">
	<div class="article-image">
		<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
			<?php $img_alt = get_the_title(); the_post_thumbnail( 'blog-thumb-medium', array( 'alt' => $img_alt, 'class' => 'mb-3' ) ); ?>
		</a>
	</div>
	<div class="article-info">
		<h2 class="article-title"><a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>"><span><?php the_title(); ?></span></a></h2>
			<div class="article-excerpt"><?php the_excerpt(); ?></div>
			<?php
			$date = new DateTime($post->post_date);
			?>
			<div class="article-front-meta">Posted: <?= $date->format('F d, Y'); ?></div>
	</div>
</article>
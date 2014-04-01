<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<?php the_excerpt(); ?>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h3><?php the_title(); ?></h3>
	<?php the_excerpt(); ?>
<?php endwhile; else: ?>
	<p>There are no updates from <?php echo get_bloginfo(); ?></p>
<?php endif; ?>
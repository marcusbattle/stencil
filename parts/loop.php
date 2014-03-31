<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2>Title</h2>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
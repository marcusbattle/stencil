<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if ( $post->post_type == 'lemonbox_event' ): ?>
		
	<?php else: ?>
		<div class="row <?php echo $post->post_type; ?>">
			<div class="col-xs-4 col-md-3">
			    <a href="<?php the_permalink(); ?>" class="thumbnail">
			    	<img data-src="http://placehold.it/200x150" alt="...">
			    </a>
			</div>
			<div class="col-md-9">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php endif; ?>
<?php endwhile; else: ?>
	<p>There are no updates from <?php echo get_bloginfo(); ?></p>
<?php endif; ?>
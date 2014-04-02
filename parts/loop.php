<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-xs-6 col-md-3">
		    <a href="<?php the_permalink(); ?>" class="thumbnail">
		    	<img data-src="http://placehold.it/200x150" alt="...">
		    </a>
		</div>
		<div class="col-md-9">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
		</div>
	</div>
<?php endwhile; else: ?>
	<p>There are no updates from <?php echo get_bloginfo(); ?></p>
<?php endif; ?>
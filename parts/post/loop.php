<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="row <?php echo $post->post_type; ?>">
		<div class="col-md-4">
		    <a href="<?php the_permalink(); ?>" class="thumbnail">
		    	<img data-src="http://placehold.it/250x150" alt="...">
		    </a>
		</div>
		<div class="col-md-8">
			<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br />
				<small><span class="glyphicon glyphicon-calendar"></span> <?php echo get_the_date(); ?></small>
			</h3>
			<?php the_excerpt(); ?>
		</div>
	</article>

<?php endwhile; else: ?>
	<p>There are no updates from <?php echo get_bloginfo(); ?></p>
<?php endif; ?>
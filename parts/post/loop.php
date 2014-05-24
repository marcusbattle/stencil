<?php
	global $wp_query;
	
	$max_pages = $wp_query->max_num_pages;
	$current_page = ( $wp_query->query_vars['paged'] == 0 ) ? 1 : $wp_query->query_vars['paged'];

	$post_type = get_post_type_object( get_post_type() );
	$post_type_slug = isset($post_type->rewrite['slug']) ? $post_type->rewrite['slug'] : '';
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article class="row <?php echo $post->post_type; ?>">

		<?php if ( has_post_thumbnail() ): ?>
			<div class="col-md-4 col-sm-4">
			    <a href="<?php the_permalink(); ?>" class="thumbnail">
			    	<?php the_post_thumbnail(); ?>
			    </a>
			</div>
		<?php endif; ?>

		<div class="col-md-8 col-sm-8">
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

<?php if ( $max_pages > 1 ): ?>
<h4>View More <?php post_type_archive_title(); ?></h4>
<ul class="pagination">
	<!-- <li class="disabled"><a href="#">&laquo;</a></li> -->

	<?php for ( $index = 1; $index < $max_pages + 1; $index++ ): ?>
		<li class="<?php echo ( $current_page == $index ) ? 'active' : '' ?>"><a href="<?php echo home_url( $post_type_slug ); ?>/page/<?php echo $index ?>"><?php echo $index; ?> <span class="sr-only">(current)</span></a></li>
	<?php endfor; ?>

	<!-- <li><a href="#">&raquo;</a></li> -->
</ul>
<?php endif; ?>
<div class="row">
	<div class="col-md-9"> 
		<?php 
			if ( is_post_type_archive() ) get_template_part( 'parts/post/loop' ); 
			else get_template_part( 'parts/page/content' ); 
		?>
	</div>
	<div class="col-md-3">
	   	<?php dynamic_sidebar( 'Right Sidebar' ); ?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php 
			if ( is_post_type_archive() ) get_template_part( 'parts/post/loop' ); 
			else get_template_part( 'parts/page/content' ); 
		?>
	</div>
</div>
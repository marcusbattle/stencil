<?php 
	get_header(); 
	get_template_part( 'parts/nav' );
?>

   <div id="page-title" class="container-fluid blank">
      <div class="container">
         <div class="row">
            <div class="page-header col-md-12">
               <?php if ( is_post_type_archive() ): ?>
                  <h1><?php post_type_archive_title(); ?></h1>
               <?php else: ?>
                  <h1><?php the_title(); ?></h1>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>

   <div id="main" class="container-fluid">
      <div class="container <?php echo $page_layout ?>">
         <?php
            the_breadcrumb();
			get_template_part( 'parts/post/loop' );
         ?>
      </div>
   </div>

<?php get_footer(); ?>
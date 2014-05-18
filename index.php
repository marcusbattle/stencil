<?php

   if ( !is_post_type_archive() ) {
   
      $post_id = $post->ID;
      $parent_id = ($post->post_parent) ? $post->post_parent : $post_id;

      $page_layout = (get_post_meta( $post_id, '_page_layout', true )) ? get_post_meta( $post_id, '_page_layout', true ) : 'right-sidebar';

   }

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

            if ( $page_layout ) get_template_part( 'parts/' . $page_layout ); 
            else get_template_part( 'parts/right-sidebar' );
         ?>
      </div>
   </div>

<?php get_footer(); ?>
<?php

   if ( !is_post_type_archive() ) {

      global $post;

      $post_id = $post->ID;
      $parent_id = ($post->post_parent) ? $post->post_parent : $post_id;

      $page_layout = (get_post_meta( $post_id, '_page_layout', true )) ? get_post_meta( $post_id, '_page_layout', true ) : 'right-sidebar';

   }

   get_header();
   
   get_template_part( 'parts/nav' ); 

   ?>

   <div class="peep-hole container-fluid"></div>

   <div id="main" class="container-fluid">
      <div class="container <?php echo $page_layout ?>">
         <?php the_breadcrumb(); ?>
         <h1><?php the_title(); ?></h1>
         <div class="thumbnail <?php echo (get_the_post_thumbnail()) ? 'tall' : '' ?>" style="background-image: url(<?php echo $thumbnail_url; ?>);"></div>
         <?php 
            if ( $page_layout ) get_template_part( 'parts/' . $page_layout ); 
            else get_template_part( 'parts/right-sidebar' );
         ?>
      </div>
   </div>

<?php get_footer(); ?>
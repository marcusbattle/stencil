<?php

   $page_layout = (get_post_meta( $post->ID, '_page_layout', true )) ? get_post_meta( $post->ID, '_page_layout', true ) : 'right-sidebar';

   get_header();
   
   get_template_part( 'parts/nav' ); 

   $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

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
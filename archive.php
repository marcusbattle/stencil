<?php 
	get_header(); 
	get_template_part( 'parts/nav' );
?>

   <div class="peep-hole container-fluid"></div>

   <div id="main" class="container-fluid">
      <div class="container right-sidebar">
         <?php the_breadcrumb(); ?>
         <h1><?php post_type_archive_title(); ?></h1>
         <?php get_template_part( 'parts/right-sidebar' ); ?>
      </div>
   </div>

<?php get_footer(); ?>
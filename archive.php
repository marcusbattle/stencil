<?php 
	get_header(); 
	get_template_part( 'parts/nav' );
?>

   <div class="peep-hole container-fluid"></div>
   
   <div id="main" class="container-fluid">
      <div class="container <?php echo $page_layout ?>">
         <?php the_breadcrumb(); ?>
         <h1><?php post_type_archive_title(); ?></h1>
         <?php get_template_part( 'parts/post/loop' ); ?>
      </div>
   </div>

<?php get_footer(); ?>
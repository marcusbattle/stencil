<?php get_header(); ?>
   
   <?php get_template_part( 'parts/nav' ); ?>

   <div id="main" class="content container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <h2>Latest News</h2>
               <?php get_template_part( 'parts/post/loop' ); ?>
            </div>
            <div class="col-md-3 col-md-offset-1">
               <?php dynamic_sidebar( 'Right Sidebar' ); ?>
            </div>
         </div>
      </div>
   </div>

<?php get_footer(); ?>
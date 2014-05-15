<?php
   
   $post_id = $post->ID;
   $parent_id = ($post->post_parent) ? $post->post_parent : $post_id;

   $page_layout = (get_post_meta( $post_id, '_page_layout', true )) ? get_post_meta( $post_id, '_page_layout', true ) : 'right-sidebar';

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title><?php echo get_bloginfo(); ?></title>

      <?php wp_head(); ?>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <?php echo get_option('google_tag_manager'); ?>
      
      <?php if ( has_nav_menu( 'contact-menu' ) ): ?>
      <header class="contact">
         <div class="container">
            <div class="row">
               <?php wp_nav_menu( array( 'theme_location' => 'contact-menu', 'container' => false, 'menu_class' => 'contact-menu right' ) ); ?>
            </div>
         </div>
      </header>
      <?php endif; ?>

      <div class="container">
         <div class="row">
            <div class="branding col-md-3 col-sm-12 col-xs-12">
               <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/newjc/newjc-logo-small.png" /></a>
               <div class="title hide">
                  <h1><?php echo get_bloginfo(); ?></h1>
                  <span><?php echo get_bloginfo( 'description' ) ?></span>
               </div>
            </div>
            <div class="col-md-9">
               <?php if ( has_nav_menu( 'header-menu' ) ) 
                  wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu' ) ); 
               ?>
               <?php if ( $parent_id ): ?>
                  <ul class="nav nav-pills">
                     <?php wp_list_pages("title_li=&child_of=$parent_id"); ?>
                  </ul>
               <?php endif; ?>
            </div>
         </div>
      </div>

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

      <div class="container <?php echo $page_layout ?>">
         <?php 
            if ( $page_layout ) get_template_part( 'parts/' . $page_layout ); 
            else get_template_part( 'parts/right-sidebar' );
         ?>
      </div>

      <?php //if ( is_active_sidebar( 'Footer Main' ) ) : ?>
         <div class="container">
            <div class="row">
               <?php dynamic_sidebar( 'Footer' ); ?>
            </div>
         </div>
      <?php //endif; ?>

      <footer class="container">
         <div class="row">
            <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo(); ?>. All Rights Reserved.</p>
         </div>
      </footer>
      
      <?php wp_footer(); ?>
   </body>
</html>
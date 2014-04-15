<?php
   $page_layout = get_post_meta( $post->ID, '_page_layout', true );
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
      <?php if ( has_nav_menu( 'contact-menu' ) ): ?>
      <header class="contact container">
         <div class="row">
            <?php wp_nav_menu( array( 'theme_location' => 'contact-menu', 'container' => false, 'menu_class' => 'contact-menu right' ) ); ?>
         </div>
      </header>
      <?php endif; ?>

      <div class="container">
         <div class="row">
            <div class="branding col-md-3">
               <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/newjc/newjc-logo-small.png" /></a>
               <div class="title hide">
                  <h1><?php echo get_bloginfo(); ?></h1>
                  <span><?php echo get_bloginfo( 'description' ) ?></span>
               </div>
            </div>
            <div class="col-md-9">
               <?php if ( has_nav_menu( 'header-menu' ) ) 
                  wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu pull-right' ) ); 
               ?>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row">
            <div class="page-header">
               <h1><?php the_title(); ?></h1>
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
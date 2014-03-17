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

      <?php
         $content_text_color = get_option('content_text_color');
         $content_link_color = get_option('content_link_color');
      ?>

      <style>
         body { color:  <?php echo $content_text_color; ?>; }
         body a { color:  <?php echo $content_link_color; ?>; }
      </style>
   </head>
   <body>
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
            <?php if ( has_nav_menu( 'header-menu' ) ) 
               wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu' ) ); 
            ?>
            <div class="branding">
               <a href="<?php echo home_url(); ?>" class="logo"><img src="http://marcbook.local/theplatform/wp-content/uploads/2014/03/the-platform-logo.png" /></a>
               <div class="title">
                  <h1><?php echo get_bloginfo(); ?></h1>
                  <span><?php echo get_bloginfo( 'description' ) ?></span>
               </div>
            </div>
         </div>
      </div>

      <?php 

         if ( get_option('homepage_layout') == 'one-pager' ) {
            get_template_part( 'parts/home', 'one-pager' );
         }

      ?>

      <div class="container">
         <footer>
            <div class="row">
               <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo(); ?></p>
            </div>
         </footer>

      </div>
      
      <?php wp_footer(); ?>
   </body>
</html>
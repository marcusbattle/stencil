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
         <header class="contact container-fluid hidden-xs">
            <div class="container">
               <div class="row">
                  <?php wp_nav_menu( array( 'theme_location' => 'contact-menu', 'container' => false, 'menu_class' => 'contact-menu right' ) ); ?>
               </div>
            </div>
         </header><!-- header.contact -->
      <?php endif; ?>

      <div id="navbar" class="container-fluid">
         <div class="container">
            <div class="row">
               <div class="branding col-md-3 col-sm-12 col-xs-12 hidden-xs">
                  <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/newjc/newjc-logo-small.png" /></a>
                  <div class="title hide">
                     <h1><?php echo get_bloginfo(); ?></h1>
                     <span><?php echo get_bloginfo( 'description' ) ?></span>
                  </div>
               </div>
               <div class="col-md-9 col-xs-12">
                  <?php if ( has_nav_menu( 'header-menu' ) ): ?>
                     <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu hidden-xs hidden-s', 'walker' => new HeaderMenuWalker ) ); ?>
                     <div class="navbar navbar-inverse hidden-lg hidden-md hidden-sm" role="navigation" style="margin-left: -30px; margin-right: -30px; position: fixed; width: 100%; z-index: 99; top: 0;">
                        <div class="container">
                           <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                 <span class="sr-only">Toggle navigation</span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                                 <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#"><?php echo get_bloginfo(); ?></a>
                           </div>
                           <div class="collapse navbar-collapse">
                              <?php if ( has_nav_menu( 'contact-menu' ) ) wp_nav_menu( array( 'theme_location' => 'contact-menu', 'container' => false, 'menu_class' => 'nav navbar-nav contact-menu' ) ); ?>
                              <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new HeaderMenuWalker ) ); ?>
                           </div><!--/.nav-collapse -->
                        </div>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div><!-- #navbar -->

      <div class="content container-fluid">
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

      <div class="container-fluid">
         <div class="container">
            <div class="row">
               <?php dynamic_sidebar( 'Footer' ); ?>
            </div>
         </div>
      </div>

      <footer class="container-fluid">
         <div class="container">
            <div class="row">
               <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo(); ?>. All Rights Reserved.</p>
            </div>
         </div>
      </footer>
      
      <?php wp_footer(); ?>
   </body>
</html>
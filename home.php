<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>

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
           
            <div class="branding">
               <a class="logo"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/newjc/newjc-logo-small.png" /></a>
               <div class="title hide">
                  <h1><?php echo get_bloginfo(); ?></h1>
                  <span><?php echo get_bloginfo( 'description' ) ?></span>
               </div>
            </div>
            <?php if ( has_nav_menu( 'header-menu' ) ) 
               wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu' ) ); 
            ?>
         </div>
      </div>

      <?php if ( is_plugin_active( 'lemonbox-events/lemonbox-events.php' ) ): $upcoming_event = get_next_event(); ?>
         <?php if ( $upcoming_event ): ?>
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <h4>Next<br />Upcoming Event</h4>
                  </div>
                  <div class="col-md-3">
                     <h3><a href="<?php echo $upcoming_event->permalink ?>"><?php echo $upcoming_event->post_title ?></a></h3>
                     <span><?php echo $upcoming_event->date ?> <?php echo $upcoming_event->time ?> </span>
                  </div>
               </div>
            </div>
         <?php endif; ?>
      <?php endif; ?>

      <div class="container">
         <h2>Latest News</h2>
         <div class="row">
            <div class="col-md-9">
               <?php get_template_part( 'parts/loop' ); ?>
            </div>
            <div class="col-md-3">
               <?php dynamic_sidebar( 'Right Sidebar' ); ?>
            </div>
         </div>
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
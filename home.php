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
            <div class="branding col-md-3">
               <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/newjc/newjc-logo-small.png" /></a>
               <div class="title hide">
                  <h1><?php echo get_bloginfo(); ?></h1>
                  <span><?php echo get_bloginfo( 'description' ) ?></span>
               </div>
            </div>
            <div class="col-md-9">
               <?php if ( has_nav_menu( 'header-menu' ) ) 
                  wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu navbar-right' ) ); 
               ?>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1>Church with a mission to resolve homelessness in Greensboro and Greater North Carolina</h1>
               <p><a class="btn btn-primary btn-lg" role="button" href="/homelessness">Learn more</a></p>
            </div>
         </div>
      </div>

      <?php if ( is_plugin_active( 'lemonbox-events/lemonbox-events.php' ) ): $upcoming_event = get_next_event(); ?>
         <?php if ( $upcoming_event ): ?>
            <div id="upcoming-event" class="container">
               <div class="row">
                  <div class="col-md-3">
                     <h4>Next Upcoming Event</h4>
                     <p><a href="">View All Events</a></p>
                  </div>
                  <div class="col-md-4">
                     <h2>
                        <a href="<?php echo $upcoming_event->permalink ?>"><?php echo $upcoming_event->post_title ?></a>
                        <br /><small><?php echo $upcoming_event->date ?> <?php echo $upcoming_event->time ?></small>
                     </h2>
                  </div>
                  <div class="col-md-3">
                     <div class="event-countdown event-countdown-small" data-date="<?php echo $upcoming_event->date ?>" style="display: none;">
                        <div class="timer-col"><span id="days" class="label label-primary"></span><span class="timer-type">days</span></div>
                        <div class="timer-col"><span id="hours" class="label label-default"></span><span class="timer-type">hrs</span></div>
                        <div class="timer-col"><span id="minutes" class="label label-default"></span><span class="timer-type">mins</span></div>
                        <div class="timer-col"><span id="seconds" class="label label-default"></span><span class="timer-type">secs</span></div>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <h5>RSVP Status</h5>
                     <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">I Am Going <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="#">Going</a></li>
                           <li><a href="#">Not Going</a></li>
                           <li><a href="#">Not sure</a></li>
                        </ul>
                     </div>

                  </div>
               </div>
            </div>
         <?php endif; ?>
      <?php endif; ?>

      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <h2>Latest News</h2>
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
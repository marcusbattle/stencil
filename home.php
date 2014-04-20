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
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1>Church with a mission to resolve homelessness in Greensboro and Greater North Carolina</h1>
               <p><a class="btn btn-primary btn-md" role="button" href="<?php echo home_url(); ?>/homelessness">Learn more</a></p>
            </div>
         </div>
      </div>

      <?php if ( is_plugin_active( 'lemonbox-events/lemonbox-events.php' ) ): 
         $upcoming_event = get_next_event();
         $rsvp_statuses = array( 'yes' => "I'm Going", 'no' => "I'm not going", 'maybe' => "I'm not sure" ); ?>
         <?php if ( $upcoming_event ): ?>
            <div id="upcoming-event" class="container">
               <div class="row">
                  <div class="col-sm-5 col-md-5 col-md-offset-1">
                     <h2>
                        <a href="<?php echo $upcoming_event->permalink ?>"><?php echo $upcoming_event->post_title ?></a>
                        <br /><small><?php echo $upcoming_event->date ?></small>
                     </h2>
                     <p><a href="<?php echo home_url(); ?>/events">View all events</a></p>
                  </div>
                  <div class="col-sm-4 col-md-3">
                      <h4>Coming up in</h4>
                     <div class="event-countdown event-countdown-small" data-date="<?php echo $upcoming_event->date ?>" style="display: none;">
                        <div class="timer-col"><span id="days" class="label label-primary"></span><span class="timer-type">days</span></div>
                        <div class="timer-col"><span id="hours" class="label label-default"></span><span class="timer-type">hrs</span></div>
                        <div class="timer-col"><span id="minutes" class="label label-default"></span><span class="timer-type">mins</span></div>
                        <div class="timer-col"><span id="seconds" class="label label-default"></span><span class="timer-type">secs</span></div>
                     </div>
                  </div>
                   <div class="col-xs-12 col-sm-3 col-md-2">
                     <?php if( $upcoming_event->ticket_id ): ?>
                        <a type="button" class="btn btn-lg btn-primary" href="<?php echo $upcoming_event->permalink ?>">Buy Ticket $<?php echo isset($upcoming_event->ticket->meta['product_price'][0]) ? round($upcoming_event->ticket->meta['product_price'][0]) : '' ?></a>
                     <?php else: ?>
                        <h4>RSVP Status</h4>
                        <div class="btn-group">
                           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                              <?php echo isset($_COOKIE['rsvp_status']) ? $rsvp_statuses( $_COOKIE['rsvp_status'] ) : "I'm going" ?>
                           <span class="caret"></span></button>
                           <ul class="dropdown-menu" role="menu">
                              <li><a href="<?php echo $upcoming_event->permalink ?>?rsvp_status=yes">Going</a></li>
                              <li><a href="<?php echo $upcoming_event->permalink ?>?rsvp_status=no">Not Going</a></li>
                              <li><a href="<?php echo $upcoming_event->permalink ?>?rsvp_status=maybe">Not sure</a></li>
                           </ul>
                        </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         <?php endif; ?>
      <?php endif; ?>

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
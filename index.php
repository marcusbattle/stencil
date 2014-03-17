<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title><?php get_bloginfo(); ?></title>

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
      <div class="container">
         <div class="row">
            <?php if ( has_nav_menu( 'header-menu' ) ) 
               wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills' ) ); 
            ?>
            <div>
               <a class="logo"><img src="http://marcbook.local/theplatform/wp-content/uploads/2014/03/the-platform-logo.png" /></a>
               <h1><?php echo get_bloginfo(); ?> <br /><small><?php echo get_bloginfo( 'description' ) ?></small></h1>
            </div>
         </div>
         <div class="row">
            <div class="page-header">
               
            </div>
         </div>
      </div>
      

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>

      <?php wp_footer(); ?>
   </body>
</html>
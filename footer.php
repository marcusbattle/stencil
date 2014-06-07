      <footer>
         <div id="footer-widgets" class="container-fluid">
            <div class="container">
               <div class="row">
                  <?php dynamic_sidebar( 'Footer' ); ?>
               </div>
            </div>
         </div>

         <?php if ( has_nav_menu('footer-menu') ): ?>
            <div id="footer-menu" class="container-fluid">
               <div class="container">
                  <div class="row">
                     <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false ) ); ?>
                  </div>
               </div>
            </div><!-- #footer-menu -->
         <?php endif; ?>

         <div id="copyright" class="container-fluid">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo(); ?>. All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <?php get_template_part('parts/mobile-menu'); ?>

      <div class="background"></div>

      <?php wp_footer(); ?>
      <?php echo get_option('google_analytics'); ?>
   </body>
</html>
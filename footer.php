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
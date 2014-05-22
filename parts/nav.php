<div id="navbar" class="container-fluid">
   <div class="container">
      <div class="row">
         <div class="branding col-md-3 col-sm-12 col-xs-12 hidden-xs">
            <?php if ( get_theme_mod( 'stencil_logo' ) ) : ?>
               <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'stencil_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            <?php else : ?>
               <div class="title">
                  <h1 class="site-title"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                  <span class="site-description"><?php bloginfo( 'description' ); ?></span>
               </div>
            <?php endif; ?>
         </div>
         <div class="col-md-9 col-xs-12">
            <?php if ( has_nav_menu( 'header-menu' ) ): ?>
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills pull-right header-menu hidden-xs hidden-s', 'walker' => new HeaderMenuWalker ) ); ?>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div><!-- #navbar -->
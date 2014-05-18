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
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'nav nav-pills header-menu hidden-xs hidden-s', 'walker' => new HeaderMenuWalker ) ); ?>
               <div id="mobile-menu" class="navbar navbar-default hidden-lg hidden-md hidden-sm" role="navigation" style="margin-left: -30px; margin-right: -30px; position: fixed; width: 100%; z-index: 99; top: 0;">
                  <div class="container">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a>
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
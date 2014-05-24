<div id="mobile-header" class="">
	<?php if ( get_theme_mod( 'stencil_logo' ) ) : ?>
       <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'stencil_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
    <?php else : ?>
       <div class="title">
          <h1 class="site-title"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
          <span class="site-description"><?php bloginfo( 'description' ); ?></span>
       </div>
    <?php endif; ?>
	<a class="mobile-menu-trigger" href="#">Menu</a>
</div>

<div id="mobile-menu" class="slide">
	<?php wp_nav_menu( array( 
		'theme_location' => 'header-menu', 
		'container' => 'false',
		'menu_class' => 'nav nav-pills nav-stacked', 
		'walker' => new HeaderMenuWalker 
	) ); ?>
</div>

<div class="mobile-menu-overlay"></div>
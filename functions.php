<?php

	function init_stencil() {

		// Define theme supoort for Menus & Featured Images
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails' );

		// Define menu locations for Theme
		register_nav_menu( 'header-menu', __('Header Menu') );
		register_nav_menu( 'contact-menu', __('Contact Menu') );

		add_option( 'homepage_layout', 'one-pager', '', 'yes' );

	}
	
	function stencil_scripts() {

		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
		wp_enqueue_style( 'stencil-css', get_template_directory_uri() . '/assets/css/stencil.css' );

		wp_enqueue_script( 'jquery-1-11', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, false, true );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery-1-11'), false, true );

		wp_enqueue_script( 'stencil-js', get_template_directory_uri() . '/assets/js/stencil.js', array('jquery-1-11'), false, true );

	}

	function stencil_customize_register( $wp_customize ) {

		$colors = array();
		$colors[] = array(
			'slug'=>'content_text_color', 
			'default' => '#333',
			'label' => __('Content Text Color', 'Ari')
		);
		$colors[] = array(
			'slug'=>'content_link_color', 
			'default' => '#88C34B',
			'label' => __('Content Link Color', 'Ari')
		);
		foreach( $colors as $color ) {
			// SETTINGS
			$wp_customize->add_setting(
				$color['slug'], array(
					'default' => $color['default'],
					'type' => 'option', 
					'capability' => 
					'edit_theme_options'
				)
			);
			// CONTROLS
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					$color['slug'], 
					array('label' => $color['label'], 
					'section' => 'colors',
					'settings' => $color['slug'])
				)
			);
		}

	}

	function stencil_widgets_init() {

		$the_sidebars = wp_get_sidebars_widgets();

		if ( isset($the_sidebars['stencil_footer']) && ($the_sidebars['stencil_footer']) ) {
			
			$stencil_footer = $the_sidebars['stencil_footer'];
			$stencil_footer_count = floor( 12 / count( $stencil_footer ) );

		} else {

			$stencil_footer_count = 12;

		}

		register_sidebar( array(
			'name' => 'Left Sidebar',
			'id' => 'stencil_left_sidebar',
			'before_widget' => '<div class="stencil-widget%1 stencil-widget-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => 'Right Sidebar',
			'id' => 'stencil_right_sidebar',
			'before_widget' => '<div class="stencil-widget%1 stencil-widget-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => 'Footer',
			'id' => 'stencil_footer',
			'before_widget' => '<div class="col-md-' . $stencil_footer_count . ' stencil-widget stencil-widget-footer">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		) );	

	}

	function stencil_excerpt_length( $length ) {
		return 33;
	}

	function stencil_excerpt_more( ) {
		global $post;
		return '<p><a class="read_more" href="'. get_permalink($post->ID) . '">' . 'Read More</a></p>';
	}

	function stencil_meta_boxes() {
		$post_types = get_post_types( array( 'public' => true ), 'names' );

		// Set meta box for all public post types 
		foreach( $post_types as $post_type ) {
			add_meta_box( 'page_layout', 'Page Layout', 'stencil_meta_box_page_layout', $post_type, 'side', 'high' );
		}
	}

	function stencil_meta_box_page_layout( $post ) {

		$page_layout = get_post_meta( $post->ID, '_page_layout', true );

		echo '<p><strong>Layout</strong></p>';
		echo '<select name="_page_layout">';
		echo '<option value="">--</option>';
		echo '<option value="full-width">Full Width</option>';
		echo '<option value="left-sidebar">Left Sidebar</option>';
		echo '<option value="right-sidebar">Right Sidebar</option>';
		echo '</select>';

		echo "<script>jQuery('select[name=\"_page_layout\"]').val('" . $page_layout . "');</script>";
	}

	function stencil_save_post( $post_id ) {

		if ( isset($_REQUEST['_page_layout']) ) {
			update_post_meta( $post_id, '_page_layout', $_REQUEST['_page_layout'] );
		}

	}

	add_action( 'init', 'init_stencil' );
	add_action( 'wp_enqueue_scripts', 'stencil_scripts' );

	add_action( 'customize_register', 'stencil_customize_register' );
	add_action( 'widgets_init', 'stencil_widgets_init' );

	add_filter( 'excerpt_length', 'stencil_excerpt_length', 999 );
	add_filter( 'excerpt_more', 'stencil_excerpt_more' );

	add_action( 'add_meta_boxes', 'stencil_meta_boxes' );
	add_action( 'save_post','stencil_save_post' );

?>
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

	add_action( 'init', 'init_stencil' );
	add_action( 'wp_enqueue_scripts', 'stencil_scripts' );

	add_action( 'customize_register', 'stencil_customize_register' );

?>
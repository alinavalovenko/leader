<?php
	$vl_theme = wp_get_theme();

	if ( ! empty( $vl_theme['Template'] ) ) {
		$vl_theme = wp_get_theme( $vl_theme['Template'] );
	}
	if ( ! defined( 'DS' ) ) {
		define( 'DS', DIRECTORY_SEPARATOR );
	}
	define( 'VL_THEME_DIR', get_template_directory() );
	define( 'VL_THEME_URI', get_template_directory_uri() );
	define( 'VL_CSS_URI', VL_THEME_URI . '/assets/css/' );
	define( 'VL_JS_URI', VL_THEME_URI . '/assets/js/' );
	define( 'VL_IMAGES', VL_THEME_URI . '/assets/images/' );
	define( 'VL_INC_DIR', VL_THEME_DIR . DS . 'includes' . DS );
	define( 'VL_INC_URI', VL_THEME_URI . '/includes/' );
	define( 'VL_DEFAULT_IMAGE', VL_IMAGES . '/default.jpg' );
	define( 'VL_DEFAULT_ALT', 'Web Studio Leader' );

	require_once( VL_INC_DIR . 'class-theme-init.php' );
	require_once( VL_INC_DIR . 'vl-controller.php' );

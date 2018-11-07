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
define( 'VL_CSS_URI', VL_THEME_URI . '/css/' );
define( 'VL_JS_URI', VL_THEME_URI . '/js/' );
define( 'VL_IMAGES', VL_THEME_URI . '/images/' );
define( 'VL_DEFAULT_IMAGE', VL_IMAGES . 'default.jpg' );
define( 'VL_DEFAULT_ALT', 'Web Studio Leader' );

if ( ! class_exists( 'Valovenko_Init' ) ) {

	class Valovenko_Init {

		public function __construct() {
			add_action( 'wp_enqueue_scripts', array ( $this, 'vl_enqueue_scripts' ) );

		}

		function vl_enqueue_scripts() {
			wp_enqueue_style( 'vl-styles', VL_CSS_URI . 'style.css' );
			wp_enqueue_style( 'vl-animate', VL_CSS_URI . 'animate.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-bootstrap', VL_CSS_URI . 'bootstrap.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-fontastic', VL_CSS_URI . 'fontastic.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-fontawesome', VL_CSS_URI . 'fontawesome.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-lity', VL_CSS_URI . 'lity.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-owl-carousel', VL_CSS_URI . 'owl.carousel.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-sweetalert', VL_CSS_URI . 'sweetalert.css', array( 'vl-styles' ) );
			wp_enqueue_style( 'vl-whatsapp', VL_CSS_URI . 'whatsapp.css', array( 'vl-styles' ) );


			wp_enqueue_script( 'vl-jquery', VL_JS_URI . 'jquery-3.3.1.js', '', '3.3.1', true );
			wp_enqueue_script( 'vl-bootstrap', VL_JS_URI . 'bootstrap.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-fontawesome', VL_JS_URI . 'fontawesome.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-headline', VL_JS_URI . 'headline.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-isotope', VL_JS_URI . 'isotope.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-countimator', VL_JS_URI . 'jquery.countimator.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-form', VL_JS_URI . 'jquery.form.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-ripples', VL_JS_URI . 'jquery.ripples.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-validate', VL_JS_URI . 'jquery.validate.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-lity', VL_JS_URI . 'lity.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-carousel', VL_JS_URI . 'owl.carousel.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-sweetalert', VL_JS_URI . 'sweetalert.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-whatsapp', VL_JS_URI . 'whatsapp.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-wow', VL_JS_URI . 'wow.js', array( 'vl-jquery' ), '', true );
			wp_enqueue_script( 'vl-custom', VL_JS_URI . 'custom.js', array( 'vl-jquery' ), '', true );


			wp_localize_script( 'vl-jquery', 'sgo_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		}
	}
} new Valovenko_Init();
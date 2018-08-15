<?php
/** Leader 2018 functions and definitions
 *
 * @package leader-2018
 * @since 1.0
 * @version 1.0
 */

$ld_theme = wp_get_theme();

if ( ! empty( $ld_theme['Template'] ) ) {
    $ld_theme = wp_get_theme( $ld_theme['Template'] );
}
if ( ! defined( 'DS' ) ) {
    define( 'DS', DIRECTORY_SEPARATOR );
}

define( 'LEADER_THEME_NAME', $ld_theme['Name'] );
define( 'LEADER_THEME_SLUG', $ld_theme['Template'] );
define( 'LEADER_THEME_VERSION', $ld_theme['Version'] );
define( 'LEADER_THEME_DIR', get_template_directory() );
define( 'LEADER_THEME_URI', get_template_directory_uri() );

define( 'LEADER_CSS_URI', LEADER_THEME_URI . '/assets/css/' );
define( 'LEADER_JS_URI', LEADER_THEME_URI . '/assets/js/' );

define( 'LEADER_IMAGES', LEADER_THEME_URI . '/assets/images' );
define( 'LEADER_ADMIN_IMAGES', LEADER_THEME_URI . '/assets/admin/images' );

define( 'LEADER_FRAMEWORK_DIR', LEADER_THEME_DIR . DS . 'framework' );
define( 'LEADER_FRAMEWORK_URI', LEADER_THEME_URI . '/framework' );

define( 'LEADER_DEFAULT_IMAGE', LEADER_IMAGES . '/default.jpg' );
define( 'LEADER_DEFAULT_ALT', 'Slot Gallina Online');


/**
 * Load Leader Framework.
 *
 * @since 1.0
 */


/**
 * Enqueue scripts and styles for the front end.
 *
 * @since 1.0
 */

function ld_scripts() {

	// Load our main stylesheet.
	wp_enqueue_style( 'ld-styles', LEADER_CSS_URI . 'ld-styles.min.css' );

	// Load jquery script.
	wp_enqueue_script( 'ld-jquery', LEADER_JS_URI . 'jquery.min.js', '', '', true );
	// Load our main scripts.
	wp_enqueue_script( 'ld-scripts', LEADER_JS_URI . 'ld-scripts.min.js', array('ld-jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'ld_scripts' );

add_filter( 'excerpt_length', function(){
	return 25;
} );
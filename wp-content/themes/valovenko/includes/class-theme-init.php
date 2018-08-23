<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	if ( ! class_exists( 'ThemeInit' ) ) {
		class ThemeInit {
			public function __construct() {

				add_action( 'init', array ( &$this, 'disable_emojis' ) );
				add_action( 'init', array ( $this, 'register_menus_area' ) );
				add_action( 'widgets_init', array ( $this, 'register_widgets_area' ) );
				add_action( 'wp_enqueue_scripts', array ( $this, 'vl_scripts' ) );

				add_theme_support( 'post-thumbnails' );
				add_theme_support( 'title-tag' );
				set_post_thumbnail_size( 350, 350, false );

				//add_filter( 'script_loader_tag', array ( &$this, 'changed_tag_script'), 10, 3  );
				add_filter( 'style_loader_tag', array ( &$this, 'changed_tag_style' ), 10, 4 );
				add_filter( 'excerpt_more', array ( $this, 'sgo_excerpt_more' ) );
				add_filter( 'excerpt_length', function() {
					return 25;
				} );
				add_filter( 'wp_mail_from_name', function( $from_name ) {
					return bloginfo();
				} );

			}

			function disable_emojis() {
				remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
				remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
				remove_action( 'wp_head', 'wp_generator' );
				remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
				remove_action( 'wp_print_styles', 'print_emoji_styles' );
				remove_action( 'admin_print_styles', 'print_emoji_styles' );
				remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
				remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
				remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			}

			function changed_tag_script( $tag, $handle, $src ) {
				$tag = '<script src="' . $src . '" id="' . $handle . '" defer="defer"></script>';

				return $tag;
			}

			function changed_tag_style( $html, $handle, $href, $media ) {
				$html = '<link rel="stylesheet"  href="' . $href . '" media="' . $media . '" />';

				return $html;
			}

			function vl_scripts() {
				wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
				wp_enqueue_style( 'bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css', array ( 'bootstrap' ));
				wp_enqueue_style( 'styles', VL_THEME_URI . '/style.css', array ( 'bootstrap' ));
				wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array ( 'bootstrap' ));

				wp_enqueue_script( 'vl-jquery', VL_JS_URI . 'jquery.min.js', '', '', true );
				wp_enqueue_script( 'vl-scripts', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' , array ( 'vl-jquery' ), '', true );
				wp_localize_script( 'vl-jquery', 'vl_ajax', array ( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ), '', true );
			}

			function register_widgets_area() {

				register_sidebar( array (
					'name'          => 'Primary Sidebar',
					'id'            => 'sgo-primary-sidebar',
					'before_widget' => '<div>',
					'after_widget'  => '</div>',
					'before_title'  => '<h4 class="sgo-widget-title">',
					'after_title'   => '</h4>',
				) );
			}

			function register_menus_area() {
				register_nav_menus(
					array (
						'primary-menu' => esc_html__( 'Main Menu', 'valovenko' ),
					)
				);
			}

			function sgo_excerpt_more( $more ) {
				return '...';
			}
		}

		new ThemeInit();
	}

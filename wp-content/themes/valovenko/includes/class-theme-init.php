<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}
	if ( ! class_exists( 'ThemeInit' ) ) {
		class ThemeInit {
			public function __construct() {

				add_action( 'init', array ( &$this, 'disable_emojis' ) );
				add_theme_support( 'post-thumbnails' );
				add_theme_support( 'title-tag' );
				set_post_thumbnail_size( 350, 350, false );
				remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
				remove_action( 'wp_head', 'wp_generator' );
				remove_action( 'wp_head', 'wp_enqueue_script' );
				add_action( 'wp_footer', 'wp_enqueue_script' );
				add_filter( 'script_loader_tag', array ( &$this, 'changed_tag_script'), 10, 3  );
				add_filter( 'style_loader_tag', array ( &$this, 'changed_tag_style'), 10, 4  );


			}

			function disable_emojis() {
				remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
				remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
				remove_action( 'wp_print_styles', 'print_emoji_styles' );
				remove_action( 'admin_print_styles', 'print_emoji_styles' );
				remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
				remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
				remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			}


			function changed_tag_script( $tag, $handle, $src ) {
				$tag = '<script src="' . $src . '" id="'.$handle .'" defer="defer"></script>';
				return $tag;
			}

			function changed_tag_style($html, $handle, $href, $media){
				$html = '<link rel="stylesheet"  href="' . $href . '" media="' . $media . '" />';
				return $html;
			}
		}

		new ThemeInit();
	}

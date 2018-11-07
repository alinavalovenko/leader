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
			add_action( 'wp_enqueue_scripts', array( $this, 'vl_enqueue_scripts' ) );
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
}
new Valovenko_Init();
if ( function_exists( 'acf_add_local_field_group' ) ):

	acf_add_local_field_group( array(
		'key'                   => 'group_5be2fcf3a4ae6',
		'title'                 => 'Welcome Banner',
		'fields'                => array(
			array(
				'key'               => 'field_5be2fd005b66e',
				'label'             => 'Display Welcome Banner?',
				'name'              => 'is_active_welcome_banner',
				'type'              => 'true_false',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'message'           => 'Active',
				'default_value'     => 0,
				'ui'                => 0,
				'ui_on_text'        => '',
				'ui_off_text'       => '',
			),
			array(
				'key'               => 'field_5be2fd795b66f',
				'label'             => 'Welcome banner options',
				'name'              => 'welcome_banner_options',
				'type'              => 'group',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => array(
					array(
						array(
							'field'    => 'field_5be2fd005b66e',
							'operator' => '==',
							'value'    => '1',
						),
					),
				),
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'layout'            => 'block',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5be2fdec5b670',
						'label'             => 'title',
						'name'              => 'title',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 'Hello, my name is <strong>Alina Valovenko</strong>',
						'placeholder'       => 'Hello, my name is <strong>Alina Valovenko</strong>',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5be2fe005b671',
						'label'             => 'Animated text',
						'name'              => 'animated_text',
						'type'              => 'textarea',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '<span>I\'m a</span>
												<span class="cd-words-wrapper">
															<b class="is-visible">Developer</b>
															<b>Designer</b>
															<b>Freelancer</b>
												</span>',
						'placeholder'       => '<span>I\'m a</span><span class="cd-words-wrapper"><b class="is-visible">Developer</b><b>Designer</b></span>',
						'maxlength'         => '',
						'rows'              => 6,
						'new_lines'         => '',
					),
					array(
						'key'               => 'field_5be300055b672',
						'label'             => 'Description',
						'name'              => 'description',
						'type'              => 'textarea',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 'I\'m a  Full-Stack Web Developer with extensive
                    experience for over 8 years. My expertise is to create and design
                    Websites, Apps, Mockups and many more...',
						'placeholder'       => 'I\'m good at ...',
						'maxlength'         => '',
						'rows'              => '',
						'new_lines'         => 'br',
					),
					array(
						'key'               => 'field_5be3003d5b673',
						'label'             => 'Light button text',
						'name'              => 'light_button_text',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '25',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5be300695b674',
						'label'             => 'Light button link',
						'name'              => 'light_button_link',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '25',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5be300795b675',
						'label'             => 'Dark button text',
						'name'              => 'dark_button_text',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '25',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5be300825b676',
						'label'             => 'Dark button link',
						'name'              => 'dark_button_link',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '25',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					),
					array(
						'key'               => 'field_5be300975b677',
						'label'             => 'Background banner',
						'name'              => 'background_banner',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
					array(
						'key'               => 'field_5be300cc5b678',
						'label'             => 'Front banner',
						'name'              => 'front_banner',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'return_format'     => 'array',
						'preview_size'      => 'medium',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_template',
					'operator' => '==',
					'value'    => 'front-page.php',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => '',
		'active'                => 1,
		'description'           => '',
	) );


	acf_add_local_field_group(array(
		'key' => 'group_5be3050288c59',
		'title' => 'About Section',
		'fields' => array(
			array(
				'key' => 'field_5be30513e20ab',
				'label' => 'Display About Section?',
				'name' => 'display_about_section',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => 'Active',
				'default_value' => 0,
				'ui' => 0,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5be30539e20ac',
				'label' => 'About Section',
				'name' => 'about_section',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5be30513e20ab',
							'operator' => '==',
							'value' => '1',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_5be3055ce20ad',
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be3057ae20ae',
						'label' => 'Subtitle',
						'name' => 'subtitle',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '50',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be30590e20af',
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Something about you...',
						'placeholder' => 'Something about you...',
						'maxlength' => '',
						'rows' => '',
						'new_lines' => 'wpautop',
					),
					array(
						'key' => 'field_5be305c2e20b0',
						'label' => 'Name',
						'name' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Alina Valovenko',
						'placeholder' => 'Your name',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be305ece20b1',
						'label' => 'Email',
						'name' => 'email',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'alina.valovenko@gmail.com',
						'placeholder' => 'Your email',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be30610e20b2',
						'label' => 'Age',
						'name' => 'age',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => 26,
						'placeholder' => 26,
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be30629e20b3',
						'label' => 'From',
						'name' => 'from',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => 'Kharkiv, Ukraine',
						'placeholder' => 'City',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be30667e20b4',
						'label' => 'Dark button text',
						'name' => 'dark_button_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be30681e20b5',
						'label' => 'Dark button link',
						'name' => 'dark_button_link',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be3068ce20b6',
						'label' => 'Light button text',
						'name' => 'light_button_text',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5be3069ae20b7',
						'label' => 'Light button link',
						'name' => 'light_button_link',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '25',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

endif;
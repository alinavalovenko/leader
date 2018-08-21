<?php
	if ( function_exists( 'acf_add_local_field_group' ) ):

		acf_add_local_field_group( array (
			'key'                   => 'home_fields',
			'title'                 => 'Home',
			'fields'                => array (
				array (
					'key'           => 'vl_banner_image',
					'label'         => 'Banner Image',
					'name'          => 'banner_image',
					'type'          => 'image',
					'return_format' => 'array',
					'preview_size'  => 'thumbnail',
					'library'       => 'all',
				),
				array (
					'key'          => 'vl_reason_to_stay',
					'label'        => 'Reason to stay',
					'name'         => 'reason_to_stay',
					'type'         => 'repeater',
					'layout'       => 'table',
					'button_label' => 'Add new Reason',
					'sub_fields'   => array (
						array (
							'key'           => 'vl_reason_image',
							'label'         => 'reason image',
							'name'          => 'reason_image',
							'type'          => 'image',
							'return_format' => 'array',
							'preview_size'  => 'thumbnail',
							'library'       => 'all',
						),
						array (
							'key'   => 'vl_reason_title',
							'label' => 'reason title',
							'name'  => 'reason_title',
							'type'  => 'text',
						),
						array (
							'key'   => 'vl_reason_description',
							'label' => 'reason description',
							'name'  => 'reason_description',
							'type'  => 'textarea',
						),
					),
				),
				array (
					'key'        => 'vl_about_us',
					'label'      => 'About us',
					'name'       => 'about_us',
					'type'       => 'group',
					'layout'     => 'block',
					'sub_fields' => array (
						array (
							'key'   => 'vl_section_title',
							'label' => 'Section Title',
							'name'  => 'section_title',
							'type'  => 'text',
						),
						array (
							'key'   => 'vl_sub_title',
							'label' => 'Section Sub Title',
							'name'  => 'sub_title',
							'type'  => 'text',
						),
						array (
							'key'   => 'vl_section_content',
							'label' => 'Section Content',
							'name'  => 'section_content',
							'type'  => 'textarea',
						),
						array (
							'key'   => 'vl_work_period',
							'label' => 'work period',
							'name'  => 'work_period',
							'type'  => 'text',
						),
						array (
							'key'   => 'vl_success_count',
							'label' => 'success count',
							'name'  => 'success_count',
							'type'  => 'text',
						),
						array (
							'key'           => 'vl_image',
							'label'         => 'image',
							'name'          => 'image',
							'type'          => 'image',
							'return_format' => 'array',
							'preview_size'  => 'thumbnail',
							'library'       => 'all',
						),
					),
				),
				array (
					'key'               => 'vl_servises',
					'label'             => 'Servises',
					'name'              => 'servises_repeater',
					'type'              => 'repeater',
					'instructions'      => '',
					'required'          => 0,
					'conditional_logic' => 0,
					'wrapper'           => array (
						'width' => '',
						'class' => '',
						'id'    => '',
					),
					'collapsed'         => '',
					'min'               => 0,
					'max'               => 0,
					'layout'            => 'table',
					'button_label'      => '',
					'sub_fields'        => array (
						array (
							'key'     => 'vl_servises_title',
							'label'   => 'Title',
							'name'    => 'servises_title',
							'type'    => 'text',
							'wrapper' => array (
								'width' => '30',
								'class' => '',
								'id'    => '',
							),
						),
						array (
							'key'     => 'vl_servises_label',
							'label'   => 'Label',
							'name'    => 'servises_label',
							'type'    => 'text',
							'wrapper' => array (
								'width' => '30',
								'class' => '',
								'id'    => '',
							),
						),
						array (
							'key'     => 'vl_servises_proce',
							'label'   => 'Price',
							'name'    => 'services_price',
							'type'    => 'text',
							'wrapper' => array (
								'width' => '30',
								'class' => '',
								'id'    => '',
							),
						),
						array (
							'key'     => 'vl_servises_description',
							'label'   => 'Description',
							'name'    => 'services_description',
							'type'    => 'textarea',
							'wrapper' => array (
								'width' => '100',
								'class' => '',
								'id'    => '',
							),
						),
					),
				),
				array (
					'key'   => 'vl_our_features_work',
					'label' => 'OUR FEATURES WORK',
					'name'  => 'our_features_work',
					'type'  => 'gallery',
				),
			),
			'location'              => array (
				array (
					array (
						'param'    => 'page_type',
						'operator' => '==',
						'value'    => 'front_page',
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

	endif;

	function vl_banner_section() {
		$banner = get_field( 'banner_image' );
		if ( $banner ) {
			echo '<img src="' . $banner['url'] . '" srcset = "' . wp_get_attachment_image_srcset($banner['ID']) .'" alt="' . $banner['alt'] . '" />';
		} else {
			echo '<img src="' . VL_DEFAULT_IMAGE . '" alt="' . VL_DEFAULT_ALT . '" />';
		}
		unset($banner);
	}

	function vl_reason_to_stay_section(){
		$reason_to_stay = get_field('reason_to_stay');
		if($reason_to_stay) {
			var_dump( $reason_to_stay );
		} else {
			?>
<div class="reason-card">

</div>
<?php
		}
	}
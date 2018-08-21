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
							'key'     => 'vl_servises_price',
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
			echo '<img src="' . $banner['url'] . '" srcset = "' . wp_get_attachment_image_srcset( $banner['ID'] ) . '" alt="' . $banner['alt'] . '" />';
		} else {
			echo '<img src="' . VL_DEFAULT_IMAGE . '" alt="' . VL_DEFAULT_ALT . '" />';
		}
		unset( $banner );
	}

	function vl_reason_to_stay_section() {
		$reason_to_stay = get_field( 'reason_to_stay' );

		if ( $reason_to_stay ) {
			foreach ( $reason_to_stay as $item ) {
				?>
                <div class="reason-card col-xs-12 col-sm-4 col-md-3 col-lg-3">
                    <div class="reason-icon"><img src="<?php echo $item['reason_image']['url']; ?>"
                                                  alt="<?php echo $item['reason_image']['alt']; ?>"
                                                  class="thumbnail"/></div>
                    <div class="reason-title"><?php echo $item['reason_title']; ?></div>
                    <div class="reason-desc"><?php echo $item['reason_description']; ?></div>
                </div>
				<?php
			}
		} else {
			?>
            <div class="reason-card col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <div class="reason-icon"><img src="<?php echo VL_DEFAULT_IMAGE; ?>" alt="<?php echo VL_DEFAULT_ALT; ?>"
                                              class="thumbnail"/></div>
                <div class="reason-title">You Want to Revenue</div>
                <div class="reason-desc">for your online business through great design.</div>
            </div>
			<?php
		}
	}

	function v1_about_us() {
		$about_us = get_field( 'about_us' );
		if ( $about_us['section_title'] ) {
			?>
            <div class="about-us-subtitle"><?php echo $about_us['sub_title']; ?></div>
            <div class="about-us-title"><?php echo $about_us['section_title']; ?></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article>
					<?php echo $about_us['section_content']; ?>
                </article>

                <div class="row performance-indicators">
                    <div class="col-xs-6">
                        <div><?php echo $about_us['work_period']; ?></div>
                        <div>Weekly users</div>
                    </div>
                    <div class="col-xs-6">
                        <div><?php echo $about_us['success_count']; ?></div>
                        <div>Concurrent reports</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img src="<?php echo $about_us['image']['url']; ?>"
                     srcset="<?php wp_get_attachment_image_srcset( $about_us['image']['ID'] ); ?>"
                     alt="<?php echo $about_us['image']['alt']; ?>"/>
            </div>
			<?php
		} else {
			?>
            <div class="about-us-subtitle">OUR SHORT STORY</div>
            <div class="about-us-title">ABOUT US</div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <article>
                    <h4>Bize Constantly Growing Big Data Company</h4>
                    <p>Authoritatively leverage existing bleeding-edge infrastructures vis-a-vis scalable metrics.
                        Assertively synthesize out-of-the-box schemas before impactful materials. Progressively
                        actualize just in time partnerships with exceptional value.</p>
                </article>

                <div class="row performance-indicators">
                    <div class="col-xs-6">
                        <div>31m</div>
                        <div>Weekly users</div>
                    </div>
                    <div class="col-xs-6">
                        <div>200</div>
                        <div>Concurrent reports</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img src="<?php echo VL_DEFAULT_IMAGE; ?>" alt="<?php echo VL_DEFAULT_ALT; ?>"
                     class="thumbnail"/>
            </div>
			<?php
		}
	}

	function vl_services() {
		if ( have_rows( 'servises_repeater' ) ):
			while ( have_rows( 'servises_repeater' ) ) : the_row();
				?>
                <div class="service-card col-xs-12 col-sm-2 col-md-3 col-lg-3">
                    <div class="service-label"><?php the_sub_field( 'servises_label' ); ?></div>
                    <div class="service-title"><?php the_sub_field( 'servises_title' ); ?></div>
                    <div class="service-desc"><?php the_sub_field( 'services_description' ); ?></div>
                    <div class="service-price"><?php the_sub_field( 'services_price' ); ?></div>
                </div>
			<?php

			endwhile;

		else : ?>
            <div class="service-card col-xs-12 col-sm-2 col-md-3 col-lg-3">
                <div class="service-label">Hot</div>
                <div class="service-title">SEO MARKETING</div>
                <div class="service-desc">Rapidiously unleash accurate processes rather than revolutionary best
                    practices.
                </div>
                <div class="service-price">$100</div>
            </div>
		<?php endif;
	}

	function vl_gallery() {
		$images = get_field( 'our_features_work' );
		$size   = 'full'; // (thumbnail, medium, large, full or custom size)

		if ( $images ): ?>
            <ul>
				<?php foreach ( $images as $image ): ?>
                    <li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif;
	}

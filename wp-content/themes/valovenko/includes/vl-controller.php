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
			return $banner['url'];
		} else {
			return VL_DEFAULT_IMAGE;
		}
	}

	function vl_reason_to_stay_section() {
		$reason_to_stay = get_field( 'reason_to_stay' );

		if ( $reason_to_stay ) {
			foreach ( $reason_to_stay as $item ) {
				?>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="reason-card">
                        <div class="reason-icon"><img src="<?php echo $item['reason_image']['url']; ?>"
                                                      alt="<?php echo $item['reason_image']['alt']; ?>"
                                                      class="thumbnail"/></div>
                        <h6 class="reason-title"><?php echo $item['reason_title']; ?></h6>
                        <div class="reason-desc"><?php echo $item['reason_description']; ?></div>
                    </div>
                </div>
				<?php
			}
		} else {
			?>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="reason-card">
                    <div class="reason-icon"><img src="<?php echo VL_DEFAULT_IMAGE; ?>"
                                                  alt="<?php echo VL_DEFAULT_ALT; ?>"
                                                  class="thumbnail"/></div>
                    <h6 class="reason-title">You Want to Revenue</h6>
                    <div class="reason-desc">for your online business through great design.</div>
                </div>
            </div>
			<?php
		}
	}

	function v1_about_us() {
		$about_us = get_field( 'about_us' );
		if ( $about_us['section_title'] ) {
			?>
            <div class="row">
                <div class="about-us-header text-center">
                    <h6><?php echo $about_us['sub_title']; ?></h6>
                    <h2><?php echo $about_us['section_title']; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <article>
						<?php echo $about_us['section_content']; ?>
                    </article>
                    <div class=" row performance-indicators text-center">
                        <div class="col-xs-6 performance-item">
                            <div class="indicators-value"><?php echo $about_us['work_period']; ?></div>
                            <div class="indicators-text">лет опыта</div>
                        </div>
                        <div class="col-xs-6 performance-item">
                            <div class="indicators-value"><?php echo $about_us['success_count']; ?></div>
                            <div class="indicators-text">упешных дел</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <img src="<?php echo $about_us['image']['url']; ?>"
                         srcset="<?php echo wp_get_attachment_image_srcset( $about_us['image']['ID'] ); ?>" sizes="(max-width: 1420px) 100vw, 1420px" alt="<?php echo $about_us['image']['alt']; ?>"/>
                </div>
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

                <div class=" row performance-indicators text-center">
                    <div class="col-xs-6 performance-item">
                        <div class="indicators-value">31m</div>
                        <div class="indicators-text">Weekly users</div>
                    </div>
                    <div class="col-xs-6 performance-item">
                        <div class="indicators-value">200</div>
                        <div class="indicators-text">Concurrent reports</div>
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
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="service-card ">
                        <span class="service-label"><?php the_sub_field( 'servises_label' ); ?></span>
                        <div class="service-title"><?php the_sub_field( 'servises_title' ); ?></div>
                        <div class="service-desc"><?php the_sub_field( 'services_description' ); ?></div>
                        <span class="service-price"><?php the_sub_field( 'services_price' ); ?></span>
                    </div>
                </div>
			<?php

			endwhile;

		else : ?>
            <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="service-card">
                    <span class="service-label">Hot</span>
                    <div class="service-title">SEO MARKETING</div>
                    <div class="service-desc">Rapidiously unleash accurate processes rather than revolutionary best
                        practices.
                    </div>
                    <span class="service-price">$100</span>
                </div>
            </div>
		<?php endif;
	}

	function vl_gallery() {
		$images = get_field( 'our_features_work' );
		$size   = 'full'; // (thumbnail, medium, large, full or custom size)

		if ( $images ): ?>
            <section id="gallery" class="container">
                <h3 class="text-center">Our projects</h3>
				<?php foreach ( $images as $image ): ?>
                    <div class="col-12 col-md-4 col-sm-4">
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                    </div>
				<?php endforeach; ?>
            </section>

		<?php endif;
	}

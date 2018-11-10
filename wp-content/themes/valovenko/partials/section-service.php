<?php $group_data = get_field( 'services_options' ); ?>
<div id="services" class="single-section services-area parallax_img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--Heading section-->
                <div class="section-heading">
                    <h2 class="section-title"><?php echo $group_data['title']; ?></h2>
                    <p class="section-description"><?php echo $group_data['subtitle']; ?></p>
                </div>
                <!--Heading section ends!-->
            </div>
        </div>
        <div class="row">
			<?php if ( $group_data['services'] ): ?>
				<?php foreach ( $group_data['services'] as $item ) { ?>
                    <!--services item-->
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-service">
                            <!--icon-->
							<?php echo $item['icon']; ?>
                            <!--icon ends!-->
                            <div class="service-body">
                                <h6 class="service-title"><?php echo $item['service_name']; ?></h6>
                                <p class="service-description"><?php echo $item['service_description']; ?>    </p>
                            </div>
                        </div>
                    </div>
                    <!--services item ends!-->
				<?php } endif; ?>
        </div>
    </div>
</div>

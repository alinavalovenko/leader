<?php $group_data = get_field( 'welcome_banner_options' ); ?>
<div id="home" class="home-area parallax_img">
    <div class="water-effect"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!--Title text-->
            <div class="col-12 col-md-6 col-lg-6 home-content text-left">
                <!-- Super heading -->
                <h5 class="greet"><?php echo $group_data['title']; ?></h5>
                <!-- Super heading ends!-->
                <!-- heading text -->
                <h1 class="skills cd-headline letters scale">
					<?php echo $group_data['animated_text']; ?>
                </h1>
                <!-- heading text ends!-->
                <!-- description -->
                <p class="description"><?php echo $group_data['description']; ?>
                </p>
                <!-- description ends!-->
                <!-- button-->
                <div class="button-area">
                    <a class="btn scroll"
                       href="<?php echo $group_data['light_button_link']; ?>"><?php echo $group_data['light_button_text']; ?></a>
                    <a class="btn scroll button-scheme"
                       href="<?php echo $group_data['dark_button_link']; ?>"><?php echo $group_data['dark_button_text']; ?></a>
                </div>
                <!-- button ends! -->
            </div>
            <!--Title text ends!-->
        </div>
        <div class="image-item row h-100 align-items-center">
			<?php if ( ! $group_data['front_banner'] ) { ?>
                <img src="<?php echo VL_IMAGES . 'big-profile.png'; ?>"
                     alt="<?php echo esc_html__( VL_DEFAULT_ALT, 'valovenko' ); ?>">
			<?php } else { ?>
                <img src="<?php echo $group_data['front_banner']['url'] ?>"
                     alt="<?php echo esc_html__( $group_data['front_banner']['alt'], 'valovenko' ); ?>">
            <?php } ?>
        </div>
    </div>
</div>
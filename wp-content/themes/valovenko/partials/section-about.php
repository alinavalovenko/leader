<?php $group_data = get_field( 'about_section' ); ?>
<div id="about" class="single-section about-area">
	<div class="container">
		<div class="row">
			<!-- About image -->
			<div class="col-sm-12 col-lg-6">
				<div class="about-img">
					<img src="<?php echo VL_IMAGES . 'about-image.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
				</div>
			</div>
			<!-- About image ends! -->
			<!-- about content -->
			<div class="col-sm-12 col-lg-6">
				<div class="about-content">
					<!--Heading section-->
					<div class="section-heading">
						<h2 class="section-title"><?php echo $group_data['title']; ?></h2>
						<h6 class="about-role"><?php echo $group_data['subtitle']; ?></h6>
					</div>
					<!--Heading section ends!-->
					<!--Describtion-->
                    <?php echo $group_data['description']; ?>
					<!--Describtion ends!-->
					<hr>
					<!--about details-->
					<ul class="list-inline about-info">
						<li>
							<span><?php echo __('Name:'); ?></span>
							<p><?php  echo $group_data['your_name']?></p>
						</li>
						<li>
							<span><?php echo __('Email:'); ?></span>
							<p><a href="mailto:<?php  echo $group_data['email']?>"><?php  echo $group_data['email']?></a></p>
						</li>
						<li>
							<span><?php echo __('Age:'); ?></span>
							<p><?php  echo $group_data['age']?></p>
						</li>
						<li>
							<span><?php echo __('From:'); ?></span>
							<p><?php  echo $group_data['from']?></p>
						</li>
					</ul>
					<!--about details ends!-->
					<!--buttons-->
					<a href="<?php echo $group_data['dark_button_link']; ?>" class="btn button-scheme"><?php echo $group_data['dark_button_text']; ?></a>
					<a href="<?php echo $group_data['light_button_link']; ?>" class="btn scroll"><?php echo $group_data['light_button_text']; ?></a>
					<!--buttons ends!-->
				</div>
			</div>
		</div>
		<!-- about content ends! -->
	</div>
</div>
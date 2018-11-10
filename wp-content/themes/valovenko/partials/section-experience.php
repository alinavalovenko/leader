<?php $group_data = get_field('experience_options'); ?>
<div id="experience" class="single-section silver-bg experience-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-12">
				<!--experience content-->
				<div class="exp-content">
					<h5 class="subtitle"><?php echo $group_data['subtitle']; ?></h5>
					<h3><?php echo $group_data['title']; ?></h3>
					<div class="description">
						<?php echo $group_data['description']; ?>
                    </div>
					<a href="<?php echo $group_data['button_link']; ?>" class="btn scroll button-scheme"><?php echo $group_data['button_text']; ?></a>
				</div>
				<!--experience content ends!-->
			</div>
			<div class="col-lg-7 col-sm-12">
				<div class="row">
                    <?php if($group_data['companies']):?>
                    <?php foreach ($group_data['companies'] as $item):?>
					<div class="col-lg-4 col-sm-6">
						<!--company name area -->
						<div class="exp-block">
							<img class="img-icon" src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['alt']; ?>"/>
							<h4><?php echo $item['name'];?></h4>
							<h6><?php echo $item['period'];?></h6>
						</div>
					</div>
                    <?php endforeach; ?>
                    <?php endif; ?>
					<!--company name area ends!-->
				</div>
			</div>
		</div>
	</div>
</div>
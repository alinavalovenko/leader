<?php $group_data = get_field('portfolio_options'); ?>
<div id="portfolio" class="single-section silver-bg portfolio-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="section-heading">
					<h2 class="section-title"><?php echo $group_data['section_title']; ?></h2>
					<p class="section-description"><?php echo $group_data['section_subtitle']; ?></p>
				</div>
			</div>
			<!--portfolio list-->
			<div class="col-md-12 col-lg-12">
				<div class="works-filter-wrap">
					<div class="row">
						<ul class="col-lg-12 col-md-12 list-inline works-filter">
							<li class="list-inline-item tab-active" data-filter="*">Все</li>
							<li class="list-inline-item" data-filter=".balkon">Балконы</li>
							<li class="list-inline-item" data-filter=".mansarda">Мандарды</li>
							<li class="list-inline-item" data-filter=".besedka">Беседки</li>
							<li class="list-inline-item" data-filter=".bani">Бани/сауны</li>
						</ul>
					</div>
				</div>
				<div class="works-container row">

					<?php foreach ($group_data['portfolio_items'] as $item){ ?>
                        <div class="col-lg-4 col-sm-6 works-item <?php $item['category_filter'] ?>">
                            <div class="item-overlay">
                                <div class="category"><?php $item['category_name'] ?></div>
                                <img src="<?php $item['image']['url']; ?>" alt="<?php $item['image']['alt']; ?>"/>
                                <div class="overlay-content">
                                    <h6 class="overlay-title"><?php $item['project_name']; ?></h6>
                                    <div class="overlay-icons">
                                        <a href="<?php $item['image']['url']; ?>" data-lity>
                                            <span class="icon-eye"></span>
                                        </a>
                                        <a href="<?php $item['view_project_link']; ?>">
                                            <span class="icon-link"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
					<?php } ?>
				</div>
			</div>
			<!--portfolio list ends!-->
		</div>
	</div>
</div>
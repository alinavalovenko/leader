<?php
	/**
	 * Template Part: Home Page
	 */
	get_header(); ?>
<section id="banner">
    <h1>Banner</h1>
	<?php vl_banner_section(); ?>
</section>

<section id="reason-to-stay">
    <div class="container">
        <div class="row">
			<?php vl_reason_to_stay_section(); ?>
        </div>
    </div>
</section>

<section id="about-us" class="container">
	<?php v1_about_us(); ?>
</section>

<section id="services">
    <div class="container">
        <h3 class="text-center">Services</h3>
		<?php vl_services(); ?>
    </div>
</section>

<?php vl_gallery(); ?>

<main class="container">
	<?php if ( have_posts() ): the_post(); ?>
		<?php get_template_part( 'content' ); ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
</main>

<section id="contact-us">
    <div class="container">
        <h4 class="text-center">Contact Us</h4>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-5">
        <div class="contact-info">
            <ul>
                <li class="adress"><span class="glyphicon glyphicon-map-marker" aria-hidden="true">Kharkiv, Korolenko str, build 16</span></li>
                <li class="adress"><span class="glyphicon glyphicon-earphone" aria-hidden="true">Phone: <a
                                href="tel:+380664944787">+380 66 494 47 87</a></span></li>
                <li class="adress"><span class="glyphicon glyphicon-calendar" aria-hidden="true">Monday-Sunday : 9.00-19.00</span></li>
                <li class="adress"><span class="glyphicon glyphicon-envelope" aria-hidden="true">Email : <a
                                href="mailto:alina.valovenko@gmail.com">alina.valovenko@gmail.com</a></span></li>
                <li class="adress"><span class="glyphicon glyphicon-globe" aria-hidden="true">Web : <a
                                href="https://www.valovenko.com">https://www.valovenko.com</a></span></li>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-7">
        <div>
	        <?php
	        ?>
        </div>
    </div>
</div>
    </div>
</section>

<?php get_footer(); ?>

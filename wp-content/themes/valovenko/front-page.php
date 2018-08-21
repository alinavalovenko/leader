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
    <h4>Reason to stay</h4>
	<?php vl_reason_to_stay_section(); ?>
</section>

<section id="about-us">
    <h4>About Us</h4>

	<?php v1_about_us(); ?>
</section>

<section id="services">
    <h3>Services</h3>
	<?php vl_services(); ?>
</section>

<section id="gallery">
    <h4>Gallery</h4>
</section>

<section id="contact-us">
    <h4>Contact Us</h4>
</section>

<main>
	<?php if ( have_posts() ): the_post(); ?>
		<?php get_template_part( 'content' ); ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>
</main>
<?php get_footer(); ?>

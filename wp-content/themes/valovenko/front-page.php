<?php
/**
 *
 *  Template Name: Front Page
 *
 */?>
<?php get_header(); ?>
<!-- Start home -->
<?php get_template_part('partials/section', 'banner' ); ?>
<!-- home ends! -->
<!-- Start about -->
<?php get_template_part('partials/section', 'about' ); ?>
<!-- Start about ends! -->
<!-- Start experience -->
<?php get_template_part('partials/section', 'experience' ); ?>
<!-- experience ends! -->
<!--services-->
<?php get_template_part('partials/section', 'service' ); ?>
<!--services ends!-->
<!--portfolio-->
<?php get_template_part('partials/section', 'portfolio' ); ?>
<!--portfolio ends!-->
<!--Clients-->
<?php get_template_part('partials/section', 'reviews' ); ?>
<!--Clients ends!-->
<!--blog-->
<?php get_template_part('partials/section', 'blog' ); ?>
<!--blog ends!-->
<!--Get a Quote-->
<?php get_template_part('partials/section', 'quote' ); ?>
<!--Get a Quote ends!-->
<div class="contact parallax_img">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 m-auto">
	            <?php get_template_part('partials/contact-form' ); ?>
            </div>
        </div>
        <div class="row">
            <!--Call us   -->
	        <?php get_template_part('partials/contact-us' ); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>

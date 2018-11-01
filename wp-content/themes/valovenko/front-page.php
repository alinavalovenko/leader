<?php
/**
 * Template Part: Home Page
 */
get_header(); ?>
<section id="banner">
   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-7"></div>
           <div class="col-xs-12 col-sm-5"></div>
       </div>
   </div>
</section>

<section id="reason-to-stay">
    <div class="container">
        <div class="about-us-header text-center">
            <h6>HAVING 5 YEARS EXPERIENCE</h6>
            <h3>AMAZING <strong>EXPERIENCE</strong> WITH</h3>
        </div>
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
                    <ul class="list-inline">
                        <li class="adress"><i class="fa fa-map-marker" aria-hidden="true"></i>Kharkiv, Korolenko str,
                            build 16
                        </li>
                        <li class="adress"><i class="fa fa-phone" aria-hidden="true"></i>Phone: <a
                                    href="tel:+380664944787">+380 66 494 47 87</a></li>
                        <li class="adress"><i class="fa fa-calendar" aria-hidden="true"></i>Monday-Sunday : 9.00-19.00
                        </li>
                        <li class="adress"><i class="fa fa-envelope" aria-hidden="true"></i>Email : <a
                                    href="mailto:alina.valovenko@gmail.com">alina.valovenko@gmail.com</a>
                        </li>
                        <li class="adress"><i class="fa fa-globe" aria-hidden="true"></i>Web : <a
                                    href="https://www.valovenko.com">https://www.valovenko.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-7">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <input type="text" placeholder="Your name" class="form-control"></div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">

                            <input type="email" placeholder="Your email" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">

                            <input type="tel" placeholder="Your phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">

                            <textarea name="valovenko" id="valovenko" cols="30" rows="3"
                                      placeholder="Message" class="form-control"></textarea></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button class="vl-btn">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    #banner {
        background: url(<?php echo vl_banner_section(); ?>) no-repeat;
    }
</style>
<?php get_footer(); ?>

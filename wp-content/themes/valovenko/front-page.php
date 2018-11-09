<?php
/**
 *
 *  Template Name: Front Page
 *
 */ ?>
<?php get_header(); ?>
<!-- Start home -->
<?php
if ( get_field( 'is_active_welcome_banner' ) ) {
	get_template_part( 'partials/section', 'banner' );
} ?>
<!-- home ends! -->
<!-- Start about -->
<?php if ( get_field( 'display_about_section' ) ) {
	get_template_part( 'partials/section', 'about' );
} ?>
<!-- Start about ends! -->
<!-- Start experience -->
<?php if ( get_field( 'display_experience_section' ) ) {
	get_template_part( 'partials/section', 'experience' );
} ?>
<!-- experience ends! -->
<!--services-->
<?php if ( get_field( 'display_services_section' ) ) {
	get_template_part( 'partials/section', 'service' );
} ?>
<!--services ends!-->
<!--portfolio-->
<?php if ( get_field( 'display_portfolio_section' ) ) {
	get_template_part( 'partials/section', 'portfolio' );
} ?>
<!--portfolio ends!-->
<!--Clients-->
<?php get_template_part( 'partials/section', 'reviews' ); ?>
<!--Clients ends!-->
<!--blog-->
<?php if ( get_field( 'display_blog_section' ) ) {
	get_template_part( 'partials/section', 'blog' );
} ?>
<!--blog ends!-->
<!--Get a Quote-->
<?php if ( get_field( 'display_get_a_quote' ) ) {
	get_template_part( 'partials/section', 'quote' ); ?>
    <!--Get a Quote ends!-->
    <div class="contact parallax_img">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="contact-form">
                        <div class="section-heading text-center">
                            <h2 class="section-title">Get a Quote</h2>
                            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ratione!
                            </p>
                        </div>
                        <form action="php/form.php" method="post" id="validation" class="form-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="select-area">
                                        <select name="project">
                                            <option value="">What your project need?</option>
                                            <option value="Custom interface and layout">Custom interface and layout
                                            </option>
                                            <option value="CMS integrations (WordPress)">CMS integrations (WordPress)
                                            </option>
                                            <option value="Website design">Website design</option>
                                            <option value="Seo optimization">SEO optimization</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-area">
                                        <input name="name" type="text" required>
                                        <label class="floating-label">Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-area">
                                        <input name="email" type="email" required>
                                        <label class="floating-label">Email*</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-area">
                                        <input name="company" type="text" required>
                                        <label class="floating-label">Company Name*</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-area">
                                        <input name="phone" type="tel" required>
                                        <label class="floating-label">Phone*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="select-area">
                                        <select name="budget">
                                            <option value="">What is your budget?</option>
                                            <option value="under $500">My budget is under $500</option>
                                            <option value="$500 to $1000">My budget is between $500 to $1000</option>
                                            <option value="$1000 to $1500">My budget is between $1000 to $1500</option>
                                            <option value="over $1500">My budget is over $1500</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-area">
                                        <textarea name="message" rows="6" required></textarea>
                                        <label class="floating-label">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button name="submit" type="submit" class="btn button-scheme">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Call us   -->
                <div class="col-lg-8 col-sm-12 m-auto">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 contact-info">
                            <div class="icon-box"><span class="icon-phone"></span></div>
                            <h3>Call Us</h3>
                            <ul>
                                <li>(001) 8686 234 432</li>
                                <li>Office - (001) 2345 678 900</li>
                            </ul>
                        </div>
                        <!--Email us-->
                        <div class="col-12 col-md-6 col-lg-4 contact-info">
                            <div class="icon-box"><span class="icon-mail"></span></div>
                            <h3>Email Us</h3>
                            <ul>
                                <li>Info@example.com</li>
                                <li>support@example.com</li>
                            </ul>
                        </div>
                        <!--Address-->
                        <div class="col-12 col-md-12 col-lg-4 contact-info">
                            <div class="icon-box"><span class="icon-location"></span></div>
                            <h3>Address</h3>
                            <ul>
                                <li>Elston TCLexington</li>
                                <li>Ave 549MD, London, UK</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>

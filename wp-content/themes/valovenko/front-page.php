<?php
/**
 *
 *  Template Name: Front Page
 *
 */?>
<?php get_header(); ?>
<!-- Start home -->
<div id="home" class="home-area parallax_img">
    <div class="water-effect"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!--Title text-->
            <div class="col-12 col-md-6 col-lg-6 home-content text-left">
                <!-- Super heading -->
                <h5 class="greet">Hello, my name is <strong>Sadiq Siddiqui</strong></h5>
                <!-- Super heading ends!-->
                <!-- heading text -->
                <h1 class="skills cd-headline letters scale">
                    <span>I'm a</span>
                    <span class="cd-words-wrapper">
                     <b class="is-visible">Developer</b>
                     <b>Designer</b>
                     <b>Freelancer</b>
                     </span>
                </h1>
                <!-- heading text ends!-->
                <!-- description -->
                <p class="description">I'm a  Full-Stack Web Developer with extensive
                    experience for over 8 years. My expertise is to create and design
                    Websites, Apps, Mockups and many more...
                </p>
                <!-- description ends!-->
                <!-- button-->
                <div class="button-area">
                    <a class="btn scroll" href="#portfolio">Portfolio</a>
                    <a class="btn scroll button-scheme" href="#0">Resume</a>
                </div>
                <!-- button ends! -->
            </div>
            <!--Title text ends!-->
        </div>
        <div class="image-item row h-100 align-items-center">
            <img src="<?php echo VL_IMAGES . 'big-profile.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>">
        </div>
    </div>
</div>
<!-- home ends! -->
<!-- Start about -->
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
                        <h2 class="section-title">About Me</h2>
                        <h6 class="about-role">I am a Full-Stack Web Developer</h6>
                    </div>
                    <!--Heading section ends!-->
                    <!--Describtion-->
                    <p>Sed ut perspiciatis unde accusantium doloremque laudantium,totam rem aperiam.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
                    </p>
                    <!--Describtion ends!-->
                    <hr>
                    <!--about details-->
                    <ul class="list-inline about-info">
                        <li>
                            <span>Name:</span>
                            <p>Sadiq Siddiqui</p>
                        </li>
                        <li>
                            <span>Email:</span>
                            <p><a href="mailto:sadiq@example.com">sadiq@example.com</a></p>
                        </li>
                        <li>
                            <span>Age:</span>
                            <p>25</p>
                        </li>
                        <li>
                            <span>From:</span>
                            <p>Liverpool, United Kingdom</p>
                        </li>
                    </ul>
                    <!--about details ends!-->
                    <!--buttons-->
                    <a href="#0" class="btn button-scheme">Resume</a>
                    <a href="#experience" class="btn scroll">Experience</a>
                    <!--buttons ends!-->
                </div>
            </div>
        </div>
        <!-- about content ends! -->
    </div>
</div>
<!-- Start about ends! -->
<!-- Start experience -->
<div id="experience" class="single-section silver-bg experience-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <!--experience content-->
                <div class="exp-content">
                    <h5 class="subtitle">Having 8 years Experience</h5>
                    <h3>Amazing <span>experience</span> with those companies</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam
                    </p>
                    <p>eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo.
                    </p>
                    <a href="#portfolio" class="btn scroll button-scheme">Portfolio</a>
                </div>
                <!--experience content ends!-->
            </div>
            <div class="col-lg-7 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <!--company name area -->
                        <div class="exp-block">
                            <img class="img-icon" src="<?php echo VL_IMAGES . 'about-icon-01.png"'; ?> alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <h4>Themeforest</h4>
                            <h6>2016 - Present</h6>
                        </div>
                    </div>
                    <!--company name area ends!-->
                    <!--company name area -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="exp-block">
                            <img class="img-icon" src="<?php echo VL_IMAGES . 'about-icon-02.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <h4>Codecanyon</h4>
                            <h6>2015 - 2016</h6>
                        </div>
                    </div>
                    <!--company name area ends!-->
                    <!--company name area -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="exp-block">
                            <img class="img-icon" src="<?php echo VL_IMAGES . 'about-icon-03.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <h4>Videohive</h4>
                            <h6>2014 - 2015</h6>
                        </div>
                    </div>
                    <!--company name area ends!-->
                    <!--company name area -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="exp-block">
                            <img class="img-icon" src="<?php echo VL_IMAGES . 'about-icon-04.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <h4>Audiojungle</h4>
                            <h6>2013 - 2014</h6>
                        </div>
                    </div>
                    <!--company name area ends!-->
                    <!--company name area -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="exp-block">
                            <img class="img-icon" src="<?php echo VL_IMAGES . 'about-icon-06.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <h4>Graphicriver</h4>
                            <h6>2012 - 2013</h6>
                        </div>
                    </div>
                    <!--company name area ends!-->
                    <!--company name area -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="exp-block">
                            <img class="img-icon" src="<?php echo VL_IMAGES . 'about-icon-06.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <h4>3docean</h4>
                            <h6>2010 - 2012</h6>
                        </div>
                    </div>
                    <!--company name area ends!-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- experience ends! -->
<!--services-->
<div id="services" class="single-section services-area parallax_img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--Heading section-->
                <div class="section-heading">
                    <h2 class="section-title">Services</h2>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ratione!
                    </p>
                </div>
                <!--Heading section ends!-->
            </div>
        </div>
        <div class="row">
            <!--services item-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-service">
                    <!--icon-->
                    <span class="icon-display"></span>
                    <!--icon ends!-->
                    <div class="service-body">
                        <h6 class="service-title">Web Design</h6>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                            facere voluptate. Quidem, facere voluptate.
                        </p>
                    </div>
                </div>
            </div>
            <!--services item ends!-->
            <!--services item-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-service">
                    <!--icon-->
                    <span class="icon-phone"></span>
                    <!--icon ends!-->
                    <div class="service-body">
                        <h6 class="service-title">Responsive</h6>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                            facere voluptate. Quidem, facere voluptate.
                        </p>
                    </div>
                </div>
            </div>
            <!--services item ends!-->
            <!--services item-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-service">
                    <!--icon-->
                    <span class="icon-pen"></span>
                    <!--icon ends!-->
                    <div class="service-body">
                        <h6 class="service-title">Branding</h6>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                            facere voluptate. Quidem, facere voluptate.
                        </p>
                    </div>
                </div>
            </div>
            <!--services item ends!-->
            <!--services item-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-service">
                    <!--icon-->
                    <span class="icon-sound"></span>
                    <!--icon ends!-->
                    <div class="service-body">
                        <h6 class="service-title">Marketing</h6>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                            facere voluptate. Quidem, facere voluptate.
                        </p>
                    </div>
                </div>
            </div>
            <!--services item ends!-->
            <!--services item-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-service">
                    <!--icon-->
                    <span class="icon-camera"></span>
                    <!--icon ends!-->
                    <div class="service-body">
                        <h6 class="service-title">Photography</h6>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                            facere voluptate. Quidem, facere voluptate.
                        </p>
                    </div>
                </div>
            </div>
            <!--services item ends!-->
            <!--services item-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-service">
                    <!--icon-->
                    <span class="icon-heart"></span>
                    <!--icon ends!-->
                    <div class="service-body">
                        <h6 class="service-title">Customer Support</h6>
                        <p class="service-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                            facere voluptate. Quidem, facere voluptate.
                        </p>
                    </div>
                </div>
            </div>
            <!--services item ends!-->
        </div>
    </div>
</div>
<!--services ends!-->
<!--portfolio-->
<div id="portfolio" class="single-section silver-bg portfolio-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="section-heading">
                    <h2 class="section-title">Our Portfolio</h2>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ratione!
                    </p>
                </div>
            </div>
            <!--portfolio list-->
            <div class="col-md-12 col-lg-12">
                <div class="works-filter-wrap">
                    <div class="row">
                        <ul class="col-lg-12 col-md-12 list-inline works-filter">
                            <li class="list-inline-item tab-active" data-filter="*">All</li>
                            <li class="list-inline-item" data-filter=".brand">Brand</li>
                            <li class="list-inline-item" data-filter=".design">Design</li>
                            <li class="list-inline-item" data-filter=".photos">Photos</li>
                        </ul>
                    </div>
                </div>
                <div class="works-container row">
                    <div class="col-lg-4 col-sm-6 works-item brand">
                        <div class="item-overlay">
                            <div class="category">Brand</div>
                            <img src="<?php echo VL_IMAGES . 'portfolio-01.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="overlay-content">
                                <h6 class="overlay-title">Business Card</h6>
                                <div class="overlay-icons">
                                    <a href="images/portfolio-01.jpg" data-lity>
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 works-item design">
                        <div class="item-overlay">
                            <div class="category">Design</div>
                            <img src="<?php echo VL_IMAGES . 'portfolio-02.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="overlay-content">
                                <h6 class="overlay-title">Anime Art</h6>
                                <div class="overlay-icons">
                                    <a href="images/portfolio-02.jpg" data-lity>
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 works-item photos">
                        <div class="item-overlay">
                            <div class="category">Photos</div>
                            <img src="<?php echo VL_IMAGES . 'portfolio-03.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="overlay-content">
                                <h6 class="overlay-title">Business Card</h6>
                                <div class="overlay-icons">
                                    <a href="images/portfolio-03.jpg" data-lity>
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 works-item photos">
                        <div class="item-overlay">
                            <div class="category">Photos</div>
                            <img src="<?php echo VL_IMAGES . 'portfolio-04.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="overlay-content">
                                <h6 class="overlay-title">Business Card</h6>
                                <div class="overlay-icons">
                                    <a href="images/portfolio-04.jpg" data-lity>
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 works-item brand">
                        <div class="item-overlay">
                            <div class="category">Brand</div>
                            <img src="<?php echo VL_IMAGES . 'portfolio-05.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="overlay-content">
                                <h6 class="overlay-title">Business Card</h6>
                                <div class="overlay-icons">
                                    <a href="images/portfolio-05.jpg" data-lity>
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 works-item photos">
                        <div class="item-overlay">
                            <div class="category">Photos</div>
                            <img src="<?php echo VL_IMAGES . 'portfolio-06.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="overlay-content">
                                <h6 class="overlay-title">Business Card</h6>
                                <div class="overlay-icons">
                                    <a href="images/portfolio-06.jpg" data-lity>
                                        <span class="icon-eye"></span>
                                    </a>
                                    <a href="#0">
                                        <span class="icon-link"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--portfolio list ends!-->
        </div>
    </div>
</div>
<!--portfolio ends!-->
<!--Clients-->
<div id="clients" class="single-section clients-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="section-heading">
                    <h2 class="section-title">What our clients say?</h2>
                    <p class="section-description">With enough data, the numbers speak for themselves.</p>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <!--testimonial item-->
                    <div class="testimonial-item">
                        <p class="testimonial-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Quidem, facere voluptate. Quidem, facere voluptate. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.
                        </p>
                        <div class="testimonial-detail">
                            <img class="img-item" src="<?php echo VL_IMAGES . 'client-01.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="caption">
                                <div class="name">David Summit</div>
                                <div class="designation">CEO at <a href="#0">NewTemplate</a></div>
                                <div class="rating">
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--testimonial item ends!-->
                    <!--testimonial item-->
                    <div class="testimonial-item">
                        <p class="testimonial-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Quidem, facere voluptate. Quidem, facere voluptate. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.
                        </p>
                        <div class="testimonial-detail">
                            <img class="img-item" src="<?php echo VL_IMAGES . 'client-02.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="caption">
                                <div class="name">David Summit</div>
                                <div class="designation">CEO at <a href="#0">NewTemplate</a></div>
                                <div class="rating">
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--testimonial item ends!-->
                    <!--testimonial item-->
                    <div class="testimonial-item">
                        <p class="testimonial-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Quidem, facere voluptate. Quidem, facere voluptate. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Quidem, facere voluptate. Quidem, facere voluptate.
                        </p>
                        <div class="testimonial-detail">
                            <img class="img-item" src="<?php echo VL_IMAGES . 'client-03.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                            <div class="caption">
                                <div class="name">David Summit</div>
                                <div class="designation">CEO at <a href="#0">NewTemplate</a></div>
                                <div class="rating">
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star checked"></span>
                                    <span class="icon-star "></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--testimonial item ends!-->
                </div>
                <!-- testimonial-carousel ends! -->
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="section-heading">
                    <h2 class="section-title">Let the numbers speak!</h2>
                    <p class="section-description">With enough data, the numbers speak for themselves.</p>
                </div>
                <div class="row">
                    <!--counter box-->
                    <div class="col-lg-6 col-sm-6 counter-area">
                        <div class="icon-box"><span class="icon-world"></span></div>
                        <div class="counter">
                            <kbd>500</kbd>+
                            <div class="description"> Successfully completed cases</div>
                        </div>
                    </div>
                    <!--counter box ends!-->
                    <!--counter box-->
                    <div class="col-lg-6 col-sm-6 counter-area">
                        <div class="icon-box"><span class="icon-user"></span></div>
                        <div class="counter">
                            <kbd>750</kbd>+
                            <div class="description">Highly specialised consultants</div>
                        </div>
                    </div>
                    <!--counter box ends!-->
                    <!--counter box-->
                    <div class="col-lg-6 col-sm-6 counter-area">
                        <div class="icon-box"><span class="icon-star"></span></div>
                        <div class="counter">
                            <kbd>100</kbd>%
                            <div class="description">Satisfaction of our customers</div>
                        </div>
                    </div>
                    <!--counter box ends!-->
                    <!--counter box-->
                    <div class="col-lg-6 col-sm-6 counter-area">
                        <div class="icon-box"><span class="icon-world"></span></div>
                        <div class="counter">
                            <kbd>800</kbd>+
                            <div class="description">Countries where we have clients</div>
                        </div>
                    </div>
                    <!--counter box ends!-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Clients ends!-->
<!--blog-->
<div id="blog" class="single-section blog-area parallax_img">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="section-title">Blog</h2>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ratione!
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!--blog carousel-->
                <div class="owl-carousel blog-carousel">
                    <!--blog item-->
                    <div class="blog-item">
                        <div class="category">News</div>
                        <div class="img-item">
                            <img src="<?php echo VL_IMAGES . 'blog-01.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                        </div>
                        <div class="blog-text">
                            <div class="text-title">
                                <div class="date">Aug 13, 2018</div>
                                <a href="#0">
                                    <h3>How subscription business with user analytics</h3>
                                </a>
                                <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <!--blog item ends!-->
                    <!--blog item-->
                    <div class="blog-item">
                        <div class="category">News</div>
                        <div class="img-item">
                            <img src="<?php echo VL_IMAGES . 'blog-02.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                        </div>
                        <div class="blog-text">
                            <div class="text-title">
                                <div class="date">Aug 13, 2018</div>
                                <a href="#0">
                                    <h3>The benefits of a DevOps Approach</h3>
                                </a>
                                <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <!--blog item ends!-->
                    <!--blog item-->
                    <div class="blog-item">
                        <div class="category">News</div>
                        <div class="img-item">
                            <img src="<?php echo VL_IMAGES . 'blog-03.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                        </div>
                        <div class="blog-text">
                            <div class="text-title">
                                <div class="date">Aug 13, 2018</div>
                                <a href="#0">
                                    <h3>What is DevOps and why does it matter?</h3>
                                </a>
                                <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <!--blog item ends!-->
                    <!--blog item-->
                    <div class="blog-item">
                        <div class="category">Brands</div>
                        <div class="img-item">
                            <img src="<?php echo VL_IMAGES . 'blog-04.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
                        </div>
                        <div class="blog-text">
                            <div class="text-title">
                                <div class="date">Aug 13, 2018</div>
                                <a href="#0">
                                    <h3>The benefits of a DevOps Approach</h3>
                                </a>
                                <p>Will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                        </div>
                    </div>
                    <!--blog item ends!-->
                </div>
                <!--blog carousel-->
            </div>
        </div>
    </div>
</div>
<!--blog ends!-->
<!--Get a Quote-->
<div id="quote" class="single-section silver-bg quote-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 m-auto">
                <div class="section-heading ">
                    <h2 class="section-title">Have a project on Mind? </h2>
                    <p>Libero ipsam numquam quos minus at corporis illum, reiciendis aliquam ut non dolor. Optio
                        provident numquam
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                        <option value="Custom interface and layout">Custom interface and layout</option>
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
<?php get_footer(); ?>

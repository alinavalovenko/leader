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
                            <h2 class="section-title">Свяжитесь с нами</h2>
                            <p class="section-description">Бесплатная консультация и составление сметы
                            </p>
                        </div>
                        <form action="php/form.php" method="post" id="validation" class="form-area">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="select-area">
                                        <select name="project">
                                            <option value="">Что нужно сделать?</option>
                                            <option value="Обшивка вагонкой">Обшивка вагонкой
                                            </option>
                                            <option value="Обшивка пластиком">Обшивка пластиком
                                            </option>
                                            <option value="Обшивка блокхаус">Обшивка блокхаус</option>
                                            <option value="Обшивка сайдигом">Обшивка сайдигом</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-area">
                                        <input name="name" type="text" required>
                                        <label class="floating-label">Имя*</label>
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
                                        <label class="floating-label">Район Харькова</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-area">
                                        <input name="phone" type="tel" required>
                                        <label class="floating-label">Телефон*</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="select-area">
                                        <select name="budget">
                                            <option value="">Материалы и расходники</option>
                                            <option value="Закупка материалов исполнителем">Закупка материалов исполнителем</option>
                                            <option value="Закупка материалов заказчиком">Закупка материалов заказчиком</option>
                                            <option value="Совместная закупка материалов">Совместная закупка материалов</option>
                                            <option value="Под ключ">Под ключ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-area">
                                        <textarea name="message" rows="6" required></textarea>
                                        <label class="floating-label">Сообщение</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button name="submit" type="submit" class="btn button-scheme">Отправить сообщение</button>
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
                            <h3>Наши телефоны</h3>
                            <ul>
                                <li>(095) 183 77 62</li>
                                <li>(096) 423 98 27</li>
                            </ul>
                        </div>
                        <!--Email us-->
                        <div class="col-12 col-md-6 col-lg-4 contact-info">
                            <div class="icon-box"><span class="icon-mail"></span></div>
                            <h3>Напиши нам</h3>
                            <ul>
                                <li><a href="mailto:info@obshivka-balkona.biz.ua">info@obshivka-balkona.biz.ua</a></li>
                                <li>sales@obshivka-balkona.biz.ua</li>
                            </ul>
                        </div>
                        <!--Address-->
                        <div class="col-12 col-md-12 col-lg-4 contact-info">
                            <div class="icon-box"><span class="icon-location"></span></div>
                            <h3>Мы работаем</h3>
                            <ul>
                                <li>в г. Харьков</li>
                                <li>в Харьковской области</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>

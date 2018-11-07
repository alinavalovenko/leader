<!--footer-->
<footer class="single-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-sm-left text-center text-md-left">
                <div class="footer-logo-holder">
                    <a href="#0">
                        <img src="<?php echo VL_IMAGES . 'logo.png'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>">
                    </a>
                </div>
                <div class="footer-about-txt">
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <p> 'Fore' hosts a great set of highly creative unique element blocks
                                to display your content in the most outstanding way possible. It's time to move out of
                                the
                                regular boxes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-center text-sm-right text-md-right align-self-center">
                <ul class="footer-social">
                    <li><a href="#0" target="_blank" title="Facebook"> <i class="fab fa-facebook-f"></i> </a></li>
                    <li><a href="#0" target="_blank" title="Twitter"> <i class="fab fa-twitter"></i> </a></li>
                    <li><a href="#0" target="_blank" title="Instagram"> <i class="fab fa-instagram"></i></a></li>
                    <li><a href="#0" target="_blank" title="Behance"> <i class="fab fa-behance"></i> </a></li>
                </ul>
                <h6 class="copy-txt">Copyright © 2018 Valovenko.</h6>
            </div>
        </div>
    </div>
</footer>
<!--footer ends!-->
<!-- whatsapp -->
<!--popup-->
<div class="whatsapp-area">
    <div class="whatsapp-popup fadeOut">
        <div class="header">
            <button type="button" class="close-popup"><span class="icon-cancel"></span></button>
            <h2>Need help?</h2>
            <p>Contact us by whatsapp</p>
        </div>
        <div class="chat-area">
            <img class="img-item" src="<?php echo VL_IMAGES . 'whatsapp-img.jpg'; ?>" alt="<?php echo esc_html__(VL_DEFAULT_ALT, 'valovenko'); ?>"/>
            <p>How may I help you?</p>
        </div>
        <form class="form-area" id="form-area">
            <input class="whats-input" type="text" id="whats-in" Placeholder="Send Your Message..."/>
            <button type="submit" class="send-btn"><span class="icon-paper-plane-o"></span></button>
        </form>
    </div>
    <!--popup ends!-->
    <!--button-->
    <div class="chat-button-area zoomOut">
        <button type="button" id="whatsapp-btn" class="whatsapp-btn">
            <span class="icon-whatsapp"></span>
        </button>
        <div class="circle-animation"></div>
    </div>
    <!--button ends!-->
</div>
<!-- whatsapp ends!-->
<?php wp_footer(); ?>
</body>
</html>
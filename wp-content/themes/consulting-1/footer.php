<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Consulting
 */

?>

    <footer class="c-footer">
        <div class="c-footer__wrapper">

            <!--    logo      -->
            <div class="c-footer__copyr">
                <a href="index.html" class="c-footer__logo">
                    <img src="./images/logo.png" alt="fichi">
                </a>
                <span class="c-footer__sublogo">&#169;Copyright 2020. Made by moontheme</span>
            </div>

            <!--    navigation   -->
            <div class="c-footer__navigation">
                <p class="c-footer__nav">Link</p>
                <nav class="c-navigation">
                    <ul class="c-navigation__list c-footer__list">
                        <li class="c-navigation__item c-footer__item"><a href="./index.html">Home</a></li>
                        <li class="c-navigation__item c-footer__item"><a href="./about.html">About</a></li>
                        <li class="c-navigation__item c-footer__item"><a href="./work.html">Work</a></li>
                        <li class="c-navigation__item c-footer__item"><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <!--    contact      -->
            <div class="c-footer__connect">
                <p class="c-footer__nav">Stay Connected</p>
                <a href="mailto:info@moontheme.net" target="_blank" class="c-footer__mail">
                    <span>info@moontheme.net</span>
                </a>
                <p class="c-footer__address">
                    004 Riley Street, Surry <br>
                    Hills 2050 Sydney, Australia
                </p>
                <a href="tel:4525643324456" target="_blank" class="c-footer__tel">
                    <span>+ 452 56 4332 4456</span>
                </a>
            </div>

            <!--    social link      -->
            <div class="c-footer__link">
                <div class="c-footer__link-wrapper">
                    <a href="https://www.facebook.com/" target="_blank" class="c-footer__link-social c-footer__link-social--facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
                <div class="c-footer__link-wrapper">
                    <a href="https://twitter.com/?lang=ru" target="_blank" class="c-footer__link-social c-footer__link-social--twitter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                <div class="c-footer__link-wrapper">
                    <a href="https://www.instagram.com/" target="_blank" class="c-footer__link-social c-footer__link-social--instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>
</html>

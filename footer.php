<?php
// Ensure this file is being called by WordPress
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
?>
<!-- HTML code for footer -->
<footer id="gen-footer">
    <div class="gen-footer-style-1">
        <div class="gen-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-1.png" class="gen-footer-logo" alt="gen-footer-logo">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <ul class="social-link">
                                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" class="skype"><i class="fab fa-skype"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Explore</h4>
                            <div class="menu-explore-container">
                                <ul class="menu">
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/movies-pagination')); ?>">Movies</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/tv-shows-pagination')); ?>">TV Shows</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/video-pagination')); ?>">Videos</a></li>
                                    <li class="menu-item"><a href="#">Actors</a></li>
                                    <li class="menu-item"><a href="#">Basketball</a></li>
                                    <li class="menu-item"><a href="#">Celebrity</a></li>
                                    <li class="menu-item"><a href="#">Cross</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Company</h4>
                            <div class="menu-about-container">
                                <ul class="menu">
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact-us')); ?>">Company</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/terms-of-use')); ?>">Terms of Use</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/help-center')); ?>">Help Center</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/contact-us')); ?>">Contact Us</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/pricing-style-1')); ?>">Subscribe</a></li>
                                    <li class="menu-item"><a href="#">Our Team</a></li>
                                    <li class="menu-item"><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="widget">
                            <h4 class="footer-title">Download App</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/asset-35.png" class="gen-playstore-logo" alt="playstore">
                                    </a>
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/asset-36.png" class="gen-appstore-logo" alt="appstore">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gen-copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <span class="gen-copyright"><a target="_blank" href="#">Copyright 2021 StreamLab All Rights Reserved.</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer End -->

</main>
<footer class="footer" data-scroll-section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-12 footer__col" data-scroll data-scroll-delay="1" data-scroll-position="bottom">
                <?php dynamic_sidebar( 'footer-desc' ); ?>
            </div>
            <div class="col-sm-4 col-12 footer__col" data-scroll data-scroll-speed="2" data-scroll-position="bottom">
                <h3 class="titlesub titlesub--grey mb-4">Quick Links</h3>
                <div class="row">
                    <?php

                        wp_nav_menu(array(
                            'theme_location'       => 'footer_menu',
                            'container'            => 'div',
                            'container_class'      => 'col-md-5',
                            'menu_class'           => 'footer__menu nav flex-column',
                            'depth'                => 1,
                            'fallback_cb'          => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'               => new WP_Bootstrap_Navwalker()
                        ));

                        wp_nav_menu(array(
                            'theme_location'       => 'services_menu',
                            'container'            => 'div',
                            'container_class'      => 'col-md-7',
                            'menu_class'           => 'footer__menu nav flex-column',
                            'depth'                => 1,
                            'fallback_cb'          => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'               => new WP_Bootstrap_Navwalker()
                        ));

                        wp_nav_menu(array(
                            'theme_location'       => 'social_media',
                            'container'            => 'div',
                            'container_class'      => 'col-md-12 pt-3',
                            'menu_class'           => 'nav footer__socmed',
                            'depth'                => 1,
                            'fallback_cb'          => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'               => new WP_Bootstrap_Navwalker()
                        ));

                    ?>
                </div>
            </div>
            <div class="col-sm-4 col-12 footer__col" data-scroll data-scroll-speed="3" data-scroll-position="bottom">
                <h3 class="titlesub titlesub--grey mb-4">Join Newsletter</h3>
                <?php echo do_shortcode('[contact-form-7 id="94" title="Newsletter Form"]') ?>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="bsnav-mobile">
  <div class="bsnav-mobile-overlay"></div>
  <div class="navbar"></div>
</div>

<?php wp_footer() ?>
</body>
</html>
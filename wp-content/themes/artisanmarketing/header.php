<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_the_title() .' | '. get_bloginfo('name') .' - '. get_bloginfo('description') ?></title>

    <?php wp_head() ?>
</head>
<body>
<?php wp_body_open() ?>

<div class="loader">
    <div class="loader__logo-container">
        <img class="loader__logo" src="<?php echo get_template_directory_uri() ?>/img/loader-logo.png">
    </div>
    <span class="sr-only">Loading</span>
</div>

<header>
    <nav class="navbar navbar-expand-lg bsnav bsnav-sticky">
        <?php the_custom_logo() ?>

        <?php

            wp_nav_menu(array(
                'theme_location'       => 'social_media',
                'container'            => 'div',
                'container_class'      => '',
                'menu_class'           => 'navbar-nav navbar-socmed',
                'depth'                => 1,
                'fallback_cb'          => 'WP_Bootstrap_Navwalker::fallback',
                'walker'               => new WP_Bootstrap_Navwalker()
            ));

        ?>

        <button class="navbar-toggler toggler-spring ml-auto"><span class="navbar-toggler-icon"></span></button>

        <?php

            wp_nav_menu(array(
                'theme_location'       => 'main_menu',
                'container'            => 'div',
                'container_class'      => 'collapse navbar-collapse justify-content-md-end nav__main',
                'menu_class'           => 'navbar-nav navbar-mobile',
                'depth'                => 2,
                'fallback_cb'          => 'WP_Bootstrap_Navwalker::fallback',
                'walker'               => new WP_Bootstrap_Navwalker()
            ));

        ?>
    </nav>
</header>

<div data-scroll-container>
    <main class="below-navbar">
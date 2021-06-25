<?php

if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

function am_setup() {

    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'main_menu' => __( 'Main Menu', 'artisanmarketing' ),
        'footer_menu'  => __( 'Footer Menu', 'artisanmarketing' ),
        'services_menu'  => __( 'Services Menu', 'artisanmarketing' ),
        'social_media'  => __( 'Social Media Menu', 'artisanmarketing' ),
    ) );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'am_setup' );

/**
 * Change to classic editor
 */

add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Enqueue css js
 */

function am_enqueue() {
    
    wp_enqueue_style('bsnav', get_template_directory_uri().'/bsnav/bsnav.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('layout', get_template_directory_uri().'/dist/layout.css', array(), '1.0.0', 'all');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('layout', get_template_directory_uri().'/dist/layout.js', array(), '1.0.0', true);
    wp_enqueue_script('bsnav', get_template_directory_uri().'/bsnav/bsnav.min.js', array(), '1.0.0', true);

    if(is_front_page()) {
        wp_enqueue_style('home', get_template_directory_uri().'/dist/home.css', array(), '1.0.0', 'all');
        wp_enqueue_script('home', get_template_directory_uri().'/dist/home.js', array(), '1.0.0', true);
    }
    
}
  
add_action('wp_enqueue_scripts', 'am_enqueue');


/**
 * Logo
 */
  
function am_change_logo_class( $html ) {
  
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
    $html = str_replace( 'custom-logo', 'navbar-brand__img', $html );
  
    return $html;
}
  
add_filter( 'get_custom_logo', 'am_change_logo_class' );

/**
 * CMS Login Page
 */

function am_login_css() { 

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    ?>
    <style type="text/css">
        #login h1 a {
            background-image: url(<?php echo $logo[0] ?>);
            height:70px;
            width:100%;
            margin-bottom: 10px;
            background-position: bottom;
            background-size: contain;
            background-repeat: no-repeat;
        }
        body {
            background-color: #fff!important;
        }
        .login form {
            border: none!important;
            box-shadow: none!important;
        }
    </style>
    <?php 
}

add_action( 'login_enqueue_scripts', 'am_login_css' );

function am_login_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'am_login_logo_url' );

function am_custom_login_title($origtitle) { 
    return get_bloginfo('name').' - Login';
}

add_filter('login_title', 'am_custom_login_title', 99);

/**
 * Frontend Admin Bar
 */

add_filter( 'show_admin_bar', '__return_false' );

/**
 * Widget
 */

function am_widget_setup() {

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Description', 'artisanmarketing' ),
            'id'            => 'footer-desc',
            'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'artisanmarketing' ),
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="titlesub titlesub--grey mb-4">',
            'after_title'   => '</h3>',
        )
    );

}

add_action('widgets_init', 'am_widget_setup');

/**
 * Other Functions
 */

function am_img_asset( $fileName ) {
    echo get_template_directory_uri().'/img//'.$fileName;
}

function am_default_img() {
    echo get_template_directory_uri().'/img/img-placeholder.svg';
}

require_once get_template_directory() . '/inc/navwalker.php';
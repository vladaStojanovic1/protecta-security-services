<?php
function bootstrap_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/src/styles/css/vendor/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons-css', get_stylesheet_directory_uri() . '/src/styles/css/vendor/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'bootstrap_enqueue_styles');


add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'vladastheme-swiper-style', get_stylesheet_directory_uri() . '/src/styles/css/vendor/swiper.min.css' );
//    wp_enqueue_style( 'vladastheme-style', get_stylesheet_uri() );

    $style_path = get_stylesheet_directory() . '/style.css';
    $style_uri  = get_stylesheet_uri();
    $style_ver  = file_exists($style_path) ? filemtime($style_path) : null;

    wp_enqueue_style( 'vladastheme-style', $style_uri, array(), $style_ver );

    if( WP_DEBUG === true ) {
        wp_enqueue_script( 'vladastheme-swiper', get_template_directory_uri() . '/src/scripts/src/swiper.js', array('jquery'), true );
//        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/src/scripts/src/fancybox.js', array('jquery'), true );
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/scripts/src/bootstrap.bundle.min.js', array(), null, true);
        wp_enqueue_script( 'vladastheme-script', get_template_directory_uri() . '/src/scripts/src/script.js', array('jquery'), true );
    } else {
        wp_enqueue_script( 'vladastheme-swiper', get_template_directory_uri() . '/src/scripts/src/swiper.js', array('jquery'), true );
//        wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/src/scripts/src/fancybox.js', array('jquery'), true );
        wp_enqueue_script( 'textPlugin', get_template_directory_uri() . '/src/scripts/src/textPlugin.min.js', array('jquery'), true );
        wp_enqueue_script( 'gsap', get_template_directory_uri() . '/src/scripts/src/gsap.min.js', array('jquery'), true );
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/scripts/src/bootstrap.bundle.min.js', array(), true);

        wp_enqueue_script( 'vladastheme-script-min', get_template_directory_uri() . '/bundles/scripts/scripts.min.js', array('jquery'), true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
} );

include ( get_template_directory() . '/inc/_partials/index.php' );

//function wpb_custom_new_menu() {
//    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
//}
//add_action( 'init', 'wpb_custom_new_menu' );

function register_my_menus() {
    register_nav_menus(
        array(
            'desktop-menu' => __('Desktop Menu'),
            'mobile-menu' => __('Mobile Menu'),
            'services' => __('Services')
        )
    );
}
add_action('init', 'register_my_menus');



if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/src/scripts/src/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-st', get_template_directory_uri() . '/src/scripts/src/ScrollTrigger.min.js', array('gsap-js'), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

// Omogućavanje podrške za featured image
function enable_featured_images() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_featured_images');

function get_excerpt_words($content, $word_limit = 50) {
    $allowed_tags = [
        'strong' => [],
        'b' => [],
        'em' => [],
        'i' => [],
    ];

    $content = wp_kses($content, $allowed_tags);

    $words = explode(' ', $content);

    if (count($words) > $word_limit) {
        $excerpt = implode(' ', array_slice($words, 0, $word_limit)) . '...';
    } else {
        $excerpt = $content;
    }
    return $excerpt;
}



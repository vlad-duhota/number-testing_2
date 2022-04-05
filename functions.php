<?php
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );

remove_action('wp_head', 'wp_resource_hints', 2 );          //remove dns-prefetch
remove_action('wp_head', 'wp_generator');                   //remove meta name="generator"
remove_action('wp_head', 'wlwmanifest_link');               //remove wlwmanifest
remove_action('wp_head', 'rsd_link');                       //remove EditURI
remove_action('wp_head', 'rest_output_link_wp_head');       //remove 'https://api.w.org/
remove_action('wp_head', 'rel_canonical');                  //remove canonical
remove_action('wp_head', 'wp_shortlink_wp_head', 10);       //remove shortlink
remove_action('wp_head', 'wp_oembed_add_discovery_links');  //remove alternate

// styles
add_action('wp_enqueue_scripts', 'site_styles');
function site_styles () {
    $version = '0.1';
    wp_dequeue_style('wp-block-library');
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css', [], $version);
    wp_enqueue_style('hero-style', get_template_directory_uri() . '/assets/css/hero.css', [], $version);
    wp_enqueue_style('what-style', get_template_directory_uri() . '/assets/css/what.css', [], $version);
    wp_enqueue_style('serve-style', get_template_directory_uri() . '/assets/css/serve.css', [], $version);
    wp_enqueue_style('companies-style', get_template_directory_uri() . '/assets/css/companies.css', [], $version);
    wp_enqueue_style('faq-style', get_template_directory_uri() . '/assets/css/faq.css', [], $version);
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css', [], $version);
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css', [], $version);
    wp_enqueue_style('widget-style', get_template_directory_uri() . '/assets/css/widget.css', [], $version);
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', $version);
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', $version);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', [], $version);
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', [], $version);
}

// scripts
add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
    $version = '0.1';
    wp_deregister_script( 'jquery' );
    wp_deregister_script('wp-embed');
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], $version, true);
    wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', [], $version, true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', [], $version, true);
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', [], $version, true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], $version, true);

    // ======== wow animation ========
	// wp_add_inline_script('wow', '
    //     wow = new WOW(
    //         {
    //             boxClass:     "wow",
    //             animateClass: "animated",
    //             offset:       0,
    //             mobile:       false,
    //             live:         true
    //         }
    //     )
    //     wow.init();
    // ');
}

// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
}

// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');
add_image_size('product', 500, 313, true);

// Global variables

// hide front page text editor
function disable_content_editor()
{
    if (isset($_GET['post'])) {
        $post_ID = $_GET['post'];
    } else if (isset($_POST['post_ID'])) {
        $post_ID = $_POST['post_ID'];
    }

    if (!isset($post_ID) || empty($post_ID)) {
        return;
    }

    $page_template = get_post_meta($post_ID, '_wp_page_template', true);
    if ($page_template == 'front-page.php') {
        remove_post_type_support('page', 'editor');
    }
}
add_action('admin_init', 'disable_content_editor');

// include the menu etc
add_action( 'after_setup_theme', 'theme_support' );
function theme_support() {
  register_nav_menu( 'main_menu', 'Main menu' );
}


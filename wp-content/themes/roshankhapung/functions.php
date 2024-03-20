<?php
/**
 * Theme functions and definitions
 *
 * @package roshankhapung
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'roshankhapung_VERSION', '1.0.0' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; // Pixels.
}

function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style-font', get_template_directory_uri() . '/assets/fonts/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('style-font');

    wp_register_style('slick-css', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.css', array(), false, 'all');
    wp_enqueue_style('slick-css');

    wp_register_style('style', get_template_directory_uri() . '/assets/scss/main.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');

    wp_deregister_script('bootstrap_js');
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/bootstrap-5.3.3-dist/js/bootstrap.min.js', '', 4.4, true);
    add_action('wp_enqueue_scripts', 'bootstrap_js');

    wp_deregister_script('slick-js');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/slick-1.8.1/slick/slick.min.js', '', 1.8, true);
    add_action('wp_enqueue_scripts', 'slick-js');

    // wp_deregister_script('tag-js');
    // wp_enqueue_script('tag-js', get_template_directory_uri() . '/assets/js/jquery.svg3dtagcloud.min.js', '', 0.1, true);
    // add_action('wp_enqueue_scripts', 'tag-js');

    // wp_deregister_script('validation-js');
    // wp_enqueue_script('validation-js', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.min.js', '', 0.1, true);
    // add_action('wp_enqueue_scripts', 'validation-js');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function loadjs(){
    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/scripts.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

add_theme_support('menus');
add_theme_support('post-thumbnails');

if ( ! function_exists( 'roshankhapung_setup' ) ) {
    /**
     * Set up theme support.
     *
     * @return void
    */
    function roshankhapung_setup() {
        
        add_theme_support(
            'custom-logo',
            [
                'height'      => 100,
                'width'       => 350,
                'flex-height' => true,
                'flex-width'  => true,
            ]
        );

        add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			]
        );

        if ( apply_filters( 'roshankhapung_post_type_support', true ) ) {
			add_post_type_support( 'page', 'excerpt' );
		}

        register_nav_menus(
            array(
                'primary-menu' => __( 'Primary Menu', 'roshankhapung' ),
                // You can add more menus by adding additional lines here
                // 'secondary-menu' => __( 'Secondary Menu', 'mytheme' ),
            )
        );

        /*
		 * Editor Style.
		*/
		add_editor_style( 'classic-editor.css' );

        /*
		 * Gutenberg wide images.
		*/
		add_theme_support( 'align-wide' );

        /*
		 * WooCommerce.
		 */
		if ( apply_filters( 'roshankhapung_add_woocommerce_support', true ) ) {
			// WooCommerce in general.
			add_theme_support( 'woocommerce' );
			// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
			// zoom.
			add_theme_support( 'wc-product-gallery-zoom' );
			// lightbox.
			add_theme_support( 'wc-product-gallery-lightbox' );
			// swipe.
			add_theme_support( 'wc-product-gallery-slider' );
		}

    }
}
add_action( 'after_setup_theme', 'roshankhapung_setup' );

    
//For add more extra single page
function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

 



?>
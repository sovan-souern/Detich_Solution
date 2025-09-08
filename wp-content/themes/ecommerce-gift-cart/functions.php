<?php
/**
 * Ecommerce Gift Cart functions and definitions
 *
 * @package Ecommerce Gift Cart
 * @since 1.2
 */

if ( ! function_exists( 'ecommerce_gift_cart_support' ) ) :
	function ecommerce_gift_cart_support() {

		load_theme_textdomain( 'ecommerce-gift-cart', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'ecommerce_gift_cart_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('ECOMMERCE_GIFT_CART_BUY_NOW',__('https://www.themescarts.com/products/ecommerce-gift-wordpress-theme/','ecommerce-gift-cart'));
		define('ECOMMERCE_GIFT_CART_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/ecommerce-gift-cart/','ecommerce-gift-cart'));

	}
endif;
add_action( 'after_setup_theme', 'ecommerce_gift_cart_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'ecommerce_gift_cart_styles' ) ) :
	function ecommerce_gift_cart_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('ecommerce-gift-cart-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('owl-carousel-css', get_template_directory_uri(). '/assets/css/owl.carousel.css');
		wp_enqueue_style('ecommerce-gift-cart-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('ecommerce-gift-cart-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
		wp_style_add_data( 'ecommerce-gift-cart-basic-style', 'rtl', 'replace' );

		wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'ecommerce-gift-cart-custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
		
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'ecommerce_gift_cart_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
require_once get_theme_file_path( 'inc/ecommerce-gift-cart-theme-info-page/templates/class-theme-notice.php' );
require_once get_theme_file_path( 'inc/ecommerce-gift-cart-theme-info-page/class-theme-info.php' );

require_once get_theme_file_path( '/inc/customizer.php' );

// TGM
require get_template_directory() . '/inc/tgm/tgm.php';

?>
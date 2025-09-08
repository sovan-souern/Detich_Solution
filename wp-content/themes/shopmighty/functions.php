<?php
if (! defined('SHOPMIGHTY_VERSION')) {
	// Replace the version number of the theme on each release.
	define('SHOPMIGHTY_VERSION', wp_get_theme()->get('Version'));
}
define('SHOPMIGHTY_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('SHOPMIGHTY_DIR', trailingslashit(get_template_directory()));
define('SHOPMIGHTY_URL', trailingslashit(get_template_directory_uri()));

if (! function_exists('shopmighty_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function shopmighty_support()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		// Add support for block styles.
		add_theme_support('wp-block-styles');
		add_theme_support('post-thumbnails');
		// Enqueue editor styles.
		add_editor_style('style.css');
		// Removing default patterns.
		remove_theme_support('core-block-patterns');
	}

endif;
add_action('after_setup_theme', 'shopmighty_support');

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (! function_exists('shopmighty_styles')) :
	function shopmighty_styles()
	{
		// registering style for theme
		wp_enqueue_style('shopmighty-style', get_stylesheet_uri(), array(), SHOPMIGHTY_VERSION);
		wp_enqueue_style('shopmighty-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), SHOPMIGHTY_VERSION);
		wp_enqueue_style('shopmighty-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), SHOPMIGHTY_VERSION);
		if (is_rtl()) {
			wp_enqueue_style('shopmighty-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', SHOPMIGHTY_VERSION);
		}
		wp_enqueue_script('jquery');
		wp_enqueue_script('shopmighty-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), SHOPMIGHTY_VERSION, true);
		wp_enqueue_script('shopmighty-scripts', get_template_directory_uri() . '/assets/js/shopmighty-scripts.js', array(), SHOPMIGHTY_VERSION, true);
	}
endif;

add_action('wp_enqueue_scripts', 'shopmighty_styles');

/**
 * Enqueue scripts for admin area
 */
function shopmighty_admin_style()
{
	$hello_notice_current_screen = get_current_screen();
	if (! empty($_GET['page']) && 'about-shopmighty' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
		wp_enqueue_style('shopmighty-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), SHOPMIGHTY_VERSION, 'all');
		wp_enqueue_script('shopmighty-admin-scripts', get_template_directory_uri() . '/assets/js/shopmighty-admin-scripts.js', array(), SHOPMIGHTY_VERSION, true);
		wp_localize_script(
			'shopmighty-admin-scripts',
			'shopmighty_admin_localize',
			array(
				'ajax_url' => admin_url('admin-ajax.php'),
				'nonce'    => wp_create_nonce('shopmighty_admin_nonce'),
			)
		);
		wp_enqueue_script('shopmighty-welcome-notice', get_template_directory_uri() . '/inc/admin/js/shopmighty-welcome-notice.js', array('jquery'), SHOPMIGHTY_VERSION, true);
		wp_localize_script(
			'shopmighty-welcome-notice',
			'shopmighty_localize',
			array(
				'ajax_url'     => admin_url('admin-ajax.php'),
				'nonce'        => wp_create_nonce('shopmighty_welcome_nonce'),
				'redirect_url' => admin_url('themes.php?page=_cozy_companions'),
			)
		);
	}
}
add_action('admin_enqueue_scripts', 'shopmighty_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function shopmighty_block_assets()
{
	wp_enqueue_style('shopmighty-swiper-bundle-editor-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), SHOPMIGHTY_VERSION);
	wp_enqueue_style('shopmighty-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
	wp_enqueue_script('shopmighty-swiper-bundle-editor-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), SHOPMIGHTY_VERSION, true);
}
add_action('enqueue_block_assets', 'shopmighty_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (! function_exists('shopmighty_excerpt_more_postfix')) {
	function shopmighty_excerpt_more_postfix($more)
	{
		if (is_admin()) {
			return $more;
		}
		return '...';
	}
	add_filter('excerpt_more', 'shopmighty_excerpt_more_postfix');
}
function shopmighty_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'shopmighty_add_woocommerce_support');

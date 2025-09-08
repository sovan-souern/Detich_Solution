<?php
/**
 * Theme Info Page
 *
 * @package Ecommerce Gift Cart
 */

namespace Ecommerce_Gift_Cart;

use const DAY_IN_SECONDS;

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

new Ecommerce_Gift_Cart_Theme_Notice();

class Ecommerce_Gift_Cart_Theme_Notice {

	/** @var \WP_Theme */
	private $ecommerce_gift_cart_theme;

	private $ecommerce_gift_cart_url = 'https://www.themescarts.com/';

	/**
	 * Class construct.
	 */
	public function __construct() {
		$this->ecommerce_gift_cart_theme = wp_get_theme();

		add_action( 'init', array( $this, 'handle_dismiss_notice' ) );

		if ( ! \get_transient( 'ecommerce_gift_cart_notice_dismissed' ) ) {
			add_action( 'admin_notices', array( $this, 'ecommerce_gift_cart_render_notice' ) );
		}

		add_action( 'switch_theme', array( $this, 'show_notice' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'ecommerce_gift_cart_enqueue_notice_assets' ) );
	}

	/**
	 * Delete notice on theme switch.
	 *
	 * @return void
	 */
	public function show_notice() {
		\delete_transient( 'ecommerce_gift_cart_notice_dismissed' );
	}

	/**
	 * Enqueue admin styles and scripts.
	 */
	public function ecommerce_gift_cart_enqueue_notice_assets() {
		wp_enqueue_style(
			'ecommerce-gift-cart-theme-notice-css',
			get_template_directory_uri() . '/inc/ecommerce-gift-cart-theme-info-page/css/theme-details.css',
			array(),
			'1.0.0'
		);

		wp_enqueue_script(
			'ecommerce-gift-cart-theme-notice-js',
			get_template_directory_uri() . '/inc/ecommerce-gift-cart-theme-info-page/js/theme-details.js',
			array( 'jquery' ),
			'1.0.0',
			true
		);

		// Pass dynamic URL to JS
		wp_localize_script( 'ecommerce-gift-cart-theme-notice-js', 'EcommerceGiftCartTheme', array(
			'admin_url' => esc_url( admin_url( 'admin.php?page=themescarts' ) ),
		));
	}

	/**
	 * Render the admin notice.
	 */
	public function ecommerce_gift_cart_render_notice() {
		?>
		<div id="ecommerce-gift-cart-theme-notice" class="notice notice-info is-dismissible">
			<div class="ecommerce-gift-cart-content-wrap">
				<div class="ecommerce-gift-cart-notice-left">
					<?php
					$this->ecommerce_gift_cart_render_title();
					$this->ecommerce_gift_cart_render_content();
					$this->ecommerce_gift_cart_render_actions();
					?>
				</div>
				<div class="ecommerce-gift-cart-notice-right">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Theme Notice Image', 'ecommerce-gift-cart' ); ?>">
				</div>
			</div>
		</div>
		<?php
	}

	/**
	 * Render title.
	 */
	protected function ecommerce_gift_cart_render_title() {
		?>
		<h2>
			<?php
			printf(
				// translators: %s is the theme name
				esc_html__( 'Thank you for installing %s!', 'ecommerce-gift-cart' ),
				'<span>' . esc_html( $this->ecommerce_gift_cart_theme->get( 'Name' ) ) . '</span>'
			);
			?>
		</h2>
		<?php
	}

	/**
	 * Render content.
	 */
	protected function ecommerce_gift_cart_render_content() {
		$ecommerce_gift_cart_link = '<a href="' . esc_url( $this->ecommerce_gift_cart_url ) . '" target="_blank">' . esc_html__( 'ThemesCarts', 'ecommerce-gift-cart' ) . '</a>';

		$ecommerce_gift_cart_text = sprintf(
			/* translators: %1$s: Author Name, %2$s: Link */
			esc_html__( 'Unlock the full potential of your new store with %1$s! Get started today by visiting %2$s to explore a wide range of ready-to-use patterns and demo templates, designed to enhance your online shopping experience.', 'ecommerce-gift-cart' ),
			esc_html__( 'ThemesCarts', 'ecommerce-gift-cart' ),
			$ecommerce_gift_cart_link
		);

		echo wp_kses_post( wpautop( $ecommerce_gift_cart_text ) );
	}

	/**
	 * Render action buttons.
	 */
	protected function ecommerce_gift_cart_render_actions() {
		$ecommerce_gift_cart_more_info_url = admin_url( 'themes.php?page=ecommerce-gift-cart-theme-info-page' );
		?>
		<div class="notice-actions">
			<a href="<?php echo esc_url( $ecommerce_gift_cart_more_info_url ); ?>" id="btn-install-activate">
				<?php esc_html_e( 'Click Here For Theme Info', 'ecommerce-gift-cart' ); ?>
			</a>
			<form class="ecommerce-gift-cart-notice-dismiss-form" method="post">
				<button type="submit" name="notice-dismiss" value="true" id="btn-dismiss">
					<?php esc_html_e( 'Dismiss', 'ecommerce-gift-cart' ); ?>
				</button>
			</form>
		</div>
		<?php
	}

	/**
	 * Handle dismiss action.
	 */
	public function handle_dismiss_notice() {
		if ( isset( $_POST['notice-dismiss'] ) ) {
			set_transient( 'ecommerce_gift_cart_notice_dismissed', true, DAY_IN_SECONDS * 3 );
			wp_safe_redirect( esc_url_raw( $_SERVER['REQUEST_URI'] ) );
			exit;
		}
	}
}
?>
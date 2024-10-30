<?php

class MWAFE_ADDONS extends \Elementor\Settings {

	public function __construct() {
		add_action( 'admin_menu', [ $this, 'add_admin_menu' ], 502 );
		add_action( 'admin_init', [ $this, 'settings_init' ] );
	}

	function add_admin_menu() {

		add_submenu_page( \Elementor\Settings::PAGE_ID, 'MWAE Elementor', __( 'WooCommerce Addons for Elementor', 'woocommerce-addons-elementor' ), 'manage_options', 'woocommerce-addons-elementor', [ $this, 'options_page' ] );
	}

	function settings_init() {

		$args = array(
				'sanitize_callback' => 'mwafe_addon_sanitize_settings',
		);

		register_setting( 'MWAE Elementor', 'wae_elementor_settings', $args );
	}

	function options_page() {

		?>
		<div class="wrap getting-started">
		<div class="container">

			<div class="intro">
				<h2 class="theme-names">
					<?php esc_html_e( 'You just gained a super', 'woocommerce-addons-elementor' ); ?>
					<span class="name-bold"><?php esc_html_e( ' Power', 'woocommerce-addons-elementor' ); ?></span>
				</h2>
				<p class="mwae-sub-msg">
					<?php esc_html_e( 'You can display WooCommerce products & categories anywhere you want.', 'woocommerce-addons-elementor' ); ?>
				</p>


				<a href="https://atlantisthemes.com/elementor-addons-woocommerce/" target="_blank">
				    <img class="mwae-admin-image" src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/mega-woo-lite.jpg'; ?>">
				</a>

				<p class="mwae-lite-widget-count">
					<?php esc_html_e( '4 unique Elementor Woocommerce addons.', 'woocommerce-addons-elementor' ); ?>
				</p>

			</div>

			<div class="cards">
				<h2 class="theme-names text-center">
					<?php esc_html_e( 'Upgrade to', 'woocommerce-addons-elementor' ); ?>
					<span class="name-bold"><?php esc_html_e( ' Premium', 'woocommerce-addons-elementor' ); ?></span>
				</h2>
				<p class="mwae-pro-widget-count">
					<span class="pro-widget-count"><?php esc_html_e( '17+', 'woocommerce-addons-elementor' ); ?></span>
					<?php esc_html_e( 'Elementor Addons for WooCommerce', 'woocommerce-addons-elementor' ); ?>
				</p>

					<a href="https://atlantisthemes.com/elementor-addons-woocommerce/" target="_blank" class="mwae-upgrade">
						Upgrade To Pro
					</a>



<div class="feature-demo--container text-center">
	<div class="row">
		<h3 class="col-md-12 elementor-core-f-three">WooCommerce Products</h3>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box">
				<a href="https://merchant-storefront.atlantisthemes.com/vertical-products/" target="_blank">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Vertical</h4>
				</a>
			</div>
		</div>


		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box">
				<a href="http://merchant-storefront.atlantisthemes.com/horizontal-products/">
				<img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Horizontal</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/detailed-info-products/">
				<img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Detailed</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/product-flip-card/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Flipper</h4>
				</a>
			</div>
		</div>


		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/zig-zag-woocommerce-products/">
				<img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Zig Zag</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/product-slider/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Slider</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/woocommerce-product-table-list/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Product Table List</h4>
				</a>
			</div>
		</div>

		<h3 class="col-md-12 elementor-core-f-three">WooCommerce Categories</h3>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box">
				<a href="http://merchant-storefront.atlantisthemes.com/woocommerce-category-vertical/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Category Vertical</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box">
					<a href="http://merchant-storefront.atlantisthemes.com/product-category-horizontal/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Category Horizontal</h4>
					</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/product-category-horizontal/">
					<img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Category Circular</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
					<a href="http://merchant-storefront.atlantisthemes.com/woocommerce-category-overlay/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Category Overlay</h4>
					</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
					<a href="http://merchant-storefront.atlantisthemes.com/woocommerce-category-zigzag/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Category Zig Zag</h4>
					</a>
			</div>
		</div>


		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
				<a href="http://merchant-storefront.atlantisthemes.com/woocommerce-category-sub-categories/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
					<h4>Category Sub Categories</h4>
				</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
					<a href="http://merchant-storefront.atlantisthemes.com/woocommerce-category-modern/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Category Modern</h4>
					</a>
			</div>
		</div>

		<h3 class="col-md-12 elementor-core-f-three">WooCommerce Products by Category</h3>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
					<a href="http://merchant-storefront.atlantisthemes.com/products-by-category/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Product by Categories</h4>
					</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
					<a href="http://merchant-storefront.atlantisthemes.com/products-by-category-cover/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Product by Categories – Cover</h4>
					</a>
			</div>
		</div>

		<div class="col-md-3 col-xs-6">
			<div class="elementor-demo-box elementor-demo-box-pro">
					<a href="http://merchant-storefront.atlantisthemes.com/products-by-category-marketplace/">
					 <img src="<?php echo plugins_url( '../', __FILE__ ).'assets/images/woo-ele-icon.png'; ?>">
						<h4>Product by Categories – Marketplace</h4>
					</a>
			</div>
		</div>
	</div>
	</div>

			</div>
		</div>

		</div>
		<?php

	}

}

new MWAFE_ADDONS();

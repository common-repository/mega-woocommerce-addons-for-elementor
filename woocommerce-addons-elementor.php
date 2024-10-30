<?php
/**
 * Plugin Name: Mega WooCommerce Addons for Elementor
 * Description: Mega WooCommerce Addons for Elementor provides awesome custom WooCommerce widgets for the Elementor page builder.
 * Plugin URI: https://atlantisthemes.com/woocommerce-elementor/
 * Author: Atlantis Themes
 * Version: 1.0.3
 * Author URI: https://atlantisthemes.com
 * Text Domain: woocommerce-addons-elementor
 * Domain Path: /languages
 *
 * WooCommerce Addons for Elementor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WooCommerce Addons for Elementor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WooCommerce Addons for Elementor. If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly.

if ( ! function_exists( 'mwafe_addon_dependency' ) ) {
	function mwafe_addon_dependency() {
		$message      = esc_html__( 'WooCommerce Addons for Elementor requires the Elementor page builder to be active. Please activate Elementor to continue.', 'woocommerce-addons-elementor' );
		$html_message = sprintf( '<div class="error">%s</div>', wpautop( $message ) );
		echo wp_kses_post( $html_message );
	}
}

if ( ! function_exists( 'mwafe_addon_fail_php_version' ) ) {
	function mwafe_addon_fail_php_version() {
		$message      = esc_html__( 'WooCommerce Addons for Elementor requires PHP version 5.4+, the plugin is currently NOT ACTIVE.', 'woocommerce-addons-elementor' );
		$html_message = sprintf( '<div class="error">%s</div>', wpautop( $message ) );
		echo wp_kses_post( $html_message );
	}
}

if ( ! function_exists( 'mwafe_addon_load_plugin_textdomain' ) ) {
	function mwafe_addon_load_plugin_textdomain() {
		load_plugin_textdomain( 'woocommerce-addons-elementor', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
}

if ( ! function_exists( 'mwafe_addon_category' ) ) {
	function mwafe_addon_category() {
		\Elementor\Plugin::instance()->elements_manager->add_category( 'woocommerce-addons-elementor', [
			'title' => __( 'WooCommerce Addons Elementor', 'woocommerce-addons-elementor' ),
			'icon'  => 'font',
		], 1 );
	}
}

if ( ! function_exists( 'mwafe_addon_sanitize_settings' ) ) {
	function mwafe_addon_sanitize_settings( $options ) {
		$defaults = array(
			'checkbox_cta'          => '',

		);

		$options = wp_parse_args( $options, $defaults );

		foreach ( $options as $option => $value ) {
				$options[ $option ] = intval( $value );
		}

		return $options;
	}
}

if ( ! function_exists( 'mwafe_addon_add_elements' ) ) {
	function mwafe_addon_add_elements() {
		if ( class_exists( 'WooCommerce' )){
			require_once MWAFE_ADDON_PATH . 'elements/wafe-product.php';
			require_once MWAFE_ADDON_PATH . 'elements/wafe-product-horizontal.php';
			require_once MWAFE_ADDON_PATH . 'elements/wafe-product-zigzag.php';
			require_once MWAFE_ADDON_PATH . 'elements/wafe-product-category.php';
		}
	}
}

if ( ! function_exists( 'mwafe_addon_scripts' ) ) {
	function mwafe_addon_scripts() {
		wp_enqueue_style( 'ep-elements', MWAFE_ADDON_URL . 'assets/css/ep-elements.css' );
	}
}

if ( ! function_exists( 'mwafe_addon_admin_styles' ) ) {
	function mwafe_addon_admin_styles( $hook ) {
		wp_enqueue_style( 'custom_wp_admin_css', MWAFE_ADDON_URL . 'assets/css/admin-styles.css' );
	}
}

add_action( 'plugins_loaded', 'mwafe_addon_init' );

if ( ! function_exists( 'mwafe_addon_init' ) ) {
	function mwafe_addon_init() {
		define( 'MWAFE_ADDON_URL', plugins_url( '/', __FILE__ ) );
		define( 'MWAFE_ADDON_PATH', plugin_dir_path( __FILE__ ) );
		require_once MWAFE_ADDON_PATH . 'inc/elements-plus-options.php';

		if ( ! defined( 'ELEMENTOR_VERSION' ) ) {
			add_action( 'admin_notices', 'mwafe_addon_dependency' );
			return;
		}

		if ( ! version_compare( PHP_VERSION, '5.4', '>=' ) ) {
			add_action( 'admin_notices', 'mwafe_addon_fail_php_version' );
			return;
		}

		add_action( 'init', 'mwafe_addon_load_plugin_textdomain' );
		add_action( 'elementor/init', 'mwafe_addon_category' );
		add_action( 'elementor/init', 'mwafe_addon_add_elements' );
		add_action( 'wp_enqueue_scripts', 'mwafe_addon_scripts' );
		add_action( 'admin_enqueue_scripts', 'mwafe_addon_admin_styles' );
	}
}

/**
 * Activation redirects
 *
 * @since v1.0.0
 */
if ( ! function_exists( 'mwafe_activate' ) ) {
	function mwafe_activate() {
	    add_option( 'mwafe_do_activation_redirect', true );
	}
}

register_activation_hook(__FILE__, 'mwafe_activate');

/**
 * Redirect to options page
 *
 * @since v1.0.0
 */
if ( ! function_exists( 'mwafe_redirect' ) ) {
	function mwafe_redirect() {
	    if (get_option('mwafe_do_activation_redirect', false)) {
	        delete_option('mwafe_do_activation_redirect');
	        if(!isset($_GET['activate-multi']))
	        {
	            wp_redirect("admin.php?page=woocommerce-addons-elementor");
	        }
	    }
	}
}
add_action('admin_init', 'mwafe_redirect');
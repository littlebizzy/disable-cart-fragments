<?php
/*
Plugin Name: Disable Cart Fragments
Plugin URI: https://www.littlebizzy.com/plugins/disable-cart-fragments
Description: Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).
Version: 1.0.7
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSCFRG
*/

// Admin Notices module
require_once dirname(__FILE__).'/admin-notices.php';
DSCFRG_Admin_Notices::instance(__FILE__);


/* Initialization */

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
define('DSCFRG_FILE', __FILE__);
define('DSCFRG_PATH', dirname(DSCFRG_FILE));
define('DSCFRG_VERSION', '1.0.7');


/* Disable Cart Fragments */

// Handle WP hook
add_action('wp_enqueue_scripts', 'sdcfrg_dequeue_wc_fragments', 11);

/**
 * Hook the wp_enqueue_scripts action
 */
function sdcfrg_dequeue_wc_fragments() {

	// Check wp-config constant for exceptions
	if (defined('DISABLE_CART_FRAGMENTS') && is_page()) {
		$ids = array_map('intval', explode(',', DISABLE_CART_FRAGMENTS));
		if (in_array((int) get_the_ID(), $ids))
			return;
	}

	// Dequeue script
	wp_dequeue_script('wc-cart-fragments');
}

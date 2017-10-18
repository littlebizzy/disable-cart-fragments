<?php
/*
Plugin Name: Disable Cart Fragments
Plugin URI: https://www.littlebizzy.com/plugins/disable-cart-fragments
Description: Completely disables the AJAX 'cart fragments' feature in WooCommerce for a huge boost in loading speed ('redirect to cart page' is recommended).
Version: 1.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

Copyright 2017 by LittleBizzy

*/


/* Initialization */

// Avoid script calls via plugin URL
if (!function_exists('add_action'))
	die;

// This plugin constants
define('DSCFRG_FILE', __FILE__);
define('DSCFRG_PATH', dirname(DSCFRG_FILE));
define('DSCFRG_VERSION', '1.0.0');

// Quick context check
if (is_admin())
	return;


/* Disable WC Cart Fragments script */

// Hadnle WP hook
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

<?php
/*
Plugin Name: Disable Cart Fragments
Plugin URI: https://www.littlebizzy.com/plugins/disable-cart-fragments
Description: Disables AJAX fragments in Woo
Version: 1.4.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
GitHub Plugin URI: littlebizzy/disable-cart-fragments
Primary Branch: master
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// disable wordpress.org updates for this plugin
add_filter( 'gu_override_dot_org', function( $overrides ) {
	$overrides[] = 'disable-cart-fragments/disable-cart-fragments.php';
	return $overrides;
}, 999 );

// disable woocommerce cart fragments
add_action( 'wp_enqueue_scripts', function() {
	if ( class_exists( 'WooCommerce' ) ) {
		// dequeue cart fragment scripts
		wp_dequeue_script( 'wc-cart-fragments' );
	}
}, 11 );

// Ref: ChatGPT
// Ref: https://jeffmatson.net/stopping-cart-fragments-from-updating-in-woocommerce/
// Ref: https://github.com/woocommerce/woocommerce/issues/9365
// Ref: https://github.com/woocommerce/woocommerce/issues/7777

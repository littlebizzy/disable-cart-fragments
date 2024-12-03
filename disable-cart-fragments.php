<?php
/*
Plugin Name: Disable Cart Fragments
Plugin URI: https://www.littlebizzy.com/plugins/disable-cart-fragments
Description: Disables AJAX fragments in Woo
Version: 2.0.0
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

// disable woocommerce cart fragments and conditionally re-enable using a cookie check
add_action( 'wp_enqueue_scripts', function() {
    if ( class_exists( 'WooCommerce' ) ) {
        global $wp_scripts;

        $handle = 'wc-cart-fragments';
        if ( isset( $wp_scripts->registered[ $handle ] ) && $wp_scripts->registered[ $handle ] ) {
            $load_cart_fragments_path = $wp_scripts->registered[ $handle ]->src;

            // nullify the script source to prevent automatic loading
            $wp_scripts->registered[ $handle ]->src = null;

            // inject lightweight inline script to conditionally load cart fragments
            wp_add_inline_script(
                'jquery',
                '
                if ( document.cookie.indexOf("woocommerce_cart_hash") !== -1 ) {
                    var script = document.createElement("script");
                    script.src = "' . esc_url( $load_cart_fragments_path ) . '";
                    script.async = true;
                    document.head.appendChild(script);
                }
                '
            );
        }
    }
}, 999 );

// Ref: ChatGPT
// Ref: https://wordpress.org/plugins/disable-cart-fragments/
// Ref: https://jeffmatson.net/stopping-cart-fragments-from-updating-in-woocommerce/
// Ref: https://github.com/woocommerce/woocommerce/issues/9365
// Ref: https://github.com/woocommerce/woocommerce/issues/7777

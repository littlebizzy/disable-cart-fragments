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

// disable woocommerce cart fragments and re-enable dynamically using cookie checks and add-to-cart listeners
add_action( 'wp_enqueue_scripts', function() {
    if ( class_exists( 'WooCommerce' ) ) {
        global $wp_scripts;

        $handle = 'wc-cart-fragments';
        if ( isset( $wp_scripts->registered[ $handle ] ) && $wp_scripts->registered[ $handle ] ) {
            $load_cart_fragments_path = $wp_scripts->registered[ $handle ]->src;

            // nullify the script source to prevent automatic loading
            $wp_scripts->registered[ $handle ]->src = null;

            // inject lightweight inline script for both cookie check and event listener
            wp_add_inline_script(
                'jquery',
                '
                function loadCartFragments() {
                    if ( document.cookie.indexOf("woocommerce_cart_hash") !== -1 ) {
                        if ( ! document.getElementById("wc-cart-fragments-script") ) {
                            var script = document.createElement("script");
                            script.id = "wc-cart-fragments-script";
                            script.src = "' . esc_url( $load_cart_fragments_path ) . '";
                            script.async = true;
                            document.head.appendChild(script);
                        }
                    }
                }

                // check on page load
                loadCartFragments();

                // add event listener for "Add to Cart" button clicks
                document.addEventListener("click", function(event) {
                    if ( event.target && event.target.closest(".add_to_cart_button") ) {
                        loadCartFragments();
                    }
                });
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

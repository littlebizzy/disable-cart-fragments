=== Disable Cart Fragments ===
Contributors: littlebizzy
Tags: disable, cart, fragments, ajax, woocommerce, shopping, loading, speed, slow, fix
Requires at least: 4.4
Tested up to: 4.8
Stable tag: 1.0.3
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).

== Description ==

**Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).**

Disable Cart Fragments is a simple plugin that disables the AJAX 'cart fragments' feature in WooCommerce. That feature automatically updates the cart total in your shopping cart without having to refresh the page. The problem with this is that is severely slows down many WooCommerce websites especially on shared hosting servers. Plus, the feature isn't even used in many cases. We recommend that if you install this plugin, you either disable it selectively on certain pages (see the Installation tab) or if installing as one-click then make sure you enable 'redirect to cart page' option in WooCommerce settings so that when a customer adds a product to their Cart, it redirects to the Cart page automatically so as to not confuse them about what happened to their chosen product.

This plugin removes e.g.

    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/about?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='//example.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>

You can selectively disable using a defined constant on certain pages only (see Installation page).

__Compatibility:__

* __OS:__ Linux
* __SERVER:__ Apache, Nginx
* __PHP:__ 5.5+
* __DATABASE:__ MySQL

__Plugin Features:__

* __SETTINGS:__ None
* __MUST-USE:__ Supported
* __MULTI-SITE:__ Support unknown
* __TRANSIENTS:__ None
* __WP_OPTIONS:__ None
* __DATABASE USAGE:___ None
* __LOCALIZATION:__ Planned
* __UNINSTALL:__ Removes plugin files only (no stored data exists)

__Future plugin goals:__

* Localization (translation support)
* Code maintenance/improvements

__Code inspired by:__

* [GitHub #9365](https://github.com/woocommerce/woocommerce/issues/9365)
* [GitHub #7777](https://github.com/woocommerce/woocommerce/issues/7777)
* [Jeff Matson](https://jeffmatson.net/stopping-cart-fragments-from-updating-in-woocommerce/)

For initial release we've implemented via dequeue rather than print scripts, will review based on feedback.

NOTE: We released this plugin in response to our managed hosting clients asking for better access to their server environment, and our primary goal will likely remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you consider all of the above mentioned goals before leaving reviews of this plugin, thanks!


== Installation ==

1. Upload the plugin files to `/wp-content/plugins/404-to-homepage-littlebizzy`
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Test the plugin is working by refreshing pages and checking source code
4. To disable on certain pages only using their page ID, put below in your `wp-config` file:

    `define( 'DISABLE_CART_FRAGMENTS', '123,456,789' );`

== Frequently Asked Questions ==

= Does this plugin disable my WooCommerce shopping cart? =

Nope, it only disables AJAX features of add-to-cart. Refreshing the page will still show cart totals.

= Are there other recommendations to keep in mind? =

Yes, you should enable `redirect to cart page` in WooCommerce settings to ensure customers aren't confused. This will make sure that after adding an item to their Cart, they are automatically redirected to the Cart page each time.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.


== Changelog ==

= 1.0.3 =
* tested with WordPress 4.8

= 1.0.2 =
* updated plugin meta

= 1.0.1 =
* updated plugin meta

= 1.0 =
* initial release
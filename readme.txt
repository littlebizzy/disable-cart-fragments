=== Disable Cart Fragments ===

Contributors: littlebizzy
Tags: disable, cart, fragments, remove, woocommerce, checkout, ajax, javascript
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Stable tag: 1.0.6
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).

== Description ==

Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).

Disable Cart Fragments is a simple plugin that disables the AJAX 'cart fragments' feature in WooCommerce. That feature automatically updates the cart total in your shopping cart without having to refresh the page. The problem with this is that is severely slows down many WooCommerce websites especially on shared hosting servers. Plus, the feature isn't even used in many cases. We recommend that if you install this plugin, you either disable it selectively on certain pages (see the Installation tab) or if installing as one-click then make sure you enable 'redirect to cart page' option in WooCommerce settings so that when a customer adds a product to their Cart, it redirects to the Cart page automatically so as to not confuse them about what happened to their chosen product.

This plugin removes e.g.

    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/about?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='//example.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>

You can selectively disable using a defined constant:

    define('DISABLE_CART_FRAGMENTS', '123,456,789');

For initial release we've implemented via dequeue rather than print scripts, will review based on feedback.

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0+ and MySQL 5.7+ to achieve best performance. All of our plugins are meant for single site WordPress installs only; for performance and security reasons, we highly recommend against using WordPress Multi-Site for the vast majority of projects.

#### Plugin Features ####

* Settings Page: No
* Upgrade Available: No
* Includes Media: No
* Includes CSS: No
* Database Storage: No
  * Transients: No
  * Options: No
* Must-Use Support: Yes
* Multi-site Support: No
* Uninstalls Data: N/A

#### Code Inspiration ####

This plugin was partially inspired either in "code or concept" by the open-source software and discussions mentioned below:

* [GitHub #9365](https://github.com/woocommerce/woocommerce/issues/9365)
* [GitHub #7777](https://github.com/woocommerce/woocommerce/issues/7777)
* [Jeff Matson](https://jeffmatson.net/stopping-cart-fragments-from-updating-in-woocommerce/)

#### Recommended Plugins ####

We invite you to check out a few other related free plugins that our team has also produced that you may find especially useful:

* [Disable WooCommerce Status](https://wordpress.org/plugins/disable-wc-status-littlebizzy/)
* [Disable WooCommerce Styles](https://wordpress.org/plugins/disable-wc-styles-littlebizzy/)
* [Remove Query Strings](https://wordpress.org/plugins/remove-query-strings-littlebizzy/)

#### Special Thanks ####

We thank the following groups for their generous contributions to the WordPress community which have particularly benefited us in developing our own free plugins and paid services:

* [Automattic](https://automattic.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server environment, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you consider the above mentioned goals before leaving reviews of this plugin, thanks!

== Installation ==

1. Upload the plugin files to `/wp-content/plugins/disable-cart-fragments-littlebizzy`
2. Activate the plugin via WP Admin > Plugins
3. Test the plugin by refreshing pages and checking source code
4. To disable cart fragments on specific posts/pages (using their ID), refer to below defined constant:

    define('DISABLE_CART_FRAGMENTS', '123,456,789');
	
== Frequently Asked Questions ==

= Does this plugin disable my WooCommerce shopping cart? =

Nope, it only disables AJAX features of add-to-cart. Refreshing the page will still show cart totals.

= Are there other recommendations to keep in mind? =

Yes, you should enable `redirect to cart page` in WooCommerce settings to ensure customers aren't confused. This will make sure that after adding an item to their Cart, they are automatically redirected to the Cart page each time. You should also disable `AJAX add to cart on archives page` because this plugin disables that AJAX site-wide by default.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.0.6 =
* minor code tweaks
* updated recommended plugins

= 1.0.5 =
* updated recommended plugins

= 1.0.4 =
* recommended plugins

= 1.0.3 =
* tested with WordPress 4.8

= 1.0.2 =
* updated plugin meta

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
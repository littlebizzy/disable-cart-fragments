=== Disable Cart Fragments ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: disable, remove, cart, fragments, ajax
Requires at least: 4.4
Tested up to: 4.9
WC requires at least: 3.3
WC tested up to: 3.5
Requires PHP: 7.2
Multisite support: No
Stable tag: 1.2.1
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSCFRG

Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).

== Description ==

Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/disable-cart-fragments-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/disable-cart-fragments)
* [Plugin GitHub](https://github.com/littlebizzy/disable-cart-fragments)
* [SlickStack](https://slickstack.io)

#### The Long Version ####

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

#### Defined Constants ####

    `define('DISABLE_NAG_NOTICES', true);`
    `define('DISABLE_CART_FRAGMENTS', '123,456,789');`

#### Plugin Features ####

* Parent Plugin: [**Speed Demon**](https://www.littlebizzy.com/plugins/speed-demon)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (Images, Icons, Etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Inspiration ####

* [Jeff Matson](https://jeffmatson.net/stopping-cart-fragments-from-updating-in-woocommerce/)
* [GitHub #9365](https://github.com/woocommerce/woocommerce/issues/9365)
* [GitHub #7777](https://github.com/woocommerce/woocommerce/issues/7777)

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Luke Cavanagh](https://github.com/lukecav), [Mike Jolley](https://mikejolley.com), [Pau Iglesias](https://pauiglesias.com), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep the above-mentioned goals in mind... thanks!

== Installation ==

1. Upload to `/wp-content/plugins/disable-cart-fragments-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test the plugin by refreshing pages and checking source code after clearing caches
4. To disable cart fragments on specific posts/pages (using their ID), refer to below defined constant:

    define('DISABLE_CART_FRAGMENTS', '123,456,789');
	
== Frequently Asked Questions ==

= Does this plugin disable my WooCommerce shopping cart? =

Nope, it only disables AJAX features of add-to-cart. Refreshing the page will still show cart totals in worst case scenarios, but in most scenarios the add-to-cart functions are not apparently changed.

= Are there other recommendations to keep in mind? =

Yes, you should enable `redirect to cart page` in WooCommerce settings to ensure customers aren't confused. This will make sure that after adding an item to their Cart, they are automatically redirected to the Cart page each time. You should also disable `AJAX add to cart on archives page` because this plugin disables that AJAX site-wide by default.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.2.1 =
* fixed WC support header in plugin root file

= 1.2.0 =
* tested with WC 3.5

= 1.1.3 =
* updated plugin meta

= 1.1.2 =
* added WC support headers (meta) to plugin root file

= 1.1.1 =
* added WC support headers (meta) to readme

= 1.1.0 =
* tested with WC 3.4
* tested with PHP 7.1
* tested with PHP 7.2
* tested with alleged conflicting plugins e.g. *WooCommerce Cart*, *WooCommerce Better Usability*, etc (no issues found)
* uses PHP namespaces
* object-oriented codebase
* optimized plugin code

= 1.0.9 =
* added warning for Multisite installations
* updated recommended plugins

= 1.0.8 =
* tested with WP 4.9
* support for `DISABLE_NAG_NOTICES`

= 1.0.7 =
* optimized plugin code
* added rating request notice
* updated recommended plugins

= 1.0.6 =
* optimized plugin code
* updated recommended plugins

= 1.0.5 =
* updated recommended plugins

= 1.0.4 =
* added recommended plugins notice

= 1.0.3 =
* tested with WP 4.8

= 1.0.2 =
* updated plugin meta

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
* tested with PHP 7.0

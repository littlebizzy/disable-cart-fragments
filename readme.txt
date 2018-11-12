=== Disable Cart Fragments ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: disable, remove, cart, fragments, ajax
Requires at least: 4.4
Tested up to: 5.0
WC requires at least: 3.3
WC tested up to: 3.5
Requires PHP: 7.2
Multisite support: No
Stable tag: 1.3.0
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

#### Current Features ####

Disable Cart Fragments is a simple plugin that disables the AJAX 'cart fragments' feature in WooCommerce. That feature automatically updates the cart total in your shopping cart without having to refresh the page. The problem with this is that is severely slows down many WooCommerce websites especially on shared hosting servers. Plus, the feature isn't even used in many cases. We recommend that if you install this plugin, you either disable it selectively on certain pages (see the Installation tab) or if installing as one-click then make sure you enable 'redirect to cart page' option in WooCommerce settings so that when a customer adds a product to their Cart, it redirects to the Cart page automatically so as to not confuse them about what happened to their chosen product.

* [Jeff Matson](https://jeffmatson.net/stopping-cart-fragments-from-updating-in-woocommerce/)
* [GitHub #9365](https://github.com/woocommerce/woocommerce/issues/9365)
* [GitHub #7777](https://github.com/woocommerce/woocommerce/issues/7777)

This plugin removes e.g.

    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/about?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
    /* ]]> */
    </script>
    <script type='text/javascript' src='//example.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>

You can selectively disable using a defined constant (below)

For initial release we've implemented via dequeue rather than print scripts, will review based on feedback.

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);
    
    /* Disable Cart Fragments Functions */
    define('DISABLE_CART_FRAGMENTS', 'allpages');

#### Plugin Features ####

* Prefix: DSCFRG
* Parent Plugin: [**Speed Demon**](https://wordpress.org/plugins/speed-demon-littlebizzy/)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
  * Creates New WP Cron Jobs: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Luke Cavanagh](https://github.com/lukecav), [Mike Jolley](https://mikejolley.com), [Pau Iglesias](https://pauiglesias.com), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

#### Our Philosophy ####

> "Decisions, not options." -- WordPress.org

> "Everything should be made as simple as possible, but not simpler." -- Albert Einstein, et al

> "Write programs that do one thing and do it well... write programs to work together." -- Doug McIlroy

> "The innovation that this industry talks about so much is bullshit. Anybody can innovate... 99% of it is 'Get the work done.' The real work is in the details." -- Linus Torvalds

#### Search Keywords ####

cart, cart ajax, cart fragments, disable cart ajax, disable cart fragments, slow woocommerce, speed up woocommerce, woocommerce loading speed, woocommerce performance, woocommerce speed

== Installation ==

1. Upload to `/wp-content/plugins/disable-cart-fragments-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test the plugin is working:

After plugin activation, purge all caches. Then, check your source code to verify cart fragment scripting no longer appears.

4. To disable cart fragments on specific posts/pages (using their ID), refer to below defined constant:

    define('DISABLE_CART_FRAGMENTS', '1,2,3,4,5,6,7,8,9');
	
== Frequently Asked Questions ==

= Does this plugin disable my WooCommerce shopping cart? =

Nope, it only disables AJAX features of add-to-cart. Refreshing the page will still show cart totals in worst case scenarios, but in most scenarios the add-to-cart functions are not apparently changed.

= Are there other recommendations to keep in mind? =

Yes, you should enable `redirect to cart page` in WooCommerce settings to ensure customers aren't confused. This will make sure that after adding an item to their Cart, they are automatically redirected to the Cart page each time. You should also disable `AJAX add to cart on archives page` because this plugin disables that AJAX site-wide by default.

= How can I change this plugin's settings? =

This plugin does not have a settings page and is designed for speed and simplicity.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, join our free Facebook group.

== Changelog ==

= 1.3.0 =
* tested with WP 5.0
* updated plugin meta

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
* tested with PHP 7.0
* tested with PHP 7.1
* tested with PHP 7.2
* tested with alleged conflicting plugins e.g. *WooCommerce (Side) Cart*, *WooCommerce Better Usability*, etc (no issues found)
* plugin re-written using PHP namespaces
* plugin uses object-oriented codebase
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

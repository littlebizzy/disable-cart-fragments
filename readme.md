# Disable Cart Fragments

Disables AJAX fragments in Woo

## Changelog

### 2.0.0
- code entirely refactored to WordPress standards
- removed support for per-page application (via defined constant)
- inspired by Optimocha's approach, cart fragments are now conditionally injected when `woocommerce_cart_hash` cookie detected or add-to-cart button is clicked (event listener)
- unlike Optimocha's plugin, ours does not re-check for the cookie every X seconds (use poorly coded plugins/themes that modify add-to-cart at your own risk, we don't want to add more overhead/fallback for now)
- supports PHP 7.0 to PHP 8.3
- supports Multisite

### 1.3.0
- tested with WP 5.0
- updated plugin meta

### 1.2.1
- fixed WC support header in plugin root file

### 1.2.0
- tested with WC 3.5

### 1.1.3
- updated plugin meta

### 1.1.2
- added WC support headers (meta) to plugin root file

### 1.1.1
- added WC support headers (meta) to readme

### 1.1.0
- tested with WC 3.4
- tested with PHP 7.0
- tested with PHP 7.1
- tested with PHP 7.2
- tested with alleged conflicting plugins e.g. *WooCommerce (Side) Cart*, *WooCommerce Better Usability*, etc (no issues found)
- plugin re-written using PHP namespaces
- plugin uses object-oriented codebase
- optimized plugin code

### 1.0.9
- added warning for Multisite installations
- updated recommended plugins

### 1.0.8
- tested with WP 4.9
- support for `DISABLE_NAG_NOTICES`

### 1.0.7
- optimized plugin code
- added rating request notice
- updated recommended plugins

### 1.0.6
- optimized plugin code
- updated recommended plugins

### 1.0.5
- updated recommended plugins

### 1.0.4
- added recommended plugins notice

### 1.0.3
- tested with WP 4.8

### 1.0.2
- updated plugin meta

### 1.0.1
- updated plugin meta

### 1.0.0
- initial release

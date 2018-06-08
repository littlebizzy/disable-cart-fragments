<?php
/*
Plugin Name: Disable Cart Fragments
Plugin URI: https://www.littlebizzy.com/plugins/disable-cart-fragments
Description: Completely disables the AJAX cart fragments feature in WooCommerce for a huge boost in loading speed (redirect to cart page highly recommended).
Version: 1.1.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSCFRG
*/

// Plugin namespace
namespace LittleBizzy\DisableCartFragments;

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dscfrg';
const VERSION = '1.1.0';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Admin Notices
Admin_Notices::instance(__FILE__);

/**
 * Admin Notices Multisite check
 * Uncomment "return" to disable this plugin on Multisite installs
 */
if (false !== Admin_Notices_MS::instance(__FILE__)) { /* return; */ }

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');
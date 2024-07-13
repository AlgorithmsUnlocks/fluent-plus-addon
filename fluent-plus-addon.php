<?php
/*
 * Plugin Name:         Fluent+ Addon
 * Plugin URI:          https://wordpress.org/plugins/algo-site-loaders
 * Description:         Fluent+ addon is a essentials plugins to manage the Fluent Plugins at all.
 * Version:             0.0.1
 * Requires at least:   5.5
 * Requires PHP:        7.4
 * Contributor:         algorithmsunlocks
 * Author:              Ruman Ahmed
 * Author URI:          https://algounlocks.com
 * License:             GPL v2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:         fluent-plus-addon
 * Domain Path:         /languages
 */

if (!defined('ABSPATH')) exit();

// Fluent Plus Addon - Base URL
define('FLUENT_PLUS_ADDON', plugin_dir_url(__FILE__));


// Fluent Plus Addon - Including Menu Style Scripts
include(plugin_dir_path(__FILE__) . 'includes/fluent-plus-addon-menus.php');
include(plugin_dir_path(__FILE__) . 'includes/fluent-plus-addon-styles.php');
include(plugin_dir_path(__FILE__) . 'includes/fluent-plus-addon-scripts.php');
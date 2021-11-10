<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://dkibru.github.io
 * @since             1.0.0
 * @package           Ethiopian_Calendar
 *
 * @wordpress-plugin
 * Plugin Name:       Ethiopian Calendar
 * Plugin URI:        http://github.io/dkibru/ethiopian-calendar-wordpress-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Kibru Demeke
 * Author URI:        http://github.com/dkibru
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ethiopian-calendar
 * Domain Path:       /languages
 */
require 'vendor/autoload.php';
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ETHIOPIAN_CALENDAR_VERSION', '1.0.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ethiopian-calendar-activator.php
 */
function activate_ethiopian_calendar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ethiopian-calendar-activator.php';
	Ethiopian_Calendar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ethiopian-calendar-deactivator.php
 */
function deactivate_ethiopian_calendar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ethiopian-calendar-deactivator.php';
	Ethiopian_Calendar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ethiopian_calendar' );
register_deactivation_hook( __FILE__, 'deactivate_ethiopian_calendar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ethiopian-calendar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ethiopian_calendar() {

	$plugin = new Ethiopian_Calendar();
	$plugin->run();

}
run_ethiopian_calendar();

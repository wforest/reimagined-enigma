<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.sullidigital.com
 * @since             1.0.0
 * @package           SD_Camp
 *
 * @wordpress-plugin
 * Plugin Name:       SulliDigital Camp Plugin
 * Plugin URI:        https://www.sullidigital.com/sd-camp-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Bill Sullivan
 * Author URI:        https://www.sullidigital.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sd-camp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sd-camp-activator.php
 */
function activate_SD_Camp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sd-camp-activator.php';
	SD_Camp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sd-camp-deactivator.php
 */
function deactivate_SD_Camp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sd-camp-deactivator.php';
	SD_Camp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_SD_Camp' );
register_deactivation_hook( __FILE__, 'deactivate_SD_Camp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sd-camp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_SD_Camp() {

	$plugin = new SD_Camp();
	$plugin->run();

}
run_SD_Camp();

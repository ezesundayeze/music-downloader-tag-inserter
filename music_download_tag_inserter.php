<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              eze.com.ng
 * @since             1.0.0
 * @package           Music_download_tag_inserter
 *
 * @wordpress-plugin
 * Plugin Name:       Music Download Tag Inserter
 * Plugin URI:        eze.com.ng
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Eze Sunday Eze
 * Author URI:        eze.com.ng
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       music_download_tag_inserter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-music_download_tag_inserter-activator.php
 */
function activate_music_download_tag_inserter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-music_download_tag_inserter-activator.php';
	Music_download_tag_inserter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-music_download_tag_inserter-deactivator.php
 */
function deactivate_music_download_tag_inserter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-music_download_tag_inserter-deactivator.php';
	Music_download_tag_inserter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_music_download_tag_inserter' );
register_deactivation_hook( __FILE__, 'deactivate_music_download_tag_inserter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-music_download_tag_inserter.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_music_download_tag_inserter() {

	$plugin = new Music_download_tag_inserter();
	$plugin->run();

}
run_music_download_tag_inserter();

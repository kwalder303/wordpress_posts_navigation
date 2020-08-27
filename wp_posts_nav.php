<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           WP_Posts_Nav
 *
 * @wordpress-plugin
 * Plugin Name:       wp_posts_nav
 * Plugin URI:        https://github.com/kwalder303/wordpress_posts_navigation
 * Description:       Adds ability to add customizable with css next post button
 * Version:           1.0.0
 * Author:            aldertofco
 * Author URI:        https://aldertof.co
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-posts-nav
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
 * This action is documented in includes/class-wp-posts-nav-activator.php
 */
function activate_wp_posts_nav() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-posts-nav-activator.php';
	WP_Posts_Nav_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-posts-nav-deactivator.php
 */
function deactivate_wp_posts_nav() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-posts-nav-deactivator.php';
	WP_Posts_Nav_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_posts_nav' );
register_deactivation_hook( __FILE__, 'deactivate_wp_posts_nav' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-posts-nav.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_posts_nav() {

	$plugin = new WP_Posts_Nav();
	$plugin->run();

}
run_wp_posts_nav();

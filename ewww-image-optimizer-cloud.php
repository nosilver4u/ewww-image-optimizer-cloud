<?php
/**
 * Loader for EWWW I.O. Cloud plugin.
 *
 * This file bootstraps the rest of the EWWW IO plugin after some basic checks.
 *
 * @link https://ewww.io
 * @package EWWW_Image_Optimizer
 */

/*
Plugin Name: EWWW Image Optimizer Cloud
Plugin URI: https://ewww.io/
Description: Reduce file sizes for images within WordPress including NextGEN Gallery and GRAND FlAGallery via paid cloud service.
Author: Exactly WWW
Version: 4.6.3.5
Author URI: https://ewww.io/
License: GPLv3
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'EWWW_IO_CLOUD_PLUGIN' ) ) {
	define( 'EWWW_IO_CLOUD_PLUGIN', true );
}

// Check the PHP version.
if ( ! defined( 'PHP_VERSION_ID' ) || PHP_VERSION_ID < 50600 ) {
	add_action( 'network_admin_notices', 'ewww_image_optimizer_unsupported_php' );
	add_action( 'admin_notices', 'ewww_image_optimizer_unsupported_php' );
	// Loads the plugin translations.
	add_action( 'plugins_loaded', 'ewww_image_optimizer_false_init' );
} elseif ( defined( 'EWWW_IMAGE_OPTIMIZER_VERSION' ) ) {
	// Prevent loading both EWWW IO plugins.
	add_action( 'network_admin_notices', 'ewww_image_optimizer_dual_plugin' );
	add_action( 'admin_notices', 'ewww_image_optimizer_dual_plugin' );
	// Loads the plugin translations.
	add_action( 'plugins_loaded', 'ewww_image_optimizer_false_init' );
} elseif ( empty( $_GET['ewwwio_disable'] ) ) {
	/**
	 * The full path of the plugin file (this file).
	 *
	 * @var string EWWW_IMAGE_OPTIMIZER_PLUGIN_FILE
	 */
	define( 'EWWW_IMAGE_OPTIMIZER_PLUGIN_FILE', __FILE__ );
	/**
	 * The path of the plugin file relative to the plugins/ folder.
	 *
	 * @var string EWWW_IMAGE_OPTIMIZER_PLUGIN_FILE_REL
	 */
	define( 'EWWW_IMAGE_OPTIMIZER_PLUGIN_FILE_REL', basename( plugin_dir_path( __FILE__ ) ) . '/' . basename( __FILE__ ) );
	/**
	 * This is the full system path to the plugin folder.
	 *
	 * @var string EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH
	 */
	define( 'EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
	/**
	 * This is the full system path to the plugin images for testing.
	 *
	 * @var string EWWW_IMAGE_OPTIMIZER_IMAGES_PATH
	 */
	define( 'EWWW_IMAGE_OPTIMIZER_IMAGES_PATH', plugin_dir_path( __FILE__ ) . 'images/' );

	/**
	 * All the 'unique' functions for the core EWWW I.O. plugin.
	 */
	require_once( EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH . 'unique.php' );
	/**
	 * All the 'common' functions for both EWWW I.O. functions.
	 */
	require_once( EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH . 'common.php' );
	/**
	 * The various class extensions for parallel and background optimization.
	 */
	require_once( EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH . 'background.php' );
	/**
	 * EWWW_Image class for working with queued images and image records from the database.
	 */
	require_once( EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH . 'classes/class-ewww-image.php' );
	/**
	 * EWWWIO_Tracking class for reporting anonymous site data.
	 */
	require_once( EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH . 'classes/class-ewwwio-tracking.php' );
	/**
	 * EWWWIO_HS_Beacon class for embedding the HelpScout Beacon.
	 */
	require_once( EWWW_IMAGE_OPTIMIZER_PLUGIN_PATH . 'classes/class-ewwwio-hs-beacon.php' );
} // End if().

if ( ! function_exists( 'ewww_image_optimizer_unsupported_php' ) ) {
	/**
	 * Display a notice that the PHP version is too old.
	 */
	function ewww_image_optimizer_unsupported_php() {
		echo '<div id="ewww-image-optimizer-warning-php" class="error"><p><a href="https://docs.ewww.io/article/55-upgrading-php" target="_blank" data-beacon-article="5ab2baa6042863478ea7c2ae">' . esc_html__( 'EWWW Image Optimizer requires PHP 5.6 or greater. Newer versions of PHP, like 7.1 and 7.2, are significantly faster and much more secure. If you are unsure how to upgrade to a supported version, ask your webhost for instructions.', 'ewww-image-optimizer-cloud' ) . '</a></p></div>';
	}

	/**
	 * Display a notice when both the standard and cloud plugins are active.
	 */
	function ewww_image_optimizer_dual_plugin() {
		echo "<div id='ewww-image-optimizer-warning-double-plugin' class='error'><p><strong>" . esc_html__( 'Only one version of the EWWW Image Optimizer can be active at a time. Please deactivate other copies of the plugin.', 'ewww-image-optimizer-cloud' ) . '</strong></p></div>';
	}

	/**
	 * Runs on 'plugins_loaded' to load the language files when EWWW is not loading.
	 */
	function ewww_image_optimizer_false_init() {
		load_plugin_textdomain( 'ewww-image-optimizer-cloud', false, plugin_dir_path( __FILE__ ) . 'languages/' );
	}
}

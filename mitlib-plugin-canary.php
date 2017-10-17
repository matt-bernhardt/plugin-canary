<?php
/**
 * Plugin Name:   MITlib Plugin Canary
 * Plugin URI:    https://github.com/matt-bernhardt/plugin-canary
 * Description:   Detects plugins that have been removed from the Wordpress plugin directory
 * Version:       0.1.0
 * Author:        Matt Bernhardt
 * Author URI:    https://github.com/matt-bernhardt
 * Licence:       GPL2
 *
 * @package MITlib Plugin Canary
 * @author Matt Bernhardt
 * @link https://github.com/matt-bernhardt/plugin-canary
 */

namespace mitlib;

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the necesary classes.
include_once( 'class-plugin-canary-widget.php' );

// Call the class' init method as part of dashboard setup.
add_action( 'wp_dashboard_setup', array( 'mitlib\Plugin_Canary_Widget', 'init' ) );

<?php
/**
 * Plugin Name: WP Boot Example
 * Description: Example project for wp-boot
 * Author: WP Boot
 * Author URI: https://wp-boot.com
 * Version: 0.0.1
 * Text Domain: wp-boot-example
 * Domain Path: /languages
 *
 * @package wp-boot-example
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . 'build/index.php';

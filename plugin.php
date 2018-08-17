<?php
/**
 * Plugin Name: Image Block
 * Plugin URI: https://github.com/redsoxfan2499/gutenberg-image-block/
 * Description: gutenberg image block
 * Author: Darren Ladner
 * Author URI: https://hyperdrivedesigns.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';

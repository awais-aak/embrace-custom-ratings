<?php

/**
 * rating plugin with custom post type and small frontend
 *
 * @package         Embrace Custom Ratings
 * @author          Awais Ahmed Khan
 * @copyright       2020 Awais Ahmed Khan
 * @license         MIT
 *
 * @wordpress-plugin
 * Plugin Name:       Embrace Custom Ratings
 * Description:       A small plugin which allows to create ratings with a small and simple frontend which can be used via shortcode [wp_rating]
 * Version:           1.0
 * Author:            awais-aak
 * License:           MIT
 */


// no access if you call it directly
if (!defined('ABSPATH')) {
	exit;
}

// add scripts like css or js to our plugin
require plugin_dir_path( __FILE__ ) . 'includes/scripts.php';

// add custom post type and all relevant operations for these
require plugin_dir_path( __FILE__ ) . 'includes/post-type.php';

// add our ratings meta-box to handle all important information
require plugin_dir_path( __FILE__ ) . 'includes/meta-box.php';

// shortcode handling
require plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';

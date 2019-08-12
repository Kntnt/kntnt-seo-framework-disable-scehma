<?php

/**
 * @wordpress-plugin
 * Plugin Name:       SEO Framework Schema.org Warning
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Tells SEO Framework that another plugin provides Schema.org.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined('ABSPATH') || die;

add_filter('the_seo_framework_ldjson_plugin_detected', '__return_true');

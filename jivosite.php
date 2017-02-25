<?php
/**
 * JivoSite Plugin
 *
 * @link        https://dmtrmrv.com
 * @since       0.1.0
 * @package     JivoSite
 *
 * Plugin Name: JivoSite
 * Description: An easy way of adding JivoSite code to your website.
 * Version:     0.1.6
 * Author:      Dmitry Mayorov
 * Author URI:  https://dmtrmrv.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: jivosite
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jivosite.php';

/**
 * Begins execution of the plugin.
 *
 * @since 0.1.0
 */
function run_jivosite() {
	$plugin = new JivoSite();
	$plugin->run();

}
run_jivosite();

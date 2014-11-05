<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://dmitrymayorov.com
 * @since             0.1.0
 * @package           JivoSite
 *
 * @wordpress-plugin
 * Plugin Name:       JivoSite
 * 
 * Description:       Add JivoSite chat to your site without editing your theme.
 * Version:           0.1.2
 * Author:            Dmitry Mayorov
 * Author URI:        http://dmitrymayorov.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jivosite
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jivosite-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jivosite-deactivator.php';

/** This action is documented in includes/class-jivosite-activator.php */
register_activation_hook( __FILE__, array( 'JivoSite_Activator', 'activate' ) );

/** This action is documented in includes/class-jivosite-deactivator.php */
register_deactivation_hook( __FILE__, array( 'JivoSite_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-jivosite.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.1.0
 */
function run_jivosite() {

	$plugin = new JivoSite();
	$plugin->run();

}
run_jivosite();

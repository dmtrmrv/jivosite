<?php
/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that its ready for translation.
 *
 * @link       https://dmtrmrv.com
 * @since      0.1.0
 *
 * @package    JivoSite
 * @subpackage JivoSite/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that its ready for translation.
 *
 * @since      0.1.0
 * @package    JivoSite
 * @subpackage JivoSite/includes
 */
class JivoSite_I18n {

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since 0.1.0
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'jivosite',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages'
		);
	}
}

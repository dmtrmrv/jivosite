<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://dmtrmrv.com
 * @since      0.1.0
 *
 * @package    JivoSite
 * @subpackage JivoSite/includes
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    JivoSite
 * @subpackage JivoSite/admin
 * @author     Dmitry Mayorov
 */
class JivoSite_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since  0.1.0
	 * @access private
	 * @var    string  $name The ID of this plugin.
	 */
	private $name;

	/**
	 * The version of this plugin.
	 *
	 * @since  0.1.0
	 * @access private
	 * @var    string  $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 0.1.0
	 * @param string $name    The name of the plugin.
	 * @param string $version The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

	/**
	 * Enqueue JivoSite script.
	 *
	 * @since 0.1.0
	 */
	public function print_jivosite_script() {

		$value = get_option( 'jivosite_code' );
		$value = $value['widget_id'];

		if ( ! empty( $value ) ) {
			// Register JivoSite script.
			wp_register_script(
				$this->name,
				plugin_dir_url( __FILE__ ) . 'js/jivosite-public.js',
				array( 'jquery' ),
				$this->version,
				true
			);

			// Send widget id to the script.
			wp_localize_script(
				$this->name,
				'jivosite',
				array( 'widget_id' => $value )
			);

			// Enqueue the script.
			wp_enqueue_script( $this->name );

		}

	}
}

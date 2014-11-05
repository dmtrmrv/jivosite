<?php

/**
 * The dashboard-specific functionality of the plugin.
 *
 * @link       http://dmitrymayorov.com
 * @since      0.1.0
 *
 * @package    JivoSite
 * @subpackage JivoSite/includes
 */

/**
 * The dashboard-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    JivoSite
 * @subpackage JivoSite/admin
 * @author     Dmitry Mayorov
 */
class JivoSite_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $name    The ID of this plugin.
	 */
	private $name;

	/**
	 * The version of this plugin.
	 *
	 * @since    0.1.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    0.1.0
	 * @var      string    $name       The name of this plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $name, $version ) {

		$this->name = $name;
		$this->version = $version;

	}

	/**
	 * Create menu item.
	 *
	 * @since    0.1.0
	 */
	public function add_menu_page() {
		add_submenu_page(
			'options-general.php',
			__( 'JivoSite', 'jivosite' ),
			__( 'JivoSite', 'jivosite' ),
			'activate_plugins',
			'jivosite_code',
			array( $this, 'render_plugin_admin_page' )
		);
	}
	
	/**
	 * Render admin page.
	 * 
	 * @since    0.1.0
	 */
	public function render_plugin_admin_page() {
		require_once plugin_dir_path( __FILE__ ) . 'partials/jivosite-admin-display.php';
	}

	/**
	 * Initialize admin page.
	 * 
	 * @since    0.1.0
	 */
	public function admin_init() {
		register_setting(
			'jivosite_code',
			'jivosite_code',
			array( $this, 'sanitize' )
		);
		
		add_settings_section(
			'jivosite_code',
			'',
			'__return_false',
			'jivosite_code'
		);

		add_settings_field(
			'widget_id',
			__( 'Widget ID', 'jivosite' ),
			array( $this, 'display_field' ), 
			'jivosite_code', 
			'jivosite_code',
			array(
				'name' => 'widget_id',
				'desc' => __( 'See screenshots in plugin details if you don\'t know how to get widget id.' , 'jivosite' )
			)
		);
	}

	/**
	 * Sanitize option value.
	 * 
	 * @since    0.1.0
	 */
	public function sanitize( $input ) {
		$output = array(
			'widget_id' => ''
		);

		if ( isset( $input ) && is_array( $input ) ) {
			foreach ( $input as $k => $v ) {
				if ( $k == 'widget_id' ) {
					$output[ $k ] = sanitize_text_field( $v );
				}
			}
		}

		return $output;
	}

	/**
	 * Display field with description.
	 * 
	 * @since    0.1.0
	 */
	public function display_field( $args = array() ) {
		$name  = $args['name'];
		$desc  = $args['desc'];
		$value = get_option( 'jivosite_code' );
		$value = esc_textarea( $value[ $name ] );

		echo "<input name='jivosite_code[$name]' type='text' class='code' size='15' value='$value'>";
		echo "<p class='description'>$desc</p>";
	}
}

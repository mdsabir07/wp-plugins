<?php 
/**
 * Plugin Name: Coder MsiIt
 * Descripton: Creating new plugin using OOP.
 * Plugin URI: https://codermsiit.com
 * Author: Sabirul Islam
 * Author URI: https://codermsiit.com
 * Version: 1.0
 * License: GPL2 or later
 * License URL: https://www.gnu.org/licenses/gpl-2.0.html
 */
if (! defined( 'ABSPATH' )) {
	exit;
}


require_once __DIR__ . '/vendor/autoload.php';

/**
 * The main plugin class
 */
final class Coder_Msiit
{
	/**
	 * Plugin version
	 *
	 * @var string
	 */
	const version = '1.0';

	/**
	 * Class constructr
	 */
	private function __construct(){
		$this->define_constants();

		register_activation_hook( __FILE__, [ $this, 'activate' ] );

		add_action( 'plugins_loaded', [ $this, 'init_plugin'] );
	}

	/**
	 * Initialize a singleton instance
	 *
	 * @return \Coder_Msiit
	 */
	public static function init() {
		static $instance = false;

		if ( ! $instance ) {
			$instance = new self();
		}

		return $instance;
	}

	/**
	 * Define the required plugin apc_define_constants(key, constants)
	 * 
	 * @return void
	 */
	public function define_constants() {
		define( 'C_MSIIT_VERSION', self::version );
		define( 'C_MSIIT_FILE', __FILE__ );
		define( 'C_MSIIT_PATH', __DIR__ );
		define( 'C_MSIIT_URL', plugins_url('', C_MSIIT_FILE) );
		define( 'C_MSIIT_ASSETS', C_MSIIT_URL . '/assets' );
	}

	/**
	 * Initialize the plugin
	 *
	 * @return void
	 */
	public function init_plugin() {
		new Coder\Msiit\Admin();
	}

	/**
	 * Do stuff plugin activation
	 * 
	 * @return void
	 */
	public function activate() {
		$installed = get_option( 'c_msiit_installed' );

		if ( ! $installed ) {
			update_option( 'c_msiit_installed', time() );
		}
		
		update_option( 'c_msiit_version', C_MSIIT_VERSION );
	}

}


/**
 * Initialize the main plugin
 *
 * @return \Coder_Msiit
 */
function coder_msiit() {
	return Coder_Msiit::init();
}

// kick-off the plugin
coder_msiit();
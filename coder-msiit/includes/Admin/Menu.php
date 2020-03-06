<?php 

namespace Coder\Msiit\Admin;

/**
 * The Menu handler class
 */
class Menu
{
	
	function __construct() {
		add_action( 'admin_menu', [ $this, 'admin_menu' ] );
	}

	/**
	 * Register admin menu
	 *
	 * @return void
	 */
	public function admin_menu() {
		add_menu_page( __( 'Coder Msiit', 'coder-msiit' ), __( 'Coder', 'coder-msiit' ), 'manage_options' 'coder-msiit', [ $this, 'plugin_page' ], '
dashicons-smiley' );
	}

	/**
	 * Render the plugin page
	 *
	 * @return void
	 */
	public function plugin_page() {
		echo 'Hello World';
	}
}
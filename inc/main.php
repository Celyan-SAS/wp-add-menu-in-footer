<?php
/**
 * WordPress Add Menu In Footer plugin main class
*
* @author yann@abc.fr
* @see: https://github.com/Celyan-SAS/wp-add-menu-in-footer
*
*/
class wpCelyanFooterMenu {
	
	
	/**
	 * Class constructor
	 *
	 */
	public function __construct() {
		
		add_action( 'after_setup_theme', array( $this, 'register_my_menu' ) );
		
		add_action( 'wp_footer', array( $this, 'display_my_menu' ), 5 );
	}
	
	public function register_my_menu() {
		register_nav_menu( 'footer', __( 'Footer Menu', 'wpcfootermenu' ) );
	}
	
	public function display_my_menu() {
		wp_nav_menu( array( 'theme_location' => 'footer' ) );
	}
}
?>
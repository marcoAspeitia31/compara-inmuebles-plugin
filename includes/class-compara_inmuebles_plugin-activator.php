<?php

/**
 * Fired during plugin activation
 *
 * @link       https://https://github.com/BrandonVadilloDev
 * @since      1.0.0
 *
 * @package    Compara_inmuebles_plugin
 * @subpackage Compara_inmuebles_plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Compara_inmuebles_plugin
 * @subpackage Compara_inmuebles_plugin/includes
 * @author     Brandon Vadillo <brandon.vadillo@devitm.com>
 */
class Compara_inmuebles_plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$user_id = get_current_user_id();
		$page = get_page_by_path( 'inmuebles', OBJECT );

		if( !isset( $page ) ) {

			wp_insert_post( array (
				'post_author'   => $user_id,
				'post_type' 	=> 'page',
				'post_title' 	=> 'Inmuebles',
				'post_name' 	=> 'inmuebles',
				'post_status' 	=> 'publish'
			) );
			
		}
		
	}

}

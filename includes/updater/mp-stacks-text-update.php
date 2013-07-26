<?php
/**
 * Check for updates for this Plugin
 *
 */
 if (!function_exists('mp_stacks_text_update')){
	function mp_stacks_text_update() {
		$args = array(
			'software_name' => 'MP Stacks Text Addon', //<- The exact name of this Plugin. Make sure it matches the title in your mp_stacks_text, edd, and the WP.org repo
			'software_api_url' => 'http://repo.moveplugins.com',//The URL where EDD and mp_stacks_text are installed and checked
			'software_filename' => 'mp-stacks-text.php',
			'software_licensed' => true, //<-Boolean
		);
		
		//Since this is a plugin, call the Plugin Updater class
		$mp_stacks_text_plugin_updater = new MP_CORE_Plugin_Updater($args);
	}
 }
add_action( 'init', 'mp_stacks_text_update' );

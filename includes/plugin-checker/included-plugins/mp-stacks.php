<?php
/**
 * Install mp_stacks Plugin
 *
 */
 if (!function_exists('mp_core_plugin_check')){
	function mp_core_plugin_check() {
		$args = array(
			'plugin_name' => __('Move Plugins Stacks', 'mp_stacks_text'), 
			'plugin_message' => __('You require the Move Plugins Stacks plugin. Install it here.', 'mp_stacks_text'), 
			'plugin_slug' => 'mp_stacks', 
			'plugin_subdirectory' => 'mp-stacks/', 
			'plugin_filename' => 'mp-stacks.php',
			'plugin_required' => true,
			'plugin_download_link' => 'http://moveplugins.com'
		);
		$mp_core_plugin_check = new MP_CORE_Plugin_Checker($args);
	}
 }
add_action( 'admin_init', 'mp_core_plugin_check' );


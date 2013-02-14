<?php
/**
 * Install HTML In Post Plugin
 *
 */
function mp_stacks_checker() {
	$args = array(
		'plugin_name' => __('Move Plugins - Stacks', 'mp_stacks_text'), 
		'plugin_message' => __('You require the Move Plugins Stacks plugin. Install it here.', 'mp_stacks_text'), 
		'plugin_slug' => 'mp_html_in_post', 
		'plugin_subdirectory' => 'mp_stacks/', 
		'plugin_filename' => 'mp_stacks.php',
		'plugin_required' => true,
		'plugin_download_link' => 'http://moveplugins.com'
	);
	$mp_core_stacks_checker = new MP_CORE_Plugin_Checker($args);
}
add_action( 'admin_init', 'mp_stacks_checker' );


<?php
/*
Plugin Name: Move Plugins - Stacks Text Addon
Plugin URI: http://moveplugins.com
Description: This is an addon to the mp_stacks plugin which gives a range of additional options for formatting text in a stack.
Version: 1.0
Author: Phil Johnston
Author URI: http://moveplugins.com
Text Domain: mp_stacks_text
Domain Path: languages
License: GPL2
*/

/*  Copyright 2012  Phil Johnston  (email : phil@moveplugins.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Move Plugins Core.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Move Plugins Core, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/
// Plugin version
if( !defined( 'MP_STACKS_TEXT_VERSION' ) )
	define( 'MP_STACKS_TEXT_VERSION', '1.0.0.0' );

// Plugin Folder URL
if( !defined( 'MP_STACKS_TEXT_PLUGIN_URL' ) )
	define( 'MP_STACKS_TEXT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Plugin Folder Path
if( !defined( 'MP_STACKS_TEXT_PLUGIN_DIR' ) )
	define( 'MP_STACKS_TEXT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Plugin Root File
if( !defined( 'MP_STACKS_TEXT_PLUGIN_FILE' ) )
	define( 'MP_STACKS_TEXT_PLUGIN_FILE', __FILE__ );

/*
|--------------------------------------------------------------------------
| GLOBALS
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| INTERNATIONALIZATION
|--------------------------------------------------------------------------
*/

function mp_stacks_text_textdomain() {

	// Set filter for plugin's languages directory
	$mp_stacks_text_lang_dir = dirname( plugin_basename( MP_STACKS_TEXT_PLUGIN_FILE ) ) . '/languages/';
	$mp_stacks_text_lang_dir = apply_filters( 'mp_stacks_text_languages_directory', $mp_stacks_text_lang_dir );


	// Traditional WordPress plugin locale filter
	$locale        = apply_filters( 'plugin_locale',  get_locale(), 'mp-stacks-text' );
	$mofile        = sprintf( '%1$s-%2$s.mo', 'mp-stacks-text', $locale );

	// Setup paths to current locale file
	$mofile_local  = $mp_stacks_text_lang_dir . $mofile;
	$mofile_global = WP_LANG_DIR . '/mp-stacks-text/' . $mofile;

	if ( file_exists( $mofile_global ) ) {
		// Look in global /wp-content/languages/mp_stacks_text folder
		load_textdomain( 'mp_stacks_text', $mofile_global );
	} elseif ( file_exists( $mofile_local ) ) {
		// Look in local /wp-content/plugins/message_bar/languages/ folder
		load_textdomain( 'mp_stacks_text', $mofile_local );
	} else {
		// Load the default language files
		load_plugin_textdomain( 'mp_stacks_text', false, $mp_stacks_text_lang_dir );
	}

}
add_action( 'init', 'mp_stacks_text_textdomain', 1 );

/*
|--------------------------------------------------------------------------
| INCLUDES
|--------------------------------------------------------------------------
*/

function mp_stacks_text_include_files(){
	/**
	 * If mp_core isn't active, stop and install it now
	 */
	if (!function_exists('mp_core_textdomain')){
		
		/**
		 * Include Plugin Checker
		 */
		require( MP_STACKS_TEXT_PLUGIN_DIR . 'includes/plugin-checker/plugin-checker.php' );
		
		/**
		 * Check if wp_core in installed
		 */
		include_once( MP_STACKS_TEXT_PLUGIN_DIR . 'includes/plugin-checker/included-plugins/mp-core-check.php' );
		
	}
	/**
	 * If mp_core is active but mp_stacks isn't, stop and install it now
	 */
	elseif(!function_exists('mp_stacks_textdomain')){
		/**
		 * Include Plugin Checker
		 */
		require( MP_STACKS_TEXT_PLUGIN_DIR . 'includes/plugin-checker/plugin-checker.php' );
		
		/**
		 * Check if wp_html_in_post in installed
		 */
		include_once( MP_STACKS_TEXT_PLUGIN_DIR . 'includes/plugin-checker/included-plugins/mp-stacks.php' );
	}
	/**
	 * Otherwise, if mp_core and mp_stacks are installed, carry out the plugin's functions
	 */
	else{
			
		/**
		 * Modify Metabox for HTML repeater for posts
		 */
		require( MP_STACKS_TEXT_PLUGIN_DIR . 'includes/metaboxes/mp-stacks-text/mp-stacks-text.php' );
		
		/**
		 * Filters which modify the text on putput
		 */
		require( MP_STACKS_TEXT_PLUGIN_DIR . 'includes/misc-functions/text-actions.php' );
		
	}
}
add_action('plugins_loaded', 'mp_stacks_text_include_files', 9);

<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       eze.com.ng
 * @since      1.0.0
 *
 * @package    Music_download_tag_inserter
 * @subpackage Music_download_tag_inserter/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Music_download_tag_inserter
 * @subpackage Music_download_tag_inserter/includes
 * @author     Eze Sunday Eze <Mailsforeze@gmail.com>
 */
class Music_download_tag_inserter_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'music_download_tag_inserter',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

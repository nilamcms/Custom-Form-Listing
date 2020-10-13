<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/nilamcms/Custom-Form-Listing.git
 * @since      1.0.0
 *
 * @package    Nn_Custom_Form_Listing
 * @subpackage Nn_Custom_Form_Listing/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nn_Custom_Form_Listing
 * @subpackage Nn_Custom_Form_Listing/includes
 * @author     Nilam Nainvani <nnainvani@gmail.com>
 */
class Nn_Custom_Form_Listing_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nn-custom-form-listing',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

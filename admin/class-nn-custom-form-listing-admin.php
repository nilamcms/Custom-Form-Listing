<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/nilamcms/Custom-Form-Listing.git
 * @since      1.0.0
 *
 * @package    Nn_Custom_Form_Listing
 * @subpackage Nn_Custom_Form_Listing/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Nn_Custom_Form_Listing
 * @subpackage Nn_Custom_Form_Listing/admin
 * @author     Nilam Nainvani <nnainvani@gmail.com>
 */
class Nn_Custom_Form_Listing_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nn_Custom_Form_Listing_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nn_Custom_Form_Listing_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/nn-custom-form-listing-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nn_Custom_Form_Listing_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nn_Custom_Form_Listing_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/nn-custom-form-listing-admin.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Create a Custom table in database
	 *
	 * @since    1.0.0
	 */
	public function nn_create_custom_table() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nn_Custom_Form_Listing_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nn_Custom_Form_Listing_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		 global $wpdb;
      
     	 $nn_table_name = $wpdb->prefix.'nn_formdata';

     	 $nn_sql = "CREATE TABLE IF NOT EXISTS ".$nn_table_name." (
        id  int(9) NOT NULL AUTO_INCREMENT,
        full_name varchar(55) NOT NULL,
        email varchar(55) NOT NULL,
        phone_number varchar(55) NOT NULL,
        PRIMARY KEY(id)
        );";

      	$wpdb->query($nn_sql);

	}
	


}

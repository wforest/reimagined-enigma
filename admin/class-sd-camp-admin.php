<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.sullidigital.com
 * @since      1.0.0
 *
 * @package    SD_Camp
 * @subpackage SD_Camp/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    SD_Camp
 * @subpackage SD_Camp/admin
 * @author     Bill Sullivan <bill@sullidigital.com>
 */
class SD_Camp_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $SD_Camp    The ID of this plugin.
	 */
	private $SD_Camp;

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
	 * @param      string    $SD_Camp       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $SD_Camp, $version ) {

		$this->SD_Camp = $SD_Camp;
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
		 * defined in SD_Camp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The SD_Camp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->SD_Camp, plugin_dir_url( __FILE__ ) . 'css/sd-camp-admin.css', array(), $this->version, 'all' );

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
		 * defined in SD_Camp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The SD_Camp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->SD_Camp, plugin_dir_url( __FILE__ ) . 'js/sd-camp-admin.js', array( 'jquery' ), $this->version, false );

	}

}

<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.sullidigital.com
 * @since      1.0.0
 *
 * @package    SD_Camp
 * @subpackage SD_Camp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    SD_Camp
 * @subpackage SD_Camp/public
 * @author     Bill Sullivan <bill@sullidigital.com>
 */
class SD_Camp_Public {

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
	 * @param      string    $SD_Camp       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $SD_Camp, $version ) {

		$this->SD_Camp = $SD_Camp;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->SD_Camp, plugin_dir_url( __FILE__ ) . 'css/sd-camp-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->SD_Camp, plugin_dir_url( __FILE__ ) . 'js/sd-camp-public.js', array( 'jquery' ), $this->version, false );

	}

}

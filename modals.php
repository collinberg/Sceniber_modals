<?php
/**
 * Plugin Name:     Sceniber Modals
 * Plugin URI:      https://sjiassociates.com/
 * Description:     A lightweight Modal system built off of ACF.
 * Author:          Collin Berg
 * Author URI:      https://hirecollin.com
 * Text Domain:     sceniber-modals
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) .'includes/class-post-type.php';
require plugin_dir_path( __FILE__ ) .'includes/class-modal-post-type.php';

// Instantiate registration class, so we can add it as a dependency to main plugin class.
$post_type_registrations = new Modal_Post_Type_Registrations;

// Instantiate main plugin file, so activation callback does not need to be static.
$post_type = new Modal_Post_Type( $post_type_registrations );

// Register callback that is fired when the plugin is activated.
register_activation_hook( __FILE__, array( $post_type, 'activate' ) );

// Initialize registrations for post-activation requests.
$post_type_registrations->init();


/**
 * Adds styling to the dashboard
 * to the "At a Glance" metabox.
 */
if ( is_admin() ) {

	require(plugin_dir_path( __FILE__ ) . 'includes/class-post-type-admin.php');

	$post_type_admin = new Modal_Post_Type_Admin( $post_type_registrations );
	$post_type_admin->init();

}
/**
 * Adds styling to the dashboard
 * to the "At a Glance" metabox.
 */
function modal_files() {
    wp_enqueue_script( 'sceniber-modal', plugin_dir_url( __FILE__ ) . 'assets/js/Logic.js', array('jquery') );
		wp_enqueue_style( 'sceniber-styles', plugin_dir_url( __FILE__ ) . 'assets/sce-modal.css');

}
add_action( 'wp_enqueue_scripts', 'modal_files' );
/**
 * Adds styling to the dashboard
 * to the "At a Glance" metabox.
 */
function sce_admin_styles() {
		wp_enqueue_style( 'sceniber-admin_styles', plugin_dir_url( __FILE__ ) . 'assets/modal-admin.css');
}

add_action( 'admin_enqueue_scripts', 'sce_admin_styles' );
/**
 * Modal Templates
 */
function sceniber_queue_modal() {
    include( plugin_dir_path( __FILE__ ) . 'includes/modal-template.php');
}
add_action( 'wp_footer', 'sceniber_queue_modal' );

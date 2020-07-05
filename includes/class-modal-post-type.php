<?php
/**
 * Modal Post Type DECLARED.
 *
 * @param array $messages Existing post update messages.
 *
 * @return array Amended post update messages with new CPT update messages.
 */

class Modal_Post_Type_Registrations {

	public $post_type = 'sceniber-modals';

	public function init() {
		// Add the location post type and taxonomies
		add_action( 'init', array( $this, 'register' ) );
	}
	/**
	 * Initiate registrations of post type and taxonomies.
	 *
	 * @uses Modal_Post_Type_Registrations::register_post_type()
	 * @uses Modal_Post_Type_Registrations::register_taxonomy_category()
	 */
	public function register() {
		$this->register_post_type();
	}
	/**
	 * Register the custom post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */

	protected function register_post_type() {
		$labels = array(
			'name'               => _x( 'Modals', 'location', 'Sceniber_Modals' ),
			'singular_name'      => _x( 'Modal', 'location', 'Sceniber_Modals' ),
			'menu_name'          => _x( 'Modals', 'admin menu', 'Sceniber_Modals' ),
			'name_admin_bar'     => _x( 'Modals', 'add new on admin bar', 'Sceniber_Modals' ),
			'add_new'            => _x( 'Add New Modal', 'location', 'Sceniber_Modals' ),
			'add_new_item'       => __( 'Add New Modal', 'Sceniber_Modals' ),
			'new_item'           => __( 'New Modal', 'Sceniber_Modals' ),
			'edit_item'          => __( 'Edit Modal', 'Sceniber_Modals' ),
			'view_item'          => __( 'View Modal', 'Sceniber_Modals' ),
			'all_items'          => __( 'All Modals', 'Sceniber_Modals' ),
			'search_items'       => __( 'Search Modals', 'Sceniber_Modals' ),
			'parent_item_colon'  => __( 'Parent Modals:', 'Sceniber_Modals' ),
			'not_found'          => __( 'No Modal found.', 'Sceniber_Modals' ),
			'not_found_in_trash' => __( 'No Modal found in Trash.', 'Sceniber_Modals' )
		);

		$args = array(
			'labels'             => $labels,
	    'description'        => __( 'This is a Description.', 'Sceniber_Modals' ),
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_position'      => null,
			'menu_icon' => 'dashicons-images-alt',
			'supports'           => array( 'title', 'editor' )
		);

		register_post_type( $this->post_type, $args );
	}
}

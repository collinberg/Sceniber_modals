<?php
/**
 * Modal Post Type
 *
 * @package   Modal_Post_Type
 * @license   GPL-2.0+
 */

/**
 * Register post types and taxonomies.
 *
 * @package Modal_Post_Type
 */
class Modal_Post_Type_Admin {

	protected $registration_handler;

	public function __construct( $registration_handler ) {
		$this->registration_handler = $registration_handler;
	}

	public function init() {

		// Show post counts in the dashboard
		add_action( 'right_now_content_table_end', array( $this, 'add_rightnow_counts' ) );
		add_action( 'dashboard_glance_items', array( $this, 'modal_to_at_a_glance' ) );

	}

	/**
	 * Add counts to "At a Glance" dashboard widget in WP 3.8+
	 *
	 * @since 0.1.0
	 */
	public function modal_to_at_a_glance() {
	    // Custom post types counts
	    $post_types = get_post_types(
	    	array(
	    		'_builtin'	=> false,
	    		'public'	=> true,
	    	),
	    	'objects' );
		foreach ( $post_types as $post_type ) {
	    $num_posts = wp_count_posts( $post_type->name );
			$num = number_format_i18n( $num_posts->publish );
			$text = _n( $post_type->labels->singular_name, $post_type->labels->name, $num_posts->publish );

			if ( current_user_can( 'edit_posts' ) )
			{
	      $num = '<li class="page-count"><a href="edit.php?post_type=' . $post_type->name . '">' . $num . ' ' . $text . '</a></li>';
	    }
			echo $num;
		}
	}
}

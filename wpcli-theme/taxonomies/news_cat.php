<?php

/**
 * Registers the `news_cat` taxonomy,
 * for use with 'custompost'.
 */
function news_cat_init() {
	register_taxonomy( 'news_cat', array( 'custompost' ), array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts',
		),
		'labels'            => array(
			'name'                       => __( 'News cats', 'wpcli-theme' ),
			'singular_name'              => _x( 'News cat', 'taxonomy general name', 'wpcli-theme' ),
			'search_items'               => __( 'Search News cats', 'wpcli-theme' ),
			'popular_items'              => __( 'Popular News cats', 'wpcli-theme' ),
			'all_items'                  => __( 'All News cats', 'wpcli-theme' ),
			'parent_item'                => __( 'Parent News cat', 'wpcli-theme' ),
			'parent_item_colon'          => __( 'Parent News cat:', 'wpcli-theme' ),
			'edit_item'                  => __( 'Edit News cat', 'wpcli-theme' ),
			'update_item'                => __( 'Update News cat', 'wpcli-theme' ),
			'view_item'                  => __( 'View News cat', 'wpcli-theme' ),
			'add_new_item'               => __( 'Add New News cat', 'wpcli-theme' ),
			'new_item_name'              => __( 'New News cat', 'wpcli-theme' ),
			'separate_items_with_commas' => __( 'Separate news cats with commas', 'wpcli-theme' ),
			'add_or_remove_items'        => __( 'Add or remove news cats', 'wpcli-theme' ),
			'choose_from_most_used'      => __( 'Choose from the most used news cats', 'wpcli-theme' ),
			'not_found'                  => __( 'No news cats found.', 'wpcli-theme' ),
			'no_terms'                   => __( 'No news cats', 'wpcli-theme' ),
			'menu_name'                  => __( 'News cats', 'wpcli-theme' ),
			'items_list_navigation'      => __( 'News cats list navigation', 'wpcli-theme' ),
			'items_list'                 => __( 'News cats list', 'wpcli-theme' ),
			'most_used'                  => _x( 'Most Used', 'news_cat', 'wpcli-theme' ),
			'back_to_items'              => __( '&larr; Back to News cats', 'wpcli-theme' ),
		),
		'show_in_rest'      => true,
		'rest_base'         => 'news_cat',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'news_cat_init' );

/**
 * Sets the post updated messages for the `news_cat` taxonomy.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `news_cat` taxonomy.
 */
function news_cat_updated_messages( $messages ) {

	$messages['news_cat'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => __( 'News cat added.', 'wpcli-theme' ),
		2 => __( 'News cat deleted.', 'wpcli-theme' ),
		3 => __( 'News cat updated.', 'wpcli-theme' ),
		4 => __( 'News cat not added.', 'wpcli-theme' ),
		5 => __( 'News cat not updated.', 'wpcli-theme' ),
		6 => __( 'News cats deleted.', 'wpcli-theme' ),
	);

	return $messages;
}
add_filter( 'term_updated_messages', 'news_cat_updated_messages' );

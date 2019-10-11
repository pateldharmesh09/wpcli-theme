<?php

/**
 * Registers the `movie` post type.
 */
function movie_init() {
	register_post_type( 'movie', array(
		'labels'                => array(
			'name'                  => __( 'Movies', 'wpcli-theme' ),
			'singular_name'         => __( 'Movie', 'wpcli-theme' ),
			'all_items'             => __( 'All Movies', 'wpcli-theme' ),
			'archives'              => __( 'Movie Archives', 'wpcli-theme' ),
			'attributes'            => __( 'Movie Attributes', 'wpcli-theme' ),
			'insert_into_item'      => __( 'Insert into movie', 'wpcli-theme' ),
			'uploaded_to_this_item' => __( 'Uploaded to this movie', 'wpcli-theme' ),
			'featured_image'        => _x( 'Featured Image', 'movie', 'wpcli-theme' ),
			'set_featured_image'    => _x( 'Set featured image', 'movie', 'wpcli-theme' ),
			'remove_featured_image' => _x( 'Remove featured image', 'movie', 'wpcli-theme' ),
			'use_featured_image'    => _x( 'Use as featured image', 'movie', 'wpcli-theme' ),
			'filter_items_list'     => __( 'Filter movies list', 'wpcli-theme' ),
			'items_list_navigation' => __( 'Movies list navigation', 'wpcli-theme' ),
			'items_list'            => __( 'Movies list', 'wpcli-theme' ),
			'new_item'              => __( 'New Movie', 'wpcli-theme' ),
			'add_new'               => __( 'Add New', 'wpcli-theme' ),
			'add_new_item'          => __( 'Add New Movie', 'wpcli-theme' ),
			'edit_item'             => __( 'Edit Movie', 'wpcli-theme' ),
			'view_item'             => __( 'View Movie', 'wpcli-theme' ),
			'view_items'            => __( 'View Movies', 'wpcli-theme' ),
			'search_items'          => __( 'Search movies', 'wpcli-theme' ),
			'not_found'             => __( 'No movies found', 'wpcli-theme' ),
			'not_found_in_trash'    => __( 'No movies found in trash', 'wpcli-theme' ),
			'parent_item_colon'     => __( 'Parent Movie:', 'wpcli-theme' ),
			'menu_name'             => __( 'Movies', 'wpcli-theme' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => null,
		'menu_icon'             => 'dashicons-image-filter',
		'show_in_rest'          => true,
		'rest_base'             => 'movie',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'movie_init' );

/**
 * Sets the post updated messages for the `movie` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `movie` post type.
 */
function movie_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['movie'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Movie updated. <a target="_blank" href="%s">View movie</a>', 'wpcli-theme' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'wpcli-theme' ),
		3  => __( 'Custom field deleted.', 'wpcli-theme' ),
		4  => __( 'Movie updated.', 'wpcli-theme' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Movie restored to revision from %s', 'wpcli-theme' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Movie published. <a href="%s">View movie</a>', 'wpcli-theme' ), esc_url( $permalink ) ),
		7  => __( 'Movie saved.', 'wpcli-theme' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Movie submitted. <a target="_blank" href="%s">Preview movie</a>', 'wpcli-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Movie scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview movie</a>', 'wpcli-theme' ),
		date_i18n( __( 'M j, Y @ G:i', 'wpcli-theme' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Movie draft updated. <a target="_blank" href="%s">Preview movie</a>', 'wpcli-theme' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'movie_updated_messages' );

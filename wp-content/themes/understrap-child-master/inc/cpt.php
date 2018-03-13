<?php
        add_action( 'init', 'work_register' );

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function work_register() {
	$labels = array(
		'name'               => _x( 'Work', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Work number', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Work', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Work member', 'Team member', 'understrap' ),
        'add_new_item'       => __( 'Add New Work member', 'understrap' ),
        'new_item'           => __( 'New Work member', 'understrap' ),
        'edit_item'          => __( 'Edit Work member', 'understrap' ),
        'view_item'          => __( 'View Work member', 'understrap' ),
        'all_items'          => __( 'All Work members', 'understrap' ),
        'search_items'       => __( 'Search Work members', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Work member:', 'understrap' ),
        'not_found'          => __( 'No Work members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Work members found in Trash.', 'understrap' )
        );

        $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a work list of the members', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'work' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
        );

        register_post_type('work', $args );
        }



function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );
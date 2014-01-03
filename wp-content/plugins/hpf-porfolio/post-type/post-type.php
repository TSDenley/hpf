<?php
/**
* Custom post type - "portfolio"
*/

function hpf_regester_portfolio_post_type() {

	register_post_type('portfolio', array(
		'label' => 'Projects',
		'description' => 'Portfolio projects',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'portfolio', 'with_front' => true),
		'query_var' => true,
		'has_archive' => true,
		'menu_position' => '5',
		'supports' => array('title','editor','revisions','thumbnail'),
		'taxonomies' => array('category','post_tag'),
		'labels' => array (
			'name' => 'Projects',
			'singular_name' => 'Project',
			'menu_name' => 'Projects',
			'add_new' => 'Add Project',
			'add_new_item' => 'Add New Project',
			'edit' => 'Edit',
			'edit_item' => 'Edit Project',
			'new_item' => 'New Project',
			'view' => 'View Project',
			'view_item' => 'View Project',
			'search_items' => 'Search Projects',
			'not_found' => 'No Projects Found',
			'not_found_in_trash' => 'No Projects Found in Trash',
			'parent' => 'Parent Project',
		)
	));

}
add_action('init', 'hpf_regester_portfolio_post_type');

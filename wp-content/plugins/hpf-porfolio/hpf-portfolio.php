<?php
/*
Plugin Name: HDD Portfolio
Description: Portfolio plugin for Harry Denley Design.
Version: 0.1
Author: T S Denley
Author URI: http://tsdenley.co.uk/
*/

// Regester post type
require "post-type/post-type.php";

// Custom meta boxed
require "post-type/meta.php";

/**
* Template tags
*/

/**
* Returns the project description
*
* template usage: echo hpf_project_description( get_the_ID() )
*/
function hpf_project_description( $post_id ) {
	// Retrieves the stored value from the database
	$meta_value = get_post_meta( $post_id, 'meta-text-description', true );

	// Checks and displays the retrieved value
	if( !empty( $meta_value ) ) {
		return $meta_value;
	}
}

/**
* Returns the project date
*/
function hpf_project_date( $post_id ) {
	// Retrieves the stored value from the database
	$meta_value = get_post_meta( $post_id, 'hpf-project-date', true );

	// Checks and displays the retrieved value
	if( !empty( $meta_value ) ) {
		return $meta_value;
	}
}

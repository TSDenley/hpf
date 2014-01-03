<?php
/**
* Custom meta boxes for portfolio
*/

/**
* Register meta box
*/
function hpf_mb_setup() {
	add_meta_box( 'project_info', 'Project Info', 'hpf_project_info_callback', 'portfolio', 'side', 'default' );
}
add_action( 'add_meta_boxes', 'hpf_mb_setup' );

/**
* Meta box callback
*/
function hpf_project_info_callback( $post ) {
	wp_nonce_field( basename(__FILE__), 'hpf_nonce' );

	$hpf_stored_meta = get_post_meta( $post->ID ); ?>

	<p>
		<label for="hpf-description">Description</label>
	</p>
	<p>
		<textarea name="hpf-description" cols="40" rows="10">
			<?php if( isset( $hpf_stored_meta['hpf_project_description'] ) ) echo $hpf_stored_meta['hpf_project_description'][0]; ?>
		</textarea>
	</p>

	<p>
		<label for="hpf-project-date">Project Date</label>
		<input name="hpf-project-date" type="text" value="<?php if( isset( $hpf_stored_meta['hpf_project_date'] ) ) echo $hpf_stored_meta['hpf_project_date'][0]; ?>">
	</p>

	<?php
}

/**
* Save meta box values
*/
function hpf_save_meta_boxes( $post_id ) {
	 // Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'hpf_nonce' ] ) && wp_verify_nonce( $_POST[ 'hpf_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}

	// Description
	if( isset( $_POST[ 'hpf_project_description' ] ) ) {
		update_post_meta( $post_id, 'hpf_project_description', sanitize_text_field( $_POST[ 'hpf_project_description' ] ) );
	}

	// Date
	if( isset( $_POST[ 'hpf_project_date' ] ) ) {
		update_post_meta( $post_id, 'hpf_project_date', $_POST[ 'hpf_project_date' ] );
	}
}
add_action( 'save_post', 'hpf_save_meta_boxes' );

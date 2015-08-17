<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){
	global $post;
	switch ( $post->post_name ) {
		case 'PAGENAME':
			//add_metaboxes_PAGENAE();
			break;
		default:
			// POST TYPES
			//add_metaboxes_POST_TYPE();
	}
});


/*------------------------------------*\
	CUSTOM METABOXES FUNCTIONS
\*------------------------------------*/

/**
* Add metaboxes for page type "Contacto"
**/
function add_metaboxes_PAGE(){
	// add_meta_box( 'social', 'Redes sociales', 'metabox_social', 'page', 'advanced', 'high' );
	// add_meta_box( 'telefono', 'Teléfonos', 'metabox_telefono', 'page', 'advanced', 'high' );
	// add_meta_box( 'email', 'E-mail de contacto', 'metabox_email', 'page', 'advanced', 'high' );
	// add_meta_box( 'address', 'Address', 'metabox_address', 'page', 'advanced', 'high' );
}// add_metaboxes_PAGE





/*-----------------------------------------*\
	CUSTOM METABOXES CALLBACK FUNCTIONS
\*-----------------------------------------*/
	
/**
* Display metabox in page or post type
**/
function metabox_social($post){
	$facebook = get_post_meta($post->ID, '_facebook_meta', true);
	$twitter = get_post_meta($post->ID, '_twitter_meta', true);

	wp_nonce_field(__FILE__, '_facebook_meta_nonce');
	wp_nonce_field(__FILE__, '_twitter_meta_nonce');

	echo "<label>Facebook:</label>";
	echo "<input type='text' class='[ widefat ]' name='_facebook_meta' value='$facebook' />";
	echo "<label>Twitter:</label>";
	echo "<input type='text' class='[ widefat ]' name='_twitter_meta' value='$twitter' />";
}// metabox_social

	



/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

	add_action('save_post', function( $post_id ){

		// save_metabox_PAGE( $post_id );
		
	});

	/**
	* Save the metaboxes for post type "Productos"
	**/
	function save_metabox_PAGE( $post_id ){
		
		// Net content
		// if ( isset($_POST['_net_content_meta']) and check_admin_referer( __FILE__, '_net_content_meta_nonce') ){
		// 	update_post_meta($post_id, '_net_content_meta', $_POST['_net_content_meta']);
		// }

	}// save_metabox_PAGE
	
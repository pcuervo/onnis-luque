<?php

/*------------------------------------*\
	CUSTOM METABOXES
\*------------------------------------*/

add_action('add_meta_boxes', function(){

	global $post;

	switch ( $post->post_name ) {
		case 'info-contacto':
			add_metaboxes_contacto();
			break;
		default:
			add_metaboxes_talleres();
	}// switch

});



/*------------------------------------*\
	CUSTOM METABOXES FUNCTIONS
\*------------------------------------*/

/**
* Add metaboxes for page "Contacto"
**/
function add_metaboxes_contacto(){
				
	$meta = add_meta_box( 'telefono', 'Teléfono', 'metabox_telefono', 'page', 'advanced', 'high' );
	add_meta_box( 'email', 'E-mail', 'metabox_email', 'page', 'advanced', 'high' );
	add_meta_box( 'facebook', 'Facebook', 'metabox_facebook', 'page', 'advanced', 'high' );
	add_meta_box( 'instagram', 'Instagram', 'metabox_instagram', 'page', 'advanced', 'high' );

}// add_metaboxes_contacto

/**
* Add metaboxes for post type "Talleres"
**/
function add_metaboxes_talleres(){

	add_meta_box( 'lugar_taller', 'Lugar', 'metabox_lugar_taller', 'talleres', 'advanced', 'high' );
	add_meta_box( 'fecha_taller', 'Fecha', 'metabox_fecha_taller', 'talleres', 'advanced', 'high' );

}// add_metaboxes_talleres



/*-----------------------------------------*\
	CUSTOM METABOXES CALLBACK FUNCTIONS
\*-----------------------------------------*/

/**
* Display metabox "teléfono" in page "Información de contacto"
* @param obj $post
**/
function metabox_telefono( $post ){

	$telefono = get_post_meta($post->ID, '_telefono_meta', true);
	wp_nonce_field(__FILE__, '_telefono_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_telefono_meta' value='$telefono' />";

}// metabox_telefono

/**
* Display metabox "E-mail" in page "Información de contacto"
* @param obj $post
**/
function metabox_email( $post ){

	$email = get_post_meta($post->ID, '_email_meta', true);
	wp_nonce_field(__FILE__, '_email_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_email_meta' value='$email' />";

}// metabox_email

/**
* Display metabox "Facebook" in page "Información de contacto"
* @param obj $post
**/
function metabox_facebook( $post ){

	$facebook = get_post_meta($post->ID, '_facebook_meta', true);
	wp_nonce_field(__FILE__, '_facebook_meta_nonce');
	echo '<label><small>Ejemplo: https://www.facebook.com/cuervoestudio</small></label>';
	echo "<input type='text' class='[ widefat ]' name='_facebook_meta' value='$facebook' />";

}// metabox_facebook

/**
* Display metabox "Instagram" in page "Información de contacto"
* @param obj $post
**/
function metabox_instagram( $post ){

	$instagram = get_post_meta($post->ID, '_instagram_meta', true);
	wp_nonce_field(__FILE__, '_instagram_meta_nonce');
	echo '<label><small>Ejemplo: https://instagram.com/jenselter/</small></label>';
	echo "<input type='text' class='[ widefat ]' name='_instagram_meta' value='$instagram' />";

}// metabox_instagram


/**
* Display metabox lugar in post type "Talleres"
* @param obj $post
**/
function metabox_lugar_taller( $post ){

	$lugar_taller = get_post_meta($post->ID, '_lugar_taller_meta', true);
	wp_nonce_field(__FILE__, '_lugar_taller_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_lugar_taller_meta' value='$lugar_taller' />";

}// metabox_lugar_taller

/**
* Display metabox fecha in post type "Talleres"
* @param obj $post
**/
function metabox_fecha_taller( $post ){

	$fecha_taller = get_post_meta($post->ID, '_fecha_taller_meta', true);
	wp_nonce_field(__FILE__, '_fecha_taller_meta_nonce');
	echo "<input type='text' class='[ widefat ]' name='_fecha_taller_meta' value='$fecha_taller' />";

}// metabox_fecha_taller


/*------------------------------------*\
	SAVE METABOXES DATA
\*------------------------------------*/

add_action('save_post', function( $post_id ){

	save_metabox_contacto( $post_id );
	save_metabox_talleres( $post_id );
	
});

/**
* Save the metaboxes for page "Información de contacto"
* @param int $post_id
**/
function save_metabox_contacto( $post_id ){
	
	// Teléfono
	if ( isset($_POST['_telefono_meta']) and check_admin_referer( __FILE__, '_telefono_meta_nonce') ){
		update_post_meta($post_id, '_telefono_meta', $_POST['_telefono_meta']);
	}
	// E-mail
	if ( isset($_POST['_email_meta']) and check_admin_referer( __FILE__, '_email_meta_nonce') ){
		update_post_meta($post_id, '_email_meta', $_POST['_email_meta']);
	}
	// Facebook
	if ( isset($_POST['_facebook_meta']) and check_admin_referer( __FILE__, '_facebook_meta_nonce') ){
		update_post_meta($post_id, '_facebook_meta', $_POST['_facebook_meta']);
	}
	// Instagram
	if ( isset($_POST['_instagram_meta']) and check_admin_referer( __FILE__, '_instagram_meta_nonce') ){
		update_post_meta($post_id, '_instagram_meta', $_POST['_instagram_meta']);
	}

}// save_metabox_contacto

/**
* Save the metaboxes for post type "Talleres"
* @param int $post_id
**/
function save_metabox_talleres( $post_id ){
	
	// Lugar taller
	if ( isset($_POST['_lugar_taller_meta']) and check_admin_referer( __FILE__, '_lugar_taller_meta_nonce') ){
		update_post_meta($post_id, '_lugar_taller_meta', $_POST['_lugar_taller_meta']);
	}
	// Fecha taller
	if ( isset($_POST['_fecha_taller_meta']) and check_admin_referer( __FILE__, '_fecha_taller_meta_nonce') ){
		update_post_meta($post_id, '_fecha_taller_meta', $_POST['_fecha_taller_meta']);
	}

}// save_metabox_talleres
	
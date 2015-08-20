<?php


/*------------------------------------*\
	CUSTOM PAGES
\*------------------------------------*/

add_action('init', function(){

	// HOME
	if( ! get_page_by_path('info-contacto') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Información de contacto',
			'post_name'   => 'info-contacto',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	
});

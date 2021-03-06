<?php

/*------------------------------------*\
	#CONSTANTS
\*------------------------------------*/

	/**
	* Define paths to javascript, styles, theme and site.
	**/
	define( 'JSPATH', get_template_directory_uri() . '/js/' );
	define( 'CSSPATH', get_template_directory_uri() . '/css/' );
	define( 'THEMEPATH', get_template_directory_uri() . '/' );
	define( 'SITEURL', site_url('/') );



/*------------------------------------*\
	#INCLUDES
\*------------------------------------*/

	require_once('inc/post-types.php');
	require_once('inc/metaboxes.php');
	require_once('inc/taxonomies.php');
	require_once('inc/pages.php');
	require_once('inc/users.php');
	require_once('inc/functions-admin.php');
	require_once('inc/functions-js-footer.php');
	require_once('inc/extra-metaboxes.php');



/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){

	// scripts
	wp_enqueue_script( 'plugins', JSPATH.'plugins.js', array('jquery'), '1.0', TRUE );
	wp_enqueue_script( 'functions', JSPATH.'functions.js', array('plugins'), '1.0', TRUE );

	// localize scripts
	wp_localize_script( 'functions', 'ajax_url', admin_url('admin-ajax.php') );
	wp_localize_script( 'functions', 'site_url', site_url() );
	wp_localize_script( 'functions', 'theme_url', THEMEPATH );


	// styles
	wp_enqueue_style( 'styles', get_stylesheet_uri() );

});

/**
* Add javascript to the footer of pages.
**/
add_action( 'wp_footer', 'footer_scripts', 21 );

/**
* Disable admin bar front-end
**/
show_admin_bar( FALSE );

/**
 * Show all post of post type "Archivo"
 */
function show_all_projects(){
	global $post;

	while ( have_posts() ) : the_post();
		$autor = get_autor_proyecto( $post->ID );
		$permalink = get_permalink( $post->ID );
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		get_html_project( $permalink, $image[0], get_the_title(), $autor );
	endwhile; wp_reset_query();

}// show_all_projects

/**
 * Show filtered posts of post type "Archivo"
 * @param string $filters
 */
function show_filtered_projects( $filters ){
	global $post;

	$ano = isset( $filters['ano'] ) ? $filters['ano'] : '';
	$arquitecto_despacho = isset( $filters['arquitecto-despacho'] ) ? $filters['arquitecto-despacho'] : '';
	$lugar = isset( $filters['lugar'] ) ? $filters['lugar'] : '';
	$tipologia = isset( $filters['tipologia'] ) ? $filters['tipologia'] : '';
	$proyecto = isset( $filters['proyectos'] ) ? $filters['proyectos'] : '';

	if( '' !== $proyecto ){
		$args = array(
			'name'        => $proyecto,
			'post_type'   => 'archivo'
		);
	} else {
		$args = get_archive_filter_args( $ano, $arquitecto_despacho, $lugar, $tipologia );
	}

	$query = new WP_Query( $args );
	while ( $query->have_posts() ) : $query->the_post();
		$autor = get_autor_proyecto( $post->ID );
		$permalink = get_permalink( $post->ID );
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		get_html_project( $permalink, $image[0], get_the_title(), $autor );
	endwhile; wp_reset_query();

}// show_filtered_projects



/*------------------------------------*\
	#HELPER FUNCTIONS
\*------------------------------------*/

/**
 * Print the title tag based on what is being viewed.
 * @return string
 */
function print_title(){

	global $page, $paged;

	wp_title( '|', TRUE, 'right' );
	bloginfo( 'name' );

	// Add a page number if necessary
	if ( $paged >= 2 || $page >= 2 ){
		echo ' | ' . sprintf( __( 'Página %s' ), max( $paged, $page ) );
	}

}// print_title

/**
 * Formats title to display only 30 characters
 * replacing the last 3 with '...'
 * @param string $title
 * @return string $formatted_title
 */
function format_title( $title ){

	if( 34 > strlen( $title ) ) return $title; 

	$formatted_title = substr( $title, 0, 34 );
	return $formatted_title . '...';

}// format_title




/*------------------------------------*\
	#FORMAT FUNCTIONS
\*------------------------------------*/

// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}// wpex_pagination
}// if

/*------------------------------------*\
	#SET/GET FUNCTIONS
\*------------------------------------*/

/**
 * Get "telefono" from page "Información de contacto"
 * @return string $telefono
 */
function get_telefono_contacto(){

	$contact_info_query = new WP_Query( 'pagename=info-contacto' );
	$contact_info_query->the_post();
	$telefono = get_post_meta( get_the_ID(), '_telefono_meta', TRUE );
	wp_reset_query();

	return $telefono;

}// get_telefono_contacto

/**
 * Get "email" from page "Información de contacto"
 * @return string $email
 */
function get_email_contacto(){

	$contact_info_query = new WP_Query( 'pagename=info-contacto' );
	$contact_info_query->the_post();
	$email = get_post_meta( get_the_ID(), '_email_meta', TRUE );
	wp_reset_query();

	return $email;

}// get_email_contacto

/**
 * Get "Facebook" from page "Información de contacto"
 * @return string $facebook
 */
function get_facebook_contacto(){

	$contact_info_query = new WP_Query( 'pagename=info-contacto' );
	$contact_info_query->the_post();
	$facebook = get_post_meta( get_the_ID(), '_facebook_meta', TRUE );
	wp_reset_query();

	return $facebook;

}// get_facebook_contacto

/**
 * Get "Instragram" from page "Información de contacto"
 * @return string $instagram
 */
function get_instagram_contacto(){

	$contact_info_query = new WP_Query( 'pagename=info-contacto' );
	$contact_info_query->the_post();
	$instagram = get_post_meta( get_the_ID(), '_instagram_meta', TRUE );
	wp_reset_query();

	return $instagram;

}// get_instagram_contacto

/**
 * Get taxonomy terms from post type "Proyectos"
 * @param string $taxonomy
 * @return array $terms
 */
function get_terms_proyectos( $taxonomy ){

	$taxonomy_terms = array();
	$terms = get_terms( $taxonomy );

	if ( empty( $terms ) ) {
		return array();
	}
	foreach ( $terms as $term ) {
		$taxonomy_terms[$term->slug] = $term->name;
	}
	return $taxonomy_terms;

}// get_terms_proyectos

/**
 * Get "proyectos" in post type "Archivo"
 * @return array $proyectos
 */
function get_proyectos(){

	$proyectos = array();

	$archivo_args = array( 'post_type' => 'archivo', 'posts_per_page' => -1 );
	$archivo_query = new WP_Query( $archivo_args );
	while ( $archivo_query->have_posts() ) : $archivo_query->the_post();
		$proyectos[basename( get_permalink() )] = get_the_title();
	endwhile;
	wp_reset_query();

	return $proyectos;

}// get_proyectos

/**
 * Get "lugar" taxonomy term from post type "Proyectos"
 * @param int $post_id
 * @return array $lugar
 */
function get_lugar_proyecto( $post_id ){

	$terms_lugar = wp_get_post_terms( $post_id, 'lugar' );
	$lugar = str_replace( '-', ',', $terms_lugar[0]->name );

	return preg_replace( '/ ,/', ',', $lugar, 1 );

}// get_autor_proyecto

/**
 * Get "autor" taxonomy term from post type "Proyectos"
 * @param int $post_id
 * @return array $autor
 */
function get_autor_proyecto( $post_id ){

	$terms_autor = wp_get_post_terms( $post_id, 'arquitecto-despacho' );
	$autor = str_replace( '-', ',', $terms_autor[0]->name );

	return preg_replace( '/ ,/', ',', $autor, 1 );

}// get_autor_proyecto

/**
 * Get taxonomy term from post type "Proyectos"
 * @param int $post_id
 * @return string $ano
 */
function get_ano_proyecto( $post_id ){

	$terms_ano = wp_get_post_terms( $post_id, 'ano' );
	$ano = str_replace( '-', ',', $terms_ano[0]->name );

	return preg_replace( '/ /', '', $ano, 1 );

}// get_ano_proyecto

/**
 * Prepare query args for project filters
 * @param string $permalink
 * @param string $image
 * @param string $title
 * @param string $lugar
 * @param string $ano
 */
function get_html_project( $permalink, $image, $title, $autor ){
	?>
	<a class="[ full-height ][ block ][ relative ]" href="<?php echo $permalink ?>">
		<article class="[ column xmall-12 medium-6 large-4 ][ card ][ color-light ][ relative ][ margin-bottom ]">
			<img class="[ card__image ][ center-full ]" src="<?php echo $image ?>" alt="">
			<div class="[ card__info ][ xmall-1z2 ][ z-index-1 ]">
				<h3 class="[ no-margin ]"><?php echo format_title( $title ); ?></h3>
				<p><?php echo $autor; ?></p>
			</div>
		</article>
	</a>
	<?php
}

/**
 * Prepare query args for project filters
 * @param string $ano
 * @param string $arquitecto_despacho
 * @param string $lugar
 * @param string $tipologia
 * @return array $args
 */
function get_archive_filter_args( $ano, $arquitecto_despacho, $lugar, $tipologia ){

	$args = array(
	    'posts_per_page'	=> -1,
	    'post_type' 		=> 'archivo',
	    'tax_query'			=> array(
	    	'relation'		=> 'AND'
        ),
	);

	if( '' !== $ano ){
		$ano_arr = array(
			'taxonomy' => 'ano',
            'field' => 'slug',
            'terms' => $ano,
			);
		array_push( $args['tax_query'], $ano_arr );
	}

	if( '' !== $arquitecto_despacho ){
		$arquitecto_despacho_arr = array(
			'taxonomy' => 'arquitecto-despacho',
            'field' => 'slug',
            'terms' => $arquitecto_despacho,
			);
		array_push( $args['tax_query'], $arquitecto_despacho_arr );
	}

	if( '' !== $lugar ){
		$lugar_arr = array(
			'taxonomy' => 'lugar',
            'field' => 'slug',
            'terms' => $lugar,
			);
		array_push( $args['tax_query'], $lugar_arr );
	}

	if( '' !== $tipologia ){
		$tipologia_arr = array(
			'taxonomy' => 'tipologia',
            'field' => 'slug',
            'terms' => $tipologia,
			);
		array_push( $args['tax_query'], $tipologia_arr );
	}

	return $args;
}// get_archive_filter_args



require_once('inc/gallery-parse.php');



/*------------------------------------*\
	#AJAX FUNCTIONS
\*------------------------------------*/

/**
 * Send contact email to PMI.
 */
function send_email_contacto(){

	$nombre = $_POST['nombre'];
	$telefono = isset(  $_POST['telefono'] ) ? $_POST['telefono'] : '';
	$email = $_POST['email'];
	$to_email = get_email_contacto();
	$mensaje = $_POST['mensaje'];

	$subject = $nombre . ' te ha contactado a través de www.onnisluque.com: ';
	$headers = 'From: Nombre <' . $to_email . '>' . "\r\n";
	$message = '<html><body>';
	$message .= '<h3>Datos de contacto</h3>';
	$message .= '<p>Nombre: '.$nombre.'</p>';

	if( $telefono !== '' ){
		$message .= '<p>Teléfono: '. $telefono . '</p>';
	}

	$message .= '<p>Email: '. $email . '</p>';
	$message .= '<p>Mensaje: '. $mensaje . '</p>';
	$message .= '</body></html>';

	add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));

	$mail = wp_mail($to_email, $subject, $message, $headers );

	if( ! $mail ) {
		$message = array(
		'error'		=> 1,
		'message'	=> 'No se pudo enviar el correo.',
		);
		echo json_encode($message , JSON_FORCE_OBJECT);
		exit;
	}

	$message = array(
		'error'		=> 0,
		'message'	=> 'Gracias por tu mensaje ' . $nombre . '. En breve nos pondremos en contacto contigo.',
	);
	echo json_encode($message , JSON_FORCE_OBJECT);
	exit();

}// send_email_contacto
add_action("wp_ajax_send_email_contacto", "send_email_contacto");
add_action("wp_ajax_nopriv_send_email_contacto", "send_email_contacto");
<?php

/*------------------------------------*\
	CUSTOM POST TYPES
\*------------------------------------*/

add_action('init', function(){

	// ARCHIVO
	$labels = array(
		'name'          => 'Proyectos',
		'singular_name' => 'Proyectos',
		'add_new'       => 'Nuevo proyecto',
		'add_new_item'  => 'Nuevo proyecto',
		'edit_item'     => 'Editar proyecto',
		'new_item'      => 'Nuevo proyecto',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver proyecto',
		'search_items'  => 'Buscar proyectos',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Proyectos'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'archivo' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'archivo', $args );

	// EDITORIAL
	$labels = array(
		'name'          => 'Publicaciones',
		'singular_name' => 'Publicación',
		'add_new'       => 'Nueva publicación',
		'add_new_item'  => 'Nueva publicación',
		'edit_item'     => 'Editar publicación',
		'new_item'      => 'Nueva publicación',
		'all_items'     => 'Todas',
		'view_item'     => 'Ver publicación',
		'search_items'  => 'Buscar publiaciones',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Publicaciones'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'editorial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'editorial', $args );

	// TALLERES
	$labels = array(
		'name'          => 'Talleres',
		'singular_name' => 'Taller',
		'add_new'       => 'Nuevo taller',
		'add_new_item'  => 'Nuevo taller',
		'edit_item'     => 'Editar taller',
		'new_item'      => 'Nuevo taller',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver taller',
		'search_items'  => 'Buscar talleres',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Talleres'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'talleres' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'talleres', $args );

	// VIDEOS
	$labels = array(
		'name'          => 'Videos',
		'singular_name' => 'Video',
		'add_new'       => 'Nuevo video',
		'add_new_item'  => 'Nuevo video',
		'edit_item'     => 'Editar video',
		'new_item'      => 'Nuevo video',
		'all_items'     => 'Todos',
		'view_item'     => 'Ver video',
		'search_items'  => 'Buscar videos',
		'not_found'     => 'No se encontró',
		'menu_name'     => 'Videos'
	);
	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'videos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);
	register_post_type( 'videos', $args );

});
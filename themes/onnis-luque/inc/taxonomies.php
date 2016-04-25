<?php

/*------------------------------------*\
	TAXONOMIES
\*------------------------------------*/

add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// AÑO
	if( ! taxonomy_exists('ano')){

		$labels = array(
			'name'              => 'Año',
			'singular_name'     => 'Año',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar año',
			'update_item'       => 'Actualizar año',
			'add_new_item'      => 'Nuevo año',
			'new_item_name'     => 'Nombre nuevo año',
			'menu_name'         => 'Año'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'ano' ),
		);
		register_taxonomy( 'ano', array('archivo', 'videos'), $args );
	}

	// LUGAR
	if( ! taxonomy_exists('lugar')){

		$labels = array(
			'name'              => 'Lugar',
			'singular_name'     => 'Lugar',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar lugar',
			'update_item'       => 'Actualizar lugar',
			'add_new_item'      => 'Nuevo lugar',
			'new_item_name'     => 'Nombre nuevo lugar',
			'menu_name'         => 'Lugar'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'lugar' ),
		);

		register_taxonomy( 'lugar', array('archivo', 'videos'), $args );
	}

	// ARQUITECTO / DESPACHO
	if( ! taxonomy_exists('arquitecto-despacho')){

		$labels = array(
			'name'              => 'Arquitecto / Despacho',
			'singular_name'     => 'Arquitecto / Despacho',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Arquitecto / Despacho',
			'update_item'       => 'Actualizar Arquitecto / Despacho',
			'add_new_item'      => 'Nuevo Arquitecto / Despacho',
			'new_item_name'     => 'Nombre nuevo Arquitecto / Despacho',
			'menu_name'         => 'Arquitecto / Despacho'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'arquitecto-despacho' ),
		);

		register_taxonomy( 'arquitecto-despacho', array('archivo', 'videos'), $args );
	}

	// TIPOLOGÍA
	if( ! taxonomy_exists('tipologia')){

		$labels = array(
			'name'              => 'Tipología',
			'singular_name'     => 'Tipología',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Tipología',
			'update_item'       => 'Actualizar Tipología',
			'add_new_item'      => 'Nuevo Tipología',
			'new_item_name'     => 'Nombre nuevo Tipología',
			'menu_name'         => 'Tipología'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'tipologia' ),
		);

		register_taxonomy( 'tipologia', array('archivo', 'videos'), $args );
	}

	// IMPORTANCIA
	if( ! taxonomy_exists('mostrar-home')){

		$labels = array(
			'name'              => 'Mostar home',
			'singular_name'     => 'Mostar home',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar Mostar home',
			'update_item'       => 'Actualizar Mostar home',
			'add_new_item'      => 'Nuevo Mostar home',
			'new_item_name'     => 'Nombre nuevo Mostar home',
			'menu_name'         => 'Mostar home'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'mostrar-home' ),
		);

		register_taxonomy( 'mostrar-home', array('archivo'), $args );
	}

}// custom_taxonomies_callback
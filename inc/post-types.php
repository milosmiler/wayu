<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	// add_action('init', function(){


	// 	// NOTICIAS
	// 	$labels = array(
	// 		'name'          => 'Portadas',
	// 		'singular_name' => 'Portada',
	// 		'add_new'       => 'Nueva Portada',
	// 		'add_new_item'  => 'Nueva Portada',
	// 		'edit_item'     => 'Editar Portada',
	// 		'new_item'      => 'Nueva Portada',
	// 		'all_items'     => 'Todas',
	// 		'view_item'     => 'Ver Portada',
	// 		'search_items'  => 'Buscar Portada',
	// 		'not_found'     => 'No se encontro',
	// 		'menu_name'     => 'Portadas'
	// 	);

	// 	$args = array(
	// 		'labels'             => $labels,
	// 		'public'             => true,
	// 		'publicly_queryable' => true,
	// 		'show_ui'            => true,
	// 		'show_in_menu'       => true,
	// 		'query_var'          => true,
	// 		'rewrite'            => array( 'slug' => 'portadas' ),
	// 		'capability_type'    => 'post',
	// 		'has_archive'        => true,
	// 		'hierarchical'       => false,
	// 		'menu_position'      => 6,
	// 		'taxonomies'         => array( 'category' ),
	// 		'supports'           => array( 'title', 'editor', 'thumbnail' )
	// 	);
	// 	register_post_type( 'portada', $args );

	// });


add_action('init', 'portadas');

function portadas() {

    $labels = array(
        'name' => __( 'portadas' ),
        'singular_name' => __( 'portada' ),
        'add_new' => __( 'Añadir Nuevo' ),
        'add_new_item' => __( 'Añadir nuevo portada' ),
        'edit_item' => __( 'Editar portada' ),
        'new_item' => __( 'Nuevo portada'),
        'view_item' => __( 'Ver portada'),
        'search_items' => __( 'Buscar portada'),
        'not_found' =>  __('No se encontró nada'),
        'not_found_in_trash' => __('No se encontró nada en la papelera'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','thumbnail','editor')
      );

    register_post_type( 'portadas' , $args );
}
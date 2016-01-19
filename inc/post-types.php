<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// NOTICIAS
		$labels = array(
			'name'          => 'Ofrecemos',
			'singular_name' => 'Ofrecemos',
			'add_new'       => 'Nueva Ofrecemos',
			'add_new_item'  => 'Nueva Ofrecemos',
			'edit_item'     => 'Editar Ofrecemos',
			'new_item'      => 'Nueva Ofrecemos',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Ofrecemos',
			'search_items'  => 'Buscar Ofrecemos',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Ofrecemos'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'ofrecemos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'ofrecemos', $args );

	});



add_action('init', function(){


		// NOTICIAS
		$labels = array(
			'name'          => 'Wayu Solidario',
			'singular_name' => 'Wayu Solidario',
			'add_new'       => 'Nueva Wayu Solidario',
			'add_new_item'  => 'Nueva Wayu Solidario',
			'edit_item'     => 'Editar Wayu Solidario',
			'new_item'      => 'Nueva Wayu Solidario',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Wayu Solidario',
			'search_items'  => 'Buscar Wayu Solidario',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Wayu Solidario'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'wayu-solidario' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'Wayu Solidario', $args );

	});



add_action('init', function(){


		// NOTICIAS
		$labels = array(
			'name'          => 'Sukala',
			'singular_name' => 'Sukala',
			'add_new'       => 'Nueva Sukala',
			'add_new_item'  => 'Nueva Sukala',
			'edit_item'     => 'Editar Sukala',
			'new_item'      => 'Nueva Sukala',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Sukala',
			'search_items'  => 'Buscar Sukala',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Sukala'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'wayu-solidario' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'Sukala', $args );

	});






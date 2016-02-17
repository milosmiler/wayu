<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////

	add_action('init', function(){


		// NOTICIAS
		$labels = array(
			'name'          => 'Portadas',
			'singular_name' => 'Portadas',
			'add_new'       => 'Nueva Portadas',
			'add_new_item'  => 'Nueva Portadas',
			'edit_item'     => 'Editar Portadas',
			'new_item'      => 'Nueva Portadas',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Portadas',
			'search_items'  => 'Buscar Portadas',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Portadas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'portadas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'portadas', $args );

	});


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
			'name'          => 'wayu-solidario',
			'singular_name' => 'wayu-solidario',
			'add_new'       => 'Nueva wayu-solidario',
			'add_new_item'  => 'Nueva Wayu-solidario',
			'edit_item'     => 'Editar wayu-solidario',
			'new_item'      => 'Nueva wayu-solidario',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver wayu-solidario',
			'search_items'  => 'Buscar wayu-solidario',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'wayu-Solidario'
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
		register_post_type( 'wayu-solidario', $args );

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
			'rewrite'            => array( 'slug' => 'sukala' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'Sukala', $args );

	});






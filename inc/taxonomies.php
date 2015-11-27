<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////


	add_action( 'init', 'custom_taxonomies_callback', 0 );

	function custom_taxonomies_callback(){

		// AUTORES
		/*if( ! taxonomy_exists('autores')){

			$labels = array(
				'name'              => 'Autores',
				'singular_name'     => 'Autor',
				'search_items'      => 'Buscar',
				'all_items'         => 'Todos',
				'edit_item'         => 'Editar Autor',
				'update_item'       => 'Actualizar Autor',
				'add_new_item'      => 'Nuevo Autor',
				'new_item_name'     => 'Nombre Nuevo Autor',
				'menu_name'         => 'Autores'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'autores' ),
			);

			register_taxonomy( 'autor', 'libro', $args );
		}*/
		
		
		// TERMS
		if ( ! term_exists( 'mente', 'autor' ) ){
			wp_insert_term( 'Mente', 'category', array('slug' => 'mente') );
		}
		if ( ! term_exists( 'bienestar', 'category' ) ){
			wp_insert_term( 'Bienestar', 'category', array('slug' => 'bienestar'));
		}
		if ( ! term_exists( 'conciencia', 'category' ) ){
			wp_insert_term( 'Conciencia', 'category', array('slug' => 'conciencia'));
		}

		if ( ! term_exists( 'producto_del_mes', 'category' ) ){
			wp_insert_term( 'Producto del mes', 'category', array('slug' => 'producto_del_mes'));
		}
		if ( ! term_exists( 'actividades', 'category' ) ){
			wp_insert_term( 'Actividades', 'category', array('slug' => 'actividades'));
		}
		$actividades = term_exists( 'actividades', 'category' );

		if ( ! term_exists( 'cursos_y_talleres', 'category' ) ){
			wp_insert_term( 'Cursos y Talleres', 'category', array('slug' => 'cursos_y_talleres', 'parent'=> $actividades['term_id'] ) );
		}
		if ( ! term_exists( 'conferencias', 'category' ) ){
			wp_insert_term( 'Conferencias', 'category', array('slug' => 'conferencias', 'parent'=> $actividades['term_id'] ) );
		}
		if ( ! term_exists( 'coaching_empresarial', 'category' ) ){
			wp_insert_term( 'Coaching Empresarial', 'category', array('slug' => 'coaching_empresarial', 'parent'=> $actividades['term_id'] ) );
		}

		/* // SUB TERMS CREATION
		if(term_exists('parent-term', 'category')){
			$term = get_term_by( 'slug', 'parent-term', 'category');
			$term_id = intval($term->term_id);
			if ( ! term_exists( 'child-term', 'category' ) ){
				wp_insert_term( 'A child term', 'category', array('slug' => 'child-term', 'parent' => $term_id) );
			}
			
		} */
	}

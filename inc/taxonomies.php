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
		if ( ! term_exists( 'espiritualidad', 'category' ) ){
			wp_insert_term( 'Espiritualidad', 'category', array('slug' => 'espiritualidad'));
		}
		if ( ! term_exists( 'coaching', 'category' ) ){
			wp_insert_term( 'Coaching', 'category', array('slug' => 'coaching'));
		}
		if ( ! term_exists( 'superacion', 'category' ) ){
			wp_insert_term( 'superacion', 'category', array('slug' => 'superacion'));
		}
		if ( ! term_exists( 'desarrollo_humano', 'category' ) ){
			wp_insert_term( 'Desarrollo Humano', 'category', array('slug' => 'desarrollo_humano'));
		}
		if ( ! term_exists( 'motivacion', 'category' ) ){
			wp_insert_term( 'motivación', 'category', array('slug' => 'motivacion'));
		}
		if ( ! term_exists( 'aprender', 'category' ) ){
			wp_insert_term( 'Aprender', 'category', array('slug' => 'aprender'));
		}
		if ( ! term_exists( 'psicologia', 'category' ) ){
			wp_insert_term( 'Psicologia', 'category', array('slug' => 'psicologia'));
		}
		if ( ! term_exists( 'meditacion', 'category' ) ){
			wp_insert_term( 'meditacion', 'category', array('slug' => 'meditacion'));
		}
		if ( ! term_exists( 'nuticion', 'category' ) ){
			wp_insert_term( 'nutricion', 'category', array('slug' => 'nutricion'));
		}
		if ( ! term_exists( 'salud', 'category' ) ){
			wp_insert_term( 'Salud', 'category', array('slug' => 'salud'));
		}
		if ( ! term_exists( 'health_coaching', 'category' ) ){
			wp_insert_term( 'Health Coaching', 'category', array('slug' => 'health_coaching'));
		}
		if ( ! term_exists( 'habilidades', 'category' ) ){
			wp_insert_term( 'Habilidades', 'category', array('slug' => 'habilidades'));
		}
		if ( ! term_exists( 'actitud', 'category' ) ){
			wp_insert_term( 'Actitud', 'category', array('slug' => 'actitud'));
		}
		if ( ! term_exists( 'capacidad', 'category' ) ){
			wp_insert_term( 'Capacidad', 'category', array('slug' => 'capacidad'));
		}
		if ( ! term_exists( 'yoga', 'category' ) ){
			wp_insert_term( 'Yoga', 'category', array('slug' => 'yoga'));
		}
		if ( ! term_exists( 'musica', 'category' ) ){
			wp_insert_term( 'musica', 'category', array('slug' => 'musica'));
		}
		if ( ! term_exists( 'ninos', 'category' ) ){
			wp_insert_term( 'niños', 'category', array('slug' => 'ninos'));
		}
		if ( ! term_exists( 'adolecentes', 'category' ) ){
			wp_insert_term( 'Adolecentes', 'category', array('slug' => 'adolecentes'));
		}
		if ( ! term_exists( 'adultos', 'category' ) ){
			wp_insert_term( 'Adultos', 'category', array('slug' => 'adultos'));
		}
		if ( ! term_exists( 'parejas', 'category' ) ){
			wp_insert_term( 'Parejas', 'category', array('slug' => 'parejas'));
		}
		if ( ! term_exists( 'amor', 'category' ) ){
			wp_insert_term( 'Amor', 'category', array('slug' => 'amor'));
		}
		if ( ! term_exists( 'mujeres', 'category' ) ){
			wp_insert_term( 'Mujeres', 'category', array('slug' => 'mujeres'));
		}
		if ( ! term_exists( 'mamas', 'category' ) ){
			wp_insert_term( 'Mamás', 'category', array('slug' => 'mamas'));
		}
		if ( ! term_exists( 'embarazo', 'category' ) ){
			wp_insert_term( 'Embarazo', 'category', array('slug' => 'embarazo'));
		}
		if ( ! term_exists( 'comunidad', 'category' ) ){
			wp_insert_term( 'Comunidad', 'category', array('slug' => 'comunidad'));
		}
		if ( ! term_exists( 'grupo', 'category' ) ){
			wp_insert_term( 'Grupo', 'category', array('slug' => 'grupo'));
		}
		if ( ! term_exists( 'felicidad', 'category' ) ){
			wp_insert_term( 'Felicidad', 'category', array('slug' => 'felicidad'));
		}
		if ( ! term_exists( 'cambio', 'category' ) ){
			wp_insert_term( 'cambio', 'category', array('slug' => 'cambio'));
		}

		if ( ! term_exists( 'producto_del_mes', 'category' ) ){
			wp_insert_term( 'Producto del mes', 'category', array('slug' => 'producto_del_mes'));
		}

		if ( ! term_exists( 'ofrecemos', 'category' ) ){
			wp_insert_term( 'Ofrecemos', 'category', array('slug' => 'ofrecemos'));
		}
		$ofrecemos = term_exists( 'ofrecemos', 'category' );

		if ( ! term_exists( 'talleres', 'category' ) ){
			wp_insert_term( 'Talleres', 'category', array('slug' => 'talleres', 'parent'=> $ofrecemos['term_id'] ) );
		}
		if ( ! term_exists( 'cursos', 'category' ) ){
			wp_insert_term( 'Cursos', 'category', array('slug' => 'cursos', 'parent'=> $ofrecemos['term_id'] ) );
		}
		if ( ! term_exists( 'terapias', 'category' ) ){
			wp_insert_term( 'Terapias', 'category', array('slug' => 'terapias', 'parent'=> $ofrecemos['term_id'] ) );
		}
		if ( ! term_exists( 'meditaciones', 'category' ) ){
			wp_insert_term( 'Meditaciones', 'category', array('slug' => 'meditaciones', 'parent'=> $ofrecemos['term_id'] ) );
		}
		if ( ! term_exists( 'conferencias', 'category' ) ){
			wp_insert_term( 'Conferencias', 'category', array('slug' => 'conferencias', 'parent'=> $ofrecemos['term_id'] ) );
		}
		if ( ! term_exists( 'renta', 'category' ) ){
			wp_insert_term( 'Renta', 'category', array('slug' => 'renta', 'parent'=> $ofrecemos['term_id'] ) );
		}
		if ( ! term_exists( 'cafeteria', 'category' ) ){
			wp_insert_term( 'Cafeteria', 'category', array('slug' => 'cafeteria', 'parent'=> $ofrecemos['term_id'] ) );
		}


		if ( ! term_exists( 'wayu_corp', 'category' ) ){
			wp_insert_term( 'Wayu Corp', 'category', array('slug' => 'wayu_corp'));
		}
		$wayu_corp = term_exists( 'wayu_corp', 'category' );

		if ( ! term_exists( 'coaching_individual', 'category' ) ){
			wp_insert_term( 'Coaching Individual', 'category', array('slug' => 'coaching_individual', 'parent'=> $wayu_corp['term_id'] ) );
		}

		if ( ! term_exists( 'coaching_grupal', 'category' ) ){
			wp_insert_term( 'Coaching Grupal', 'category', array('slug' => 'coaching_grupal', 'parent'=> $wayu_corp['term_id'] ) );
		}
		if ( ! term_exists( 'desarrollo_de_habilidades', 'category' ) ){
			wp_insert_term( 'Desarrollo de Habilidades', 'category', array('slug' => 'desarrollo_de_habilidades', 'parent'=> $wayu_corp['term_id'] ) );
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

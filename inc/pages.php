<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// CONTACTO
		if( ! get_page_by_path('home') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Home',
				'post_name'   => 'home',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
		if( ! get_page_by_path('blog') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'blog',
				'post_name'   => 'blog',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
		if( ! get_page_by_path('nosotros') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'nosotros',
				'post_name'   => 'nosotros',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
		if( ! get_page_by_path('preguntas') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'preguntas',
				'post_name'   => 'preguntas',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}
		if( ! get_page_by_path('aviso') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'aviso',
				'post_name'   => 'aviso',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});

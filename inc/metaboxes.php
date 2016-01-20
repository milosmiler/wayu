<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		// add_meta_box( id, title, name_meta_callback, post_type, context, priority );

	});

	add_action('add_meta_boxes', function(){
              add_meta_box( 'destacar_catalogo', 'Post Destacados', 'funcion_destacado_catalogo', 'post');
       });
	add_action('add_meta_boxes', function(){
              add_meta_box( 'destacar_introduccion', 'Destacar Introducción', 'funcion_destacado_intro', 'ofrecemos');
       });



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function name_meta_callback($post){
		// $name = get_post_meta($post->ID, '_name_meta', true);
		// wp_nonce_field(__FILE__, '_name_meta_nonce');
		// echo "<input type='text' class='widefat' id='name' name='_name_meta' value='$name'/>";
	}


function funcion_destacado_catalogo($post){
		$post_destacado = get_post_meta( $post->ID, 'post_destacado', true );
		$checked = $post_destacado ? 'checked' : '';
		wp_nonce_field(__FILE__, 'productos_post_destacado');
		?>
		<input type="checkbox" name="post_destacado" id="post_destacado" value="1"  <?php echo $checked; ?> /> Intro Destacado

	<?php }

function funcion_destacado_intro($post){
		$post_intro = get_post_meta( $post->ID, 'post_intro', true );
		$checked = $post_intro ? 'checked' : '';
		wp_nonce_field(__FILE__, 'productos_post_intro');
		?>
		<input type="checkbox" name="post_intro" id="post_intro" value="1"  <?php echo $checked; ?> /> Destacar Intro

	<?php }



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['_name_meta']) and check_admin_referer(__FILE__, '_name_meta_nonce') ){
			update_post_meta($post_id, '_name_meta', $_POST['_name_meta']);
		}


		// Guardar correctamente los checkboxes
		// if ( isset($_POST['destacado']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
		// 	update_post_meta($post_id, 'destacado', $_POST['destacado']);
		// } else if ( ! defined('DOING_AJAX') ){
		// 	delete_post_meta($post_id, 'destacado');
		// }

		if ( isset($_POST['post_destacado'])){
			update_post_meta($post_id, 'post_destacado', $_POST['post_destacado']);
		}else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, 'post_destacado');//descatacdo post
		}

		if ( isset($_POST['post_intro'])){
			update_post_meta($post_id, 'post_intro', $_POST['post_intro']);
		}else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, 'post_intro');//descatacdo post
		}


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////

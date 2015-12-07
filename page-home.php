	<?php get_header(); ?>
	<!-- Insert content here -->
 <div class="flexslider">
      <ul class="slides">
        <?php $post_destacado = new WP_query(array('posts_per_page' => 5, 'post_type' => 'post', 'meta_key'  => 'post_destacado',
                      'meta_query' => array(
                        array(
                          'key'     => 'post_destacado',
                          'value'   => 1,
                          'compare' => '=',
                        ),
                      ), 

                    )); ?>

        <?php if ( $post_destacado->have_posts() ) : ?>
            <?php while ( $post_destacado->have_posts() ) : $post_destacado->the_post(); ?>
          <li>
           <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full-size'); ?><a>
           <a href="<?php the_permalink(); ?>"> <p class="flex-caption"><?php the_title();?></p></a>
         </li>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
              <?php else : ?>
              <p><?php _e( 'no existen imagenes destacadas e inserta post destacados' ); ?></p>
            <?php endif; ?>
      </ul>
  </div>

    
      <aside class="calendario-newleter">
        <div class="wrapper">
        <div class="calendario">
          Consulta horario de clases y eventos
          <button class="btn-calendario">Calendario de actividades</button>
        </div>
        <div class="newleter">
          SI FUERA TU, DE UNA VEZ ME SUSCRIBO AL NEWSLETTER
          <input type="text" class="input-newleter" placeholder="correo electronico">
          <button class="btn-enviar">Enviar</button>
        </div>
      </div>
      </aside>
      
            <section class="actividades">
              <div class="wrapper">
                <h2>Ofrecemos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <div class="slider-actividades">
                  <div id="owl-example" class="owl-carousel">
                    <?php $eventos = new WP_Query( array( 'posts_per_page' => 4, 'category_name' => 'actividades')); 
                        if ( $eventos->have_posts() ) : while ( $eventos->have_posts() ) : $eventos->the_post(); ?>
                          <div class="item">
                          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('ofrecemos'); ?></a>
                            <h3><?php the_title();?></h3>
                            <p> <?php echo wp_trim_words(get_the_excerpt(), 12 );?></p>
                            <footer class="slider-base">
                              <div class="fecha-page"> <?php the_time('M j, Y') ?> </div>
                              <div class="comentarios"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comment </div>
                            </footer>
                          </div>
                        <?php endwhile; wp_reset_postdata(); else : ?>
                          <p><?php _e( 'lo siento' ); ?></p>
                        <?php endif; ?>
                  </div>
                </div>
              </div>
            </section>
     
            <section class="productos-del-mes">
              <div class="wrapper">
              <h2> Suukala, Tienda y Cafeteria </h2>
                  <section class="tabs">
                    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                    <label for="tab-1" class="tab-label-1">Producto 1</label>
                    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                    <label for="tab-2" class="tab-label-2">producto 2</label>
                    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                    <label for="tab-3" class="tab-label-3">producto 3</label>
                    <div class="clear-shadow"></div>
                    <div class="content">
                 <?php $producto = new WP_Query( array( 'posts_per_page' => 1, 'category_name' => 'producto_del_mes')); 
                        if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
                        <div class="content-1">
                          <figure class="image-producto">
                            <?php the_post_thumbnail('image-producto'); ?>
                          </figure>
                            <h2 class="nombre-producto"><?php the_title();?></h2> 
                            <p class="descript-producto"> 
                              <?php the_excerpt();?>
                            </p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); else : ?>
                          <p><?php _e( 'lo siento' ); ?></p>
                        <?php endif; ?>



                  <?php $producto = new WP_Query( array( 'posts_per_page' => 1, 'offset' => 1, 'category_name' => 'producto_del_mes')); 
                        if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
                        <div class="content-2">
                          <figure class="image-producto">
                             <?php the_post_thumbnail('image-producto'); ?>
                          </figure>
                            <h2 class="nombre-producto"><?php the_title();?></h2> 
                            <p class="descript-producto"> 
                              <?php the_excerpt();?>
                            </p>   
                        </div>
                  <?php endwhile; wp_reset_postdata(); else : ?>
                        <p><?php _e( 'lo siento' ); ?></p>
                      <?php endif; ?>


                  <?php $producto = new WP_Query( array( 'posts_per_page' => 1, 'offset' => 2, 'category_name' => 'producto_del_mes')); 
                        if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
                        <div class="content-3">
                            <figure class="image-producto">
                               <?php the_post_thumbnail('image-producto'); ?>
                          </figure>
                            <h2 class="nombre-producto"><?php the_title();?></h2> 
                            <p class="descript-producto"> 
                              <?php the_excerpt();?>
                            </p>
                        </div>
                   <?php endwhile; wp_reset_postdata(); else : ?>
                        <p><?php _e( 'lo siento esta enfermo' ); ?></p>
                      <?php endif; ?>

                    </div>
                  </section>
              </div>
            </section>


         
            <section class="blog">
              <div class="wrapper">
              <h2> WAYUU BLOG </h2>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. </p>
          <?php $temp_query = $wp_query;
                  query_posts('showposts=4&cat=-5'); 
               if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article class="post-page">
                   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-blog'); ?></a> 
                  <h3><?php the_title();?></h3>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 20 );?></p>
                  <footer class="slider-base">
                     <div class="fecha-page2"> <?php the_time('M j, Y') ?> </div>
                      <div class="comentarios2"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comment</div>
                  </footer>
                </article>
             <?php  endwhile; ?>
             </div>
            </section>

           
            <section class="comunidad">
              <h2>COMUNIDAD WAYUU </h2>

              <p>Pero un buen día, una pequeña línea de texto simulado, llamada Lorem Ipsum, decidió aventurarse y salir al vasto mundo
               de la gramática. El gran Oxmox le desanconsejó hacerlo, ya que esas tierras estaban llenas de comas malvadas, signos 
               de interrogación salvajes y puntos y coma traicioneros, pero el texto simulado no se dejó atemorizar. <br><br>

                Pero un buen día, una pequeña línea de texto simulado, 
                llamada Lorem Ipsum, decidió aventurarse y salir al vasto mundo de la gramática. </p>
            </section>
            <section class="colaboradores">
              <h2>COLABORADORES Y PATROCINADORES </h2>
            </section>
            <div class="wrapper">

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
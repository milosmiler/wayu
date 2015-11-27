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
          Recibe consejos, guias y mucho más
          <input type="text" class="input-newleter" placeholder="correo electronico">
          <button class="btn-enviar">Enviar</button>
        </div>
      </div>
      </aside>
      <div class="wrapper">
            <section class="actividades">
                <h2>CONOCE NUESTRAS ACTIVIDADES</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <div class="slider-actividades">
                  <div id="owl-example" class="owl-carousel">
                    <?php $eventos = new WP_Query( array( 'posts_per_page' => 4, 'category_name' => 'actividades')); 
                        if ( $eventos->have_posts() ) : while ( $eventos->have_posts() ) : $eventos->the_post(); ?>
                          <div class="item">
                          <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('full-size'); ?></a>
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
            </section>
            <section class="productos-del-mes">
              <h2> PRODUCTOS DEL MES </h2>

              
            </section>



            <section class="blog">
              <h2> WAYUU BLOG </h2>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. </p>
          <?php $temp_query = $wp_query;
                  query_posts('showposts=4'); 
               if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article class="post-page">
                   <?php the_post_thumbnail('image-blog'); ?>
                  <h3><?php the_title();?></h3>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 20 );?></p>
                  <footer class="slider-base">
                     <div class="fecha-page"> <?php the_time('M j, Y') ?> </div>
                      <div class="comentarios"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comment</div>
                  </footer>
                </article>
             <?php  endwhile; ?>
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

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
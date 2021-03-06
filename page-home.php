	<?php get_header(); ?>
	<!-- Insert content here -->
 <div class="flexslider">
      <ul class="slides">
        <?php $post_destacado = new WP_query(array('posts_per_page' => 5, 'post_type' => 'ofrecemos', 'meta_key'  => 'post_destacado',
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
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full-size'); ?>
            <?php else: ?>
               <a href="<?php the_permalink(); ?>"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg"> </a>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>"><p class="flex-caption"><?php the_title();?></p></a>
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
        CONSULTA HORARIOS DE CLASES Y EVENTOS
        <button class="btn-calendario"><a href="<?php echo site_url('/eventos/'); ?>">Calendario de actividades</a></button>
      </div>
        <a href="<?php echo site_url('/manifiesto/'); ?>"><div class="boton-funete-energia"></div></a>
      <div class="newleter">
        SI FUERA TÚ, DE UNA VEZ ME SUSCRIBO AL NEWSLETTER
        <form action="//wayuume.us11.list-manage.com/subscribe/post?u=7581db473f269e146f532d7a1&amp;id=7040c8b246" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <input type="text" class="input-newleter" placeholder="correo electronico" id="mce-EMAIL">
            <button class="btn-enviar" id="mc-embedded-subscribe">Enviar</button>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7581db473f269e146f532d7a1_7040c8b246" tabindex="-1" value=""></div>
                <div class="clear"></div>
        </form>
      </div>
    </div>
  </aside>
      
  <section id ="actividades1" class="actividades">
      <div class="wrapper">
          <h2>Ofrecemos</h2>
          <p>Wayuu es una experiencia de crecimiento integral. Por eso, la calidad de todos los elementos que forman un aprendizaje que transforma: el ambiente, 
              la comida, la calidad de los maestros, el acompañamiento y la organización. Nuestra vocación es el servicio a los demás.</p>

          <div class="slider-actividades">
              <div id="owl-example" class="owl-carousel">
                  <?php $eventos = new WP_query(array('posts_per_page' => 5, 'post_type' => 'ofrecemos', 'meta_key'  => 'post_intro',
                        'meta_query' => array(
                            array(
                              'key'     => 'post_intro',
                              'value'   => 1,
                              'compare' => '=',
                            ),
                          ), 

                        )); 
                      if ( $eventos->have_posts() ) : while ( $eventos->have_posts() ) : $eventos->the_post(); ?>
                        <div class="item">
                          <figure class="image-ofrecemos">
                            <?php if (has_post_thumbnail()): ?>
                                  <?php the_post_thumbnail('ofrecemos'); ?>
                            <?php else: ?>
                                      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                            <?php endif; ?>
                            <?php $terms = wp_get_post_terms( $post->ID, 'categorias-ofrecemos'); 
                                  foreach ($terms as  $categoria) { ?>
                            <div class="contenedor-categoria">
                              <a href= "<?php echo site_url('/categorias-ofrecemos/'.$categoria->slug); ?>"><?php echo $categoria->name ?> </a> 
                              
                            </div>
                           <?php  } ?>
                          </figure>
                            <h3><?php the_title();?></h3>
                            <p> <?php echo wp_trim_words(get_the_excerpt(), 12 );?></p>
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
        <h2> Suukala, Tienda y Cafetería </h2>
          <section class="tabs">
            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
            <label for="tab-1" class="tab-label-1">Favoritos</label>
            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
            <label for="tab-2" class="tab-label-2">Favoritos</label>
            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
            <label for="tab-3" class="tab-label-3">Favoritos</label>
            <div class="clear-shadow"></div>
            <div class="content">
            <?php $producto = new WP_Query( array( 'posts_per_page' => 1, 'post_type'=> 'Sukala')); 
                if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
                    <div class="content-1">
                      <figure class="image-producto">
                        <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-producto'); ?></a>
                          <?php else: ?>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                          <?php endif; ?>
                      </figure>

                      <a href="<?php the_permalink(); ?>"> <h2 class="nombre-producto"><?php the_title();?></h2> </a>
                      <p class="descript-producto"> <?php echo wp_trim_words(get_the_excerpt(), 12 );?> </p>
                    </div>
                    <?php endwhile; wp_reset_postdata(); else : ?>
                        <p><?php _e( 'lo siento' ); ?></p>
                    <?php endif; ?>
            <?php $producto = new WP_Query( array( 'posts_per_page' => 1, 'offset' => 1, 'post_type'=> 'Sukala')); 
                  if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
                  <div class="content-2">
                    <figure class="image-producto">
                       <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-producto'); ?></a>
                          <?php else: ?>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                          <?php endif; ?>
                    </figure>
                     <a href="<?php the_permalink(); ?>"><h2 class="nombre-producto"><?php the_title();?></h2> </a>
                      <p class="descript-producto"> <?php echo wp_trim_words(get_the_excerpt(), 12 );?> </p>   
                  </div>
            <?php endwhile; wp_reset_postdata(); else : ?>
                  <p><?php _e( 'lo siento' ); ?></p>
                <?php endif; ?>


            <?php $producto = new WP_Query( array( 'posts_per_page' => 1, 'offset' => 2, 'post_type'=> 'Sukala')); 
                  if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
                  <div class="content-3">
                      <figure class="image-producto">
                        <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-producto'); ?></a>
                          <?php else: ?>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                          <?php endif; ?>
                    </figure>
                      <a href="<?php the_permalink(); ?>"> <h2 class="nombre-producto"><?php the_title();?></h2> </a>
                      <p class="descript-producto"> 
                        <?php echo wp_trim_words(get_the_excerpt(), 12 );?>
                      </p>
                  </div>
             <?php endwhile; wp_reset_postdata(); else : ?>
                  <p><?php _e( 'lo siento esta enfermo' ); ?></p>
                <?php endif; ?>

              </div>
          </section>
      </div>
  </section>

  <section id="wayu-contruye" class="construye">
    <div class="wrapper">
      <h2> WAYUU SOLIDARIO </h2>
      <p>Asumimos nuestra correspondencia con la sociedad y con México, a través del apoyo en nuestra tienda y nuestras actividades a las asociaciones afines con la vocación de servicio 
      de Wayuu.
      </p>

      <?php $producto = new WP_Query( array( 'posts_per_page' => 3, 'post_type'=> 'wayu-solidario')); 
          if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
      <article class="post-page-solidario">
        <figure class="image-solidario">
          <?php if (has_post_thumbnail()): ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('ofrecemos'); ?></a>
          <?php else: ?>
              <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
          <?php endif; ?>
        </figure>
       <a href="<?php the_permalink(); ?>"> <h3><?php the_title();?></h3></a>
        <p class="solidario"><?php echo wp_trim_words(get_the_excerpt(), 20 );?></p>
        <footer class="slider-base">
          <div class="fecha-page2"> <?php the_time('M j, Y') ?> </div>
          <div class="comentarios3"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comment</div>
        </footer>
      </article>
      <?php endwhile; wp_reset_postdata(); else : ?>
        <p><?php _e( 'lo siento' ); ?></p>
      <?php endif; ?>
    </div>
            </section>

            <section id="wayu-corp" class="corp">
              <div class="wrapper">
              <h2> WAYUU CORP </h2>
              <p>Nuestra área corporativa ofrece cursos y talleres de capacitación y desarrollo de  habilidades y herramientas profesionales.</p>

                <div class="leyenda-wayu-corp">
                    <span>Tenemos instructores certificados y con registro ante la Secretaría de Educación y la Secretaría del Trabajo.<br><br>
                    En lo referente a coaching individual y de equipos, contamos con coaches certificados en diferentes metodologías.<br><br>
                    A través de una entrevista podemos acercarnos a conocer el corazón de tu empresa o tu equipo y ofrecerte 
                    un portafolio de opciones y acciones a tu medida.<br><br></span>

                   <span class="color-azul-fuerte"> COACHING INDIVIDUAL</span><br>
                    <span>Business Story Mastery.
                    EF Coaching. Happiness at Work.
                    Coaching asistido por caballos.
                    <br>
                    <br></span>

                    <span class="color-verde">COACHING GRUPAL</span><br>
                    <span>Lego Serious Play.
                    EF Coaching. Happiness at Work.
                    Coaching asistido por caballos.
                    Orquestado, integración de equipos y liderazgo a través de la música.
                    <br><br></span>
                    <span class="color-rosa">DESARROLLO DE HABILIDADES</span><br>
                </div>
               

            <div class="contenedor__corp">
                <div class="icon__circle uno">
                      <img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-lego.svg" alt="">
                    </div>
                    
                    <div class="icon__circle dos"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-caballo.svg" alt="Wayuu"></div>
                    
                    <div class="icon__circle tres"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-individual.svg" alt="Wayuu"></div>
                    
                    <div class="icon__circle cuatro"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-felicidad.svg" alt="Wayuu"></div>
                    
                    <div class="icon__circle cinco"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-grupal.svg" alt="Wayuu"></div>
                    
                    <div class="icon__circle seis"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-storytelling.svg" alt="Wayuu"></div>
                    
                    <div class="icon__circle siete"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-corporativo.svg" alt="Wayuu"></div>
                    
                    <div class="icon__circle ocho"><img src="<?php bloginfo('template_directory'); ?>/images/iconos/icono-desarrollo.svg" alt="Wayuu"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            </section>

  <section class="blog">
    <div class="wrapper">
        <h2> WAYUU BLOG </h2>
          <p> En nuestro blog te ofrecemos una mirada a los temas que te apasionan de tu desarrollo personal. <br>
              No dejes de comentarlo, en Wayuu sabemos que cada persona es un maestro y tus ideas son muy importantes para nosotros. </p>
          <?php $temp_query = $wp_query;
                  query_posts('showposts=4&cat=-26'); 
               if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article class="post-page">
                  <figure class="imagen-post-page">
                      <?php if (has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-blog'); ?></a>
                      <?php else: ?>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                      <?php endif; ?>
                 </figure>
                  <a href="<?php the_permalink(); ?>"> <h3><?php the_title();?></h3></a>
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
        <p>Wayuu busca establecer sinergias para fomentar una cultura de colaboración en la que todos los miembros de nuestra comunidad: empresas, 
            maestros, alumnos y aliados tengan mayores oportunidades de desarrollo. Entablamos  relaciones ganar-ganar con profesionales en 
            nuestras tres líneas de acción (mente, bienestar 
            y conciencia).  En Wayuu comprobamos que en la unión de dos o más mentes, la creatividad es infinita.
        </p>
  </section>
  <section class="colaboradores">
    <h2>Sinergias </h2>
    <ul class="imagenes-logotipos">
      
      <li><a href="http://escueladete.mx" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/emt.png"> </a></li>
      <li><a href="http://efcoaching.com" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ef-coaching.png"></a></li>
      <li><a href="http://todobebe.com" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/todo-bebe.png"></a></li>
      <li><a href="http://cursosytalleres.org" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/clic.png"></a></li>
      <li><a href="http://filgud.com" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/filguid.png"></a></li>
      <li><a href="http://techba.org" target="_blank"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/techba.png"></a></li>
    </ul>
  </section>
  <div class="wrapper">
	<?php get_footer(); ?>
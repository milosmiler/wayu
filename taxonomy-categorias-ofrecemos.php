<?php get_header(); ?>
	<div class="wrapper">
		<h2 class="categoria-titulo"><?php single_cat_title( '', true ) ?> </h2>
        <div class="main-single">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-single'); ?></a>
            <?php else: ?>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
            <?php endif; ?>
            <div class="contenido-articulos">
            <div class="base-categoria-red-social">
            <h2 class="titulo-blog"><?php the_title(); ?></h2>
            <div class="show-categoria"><?php the_category();?> </div>
            </div>
                <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>"><button class="btn-leyendo">Seguir leyendo</button></a>
            <footer class="footer-single">
                <ul>
                  <li><div class="footer-datos">  <?php the_author(); ?> </div></li>
                  <li><div class="tag"><?php the_tags( '', ', ', '<br />' ); ?> </div></li>
                  <li> <div class="calendario-blog"> <?php the_time('F j') ?> </div> </li>
                  <li><div class="comentario-blog"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comentarios</div></li>
                </ul>
          </footer> 
          </div>

          <?php endwhile; else: ?>
          <p><?php _e('Lo siento, no encontre nada para mostrar.'); ?></p>
          <?php endif; ?>    
        </div> 

        

<section class="main-single-right">
    <div class="search_form">
        <form action="" method="GET">
          <input type="search" id="s" name="s" placeholder="¿Que estas buscando?">
          <input type="submit" value="buscar">
        </form>
    </div>
    <div class="contenedor-post-actuales">
      <?php $terms = wp_get_post_terms( $post->ID, 'categorias-ofrecemos'); 
            foreach ($terms as  $categoria) { ?>
                    <h2> Más <?php echo $categoria->name ?> disponibles </h2>
                  <?php  } ?>
            <?php  if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="post-reciente">
          <figure class="image-reciente">
            <?php if (has_post_thumbnail()): ?>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-reciente'); ?></a>
            <?php else: ?>
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
            <?php endif; ?>
          </figure>
          <h2><?php the_title(); ?></h2>
          <div class="post-actual-fecha-coment">
            <div class="fecha-post-actual">
               <?php the_time('M j, Y') ?>
            </div>
            <div class="comentarios">// <fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comment </div>
        </div>
        </article>
        <?php  endwhile; ?>
    </div>
  </section>


    </div>
<?php get_footer(); ?>
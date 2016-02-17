	<?php get_header(); ?>
  <?php get_header(); the_post();?>
<div class="wrapper">
  <div class="main-single">
    <h2><?php the_title(); ?></h2>
       <?php if (has_post_thumbnail()): ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-single'); ?></a>
                          <?php else: ?>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                          <?php endif; ?>
      <div class="contenido-articulos">
        <div class="base-categoria-red-social">
          <aside class="social-share">
            <i>Compartir</i>
            <ul>
              <li><a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo get_the_excerpt(); ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">Facebook</a></li>
              <li><a href="http://www.twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?> - <?php echo get_the_excerpt(); ?>" onclick="window.open(this.href,'Twitter', 'toolbar=0, status=0, width=550, height=350');return false;">Twitter</a></li>
          </ul></aside>
          <div class="show-categoria"><?php the_category();?> </div>
        </div>
        <?php the_content();?>
        <footer class="footer-single">
          <ul>
          <li><div class="footer-datos">  <?php the_author(); ?> </div></li>
          <li><div class="tag"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?> </div></li>
          <li><div class="calendario-blog"> <?php the_time('F j') ?></div></li>
          <li><div class="comentario-blog"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comentarios</div></li>
          </ul>
        </footer>
      </div>
      <div class='comentarios-face'>
        <div class='comentarios-container-face'> <h4> <span class='nube'> </span> Comentarios</h4> </div>
        <div class="fb-comments" data-href="<?php the_permalink();?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
    </div>
  </div>

  <section class="main-single-right">
    <div class="search_form">
        <form action="" method="GET">
          <input type="search" id="s" name="s" placeholder="¿Que estas buscando?">
          <input type="submit" value="buscar">
        </form>
    </div>

    <div class="contenedor-post-actuales">
      <h2> Productos Sukala </h2>
      <?php $producto = new WP_Query( array( 'posts_per_page' => 5, 'post_type'=> 'sukala')); 
          if ( $producto->have_posts() ) : while ( $producto->have_posts() ) : $producto->the_post(); ?>
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
        <?php endwhile; wp_reset_postdata(); else : ?>
        <p><?php _e( 'lo siento' ); ?></p>
      <?php endif; ?>
    </div>
  </section>

    <?php get_footer(); ?>
</div>

	<?php get_header(); ?>
  <?php get_header(); the_post();?>
<div class="wrapper">
  <div class="main-single">
    <h2><?php the_title(); ?></h2>
      <?php if (has_post_thumbnail()){ ?>
          <?php the_post_thumbnail('image-single'); ?>
      <?php }else{  ?>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/imagen-grande.png">
      <?php } ?>
      <div class="contenido-articulos">
        <div class="base-categoria-red-social">
          <div class="show-categoria"><?php the_category();?> </div>
        </div>
        <?php the_content();?>
        <footer class="footer-single">
          <ul>
          <li><div class="footer-datos">  <?php the_author(); ?> </div></li>
          <li><div class="tag"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?> </div></li>
          <li><?php the_time('F j') ?></li>
          <li><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comentarios</li>
          </ul>
        </footer>
      </div>
      <div class='comentarios-face'>
        <div class='comentarios-container-face'> <h4> <span class='nube'> &#59168;</span> Comentarios</h4> </div>
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
    <h2>Categorias del blog</h2>
    <ul>
      <li>categoria 1</li>
      <li>categoria 2</li>
      <li>categoria 3</li>
      <li>categoria 4</li>
    </ul>
    <div class="contenedor-post-actuales">
      <h2> POSTS RECIENTES </h2>
      <?php $temp_query = $wp_query;
                  query_posts('showposts=4'); 
               if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="post-reciente">
          <figure class="image-reciente">
            <?php the_post_thumbnail('image-reciente'); ?>
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
    <?php get_footer(); ?>
</div>

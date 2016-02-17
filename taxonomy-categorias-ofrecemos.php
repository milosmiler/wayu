<?php get_header(); ?>
    <figure class="banner-taxonomias">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner-blog.jpg">
        <h2 class="categoria-titulo"><?php single_cat_title( '', true ) ?> </h2>
    </figure>
<div class="wrapper">
<div class="contenedor-post-actuales-taxonomi"> 
            <?php   if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <article class="post-reciente-taxonomi">
          <figure class="image-reciente-taxonomi">
            <?php if (has_post_thumbnail()): ?>
                             <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-reciente'); ?></a>
                          <?php else: ?>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/1200X856.jpg">
                          <?php endif; ?>
          </figure>
          <aside class="info-destacados">
              <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3> </a>
              <?php the_excerpt(); ?>
          </aside>

        </article>
        <?php  endwhile; ?>
        <?php wp_reset_postdata(); ?>

  <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div> 
    </div> 





        

<section class="main-single-right">
    <div class="search_form">
        <form action="" method="GET">
          <input type="search" id="s" name="s" placeholder="¿Que estas buscando?">
          <input type="submit" value="buscar">
        </form>
    </div>
    <div class="contenedor-post-actuales gris-claro">
    
                    <h2> Temas de blog </h2>
            <?php $temp_query = $wp_query;
                  query_posts('showposts=5'); ?>
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
        </article>
        <?php  endwhile; ?>
    </div>
  </section>


    </div>
<?php get_footer(); ?>
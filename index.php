	<?php get_header(); ?>
	<!-- Insert content here -->
<div class="wrapper">
	<figure class="imagen-head">
  		<img src="<?php bloginfo('template_url'); ?>/images/stageBlog.png" alt="cabecera" />
  	</figure>
  <div class="main-single">
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  		<?php the_post_thumbnail('image-single'); ?>
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
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-reciente'); ?></a> 
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

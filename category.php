<?php get_header(); ?>
	<div class="wrapper">
		<h2 class="categoria-titulo"><?php single_cat_title( '', true ) ?> </h2>
			<?php  if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article class="post-page-categoria">
                   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('image-blog'); ?></a> 
                  <h3><?php the_title();?></h3>
                  <p><?php echo wp_trim_words(get_the_excerpt(), 10 );?></p>
                  <footer class="slider-base">
                     <div class="fecha-page2"> <?php the_time('M j, Y') ?> </div>
                      <div class="comentarios2"><fb:comments-count href=<?php the_permalink(); ?>></fb:comments-count> Comment</div>
                  </footer>
                </article>
             <?php  endwhile; ?>
    </div>
<?php get_footer(); ?>
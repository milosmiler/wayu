<?php
/*
* Template name: Eventos
*/

get_header(); ?>
<div class="wrapper">
<main class="main page__eventos">
	<figure class="logo-centro">
		<img src="<?php bloginfo('template_url'); ?>/images/favicon.png" alt="Eventos Wayuu" width="100">
	</figure>
	<h2 class="titulo-evento">Eventos</h2>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	
	<?php else: ?>
	<p>No hay eventos para mostrar</p>
	<?php endif; ?>
	
</main>
</div>


<?php get_footer(); ?>
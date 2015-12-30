	<?php get_header(); ?>
    <?php get_header(); the_post();?>
	<!-- Insert content here -->
	<figure class="imagen-aviso">

		<img src="<?php bloginfo('template_url'); ?>/images/banner-aviso.jpg" alt="Wayuuu" />
	</figure>
            <div class="wrapper page-aviso">
              <?php the_content() ?>


	<?php get_footer(); ?>
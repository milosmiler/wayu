	<?php get_header(); ?>
  <?php get_header(); the_post();?>
	<!-- Insert content here -->
	<section class="wayu-nosotros">
          <div class="contendor-nosotros">
              <?php the_content();?>

              <figure class="firma">
              	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/firma.png">
              		<span class="director-nombre"> Directora </span>
              	</figure>
          </div>
            
    </section>

	<?php get_footer(); ?>
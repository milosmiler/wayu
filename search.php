<?php get_header(); global $wp_query;?>
<!-- Insert content here -->

		<h1>Resultados para "<?php echo $_GET['s']; ?>"</h1>
		
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

</div>

<?php get_footer(); ?>
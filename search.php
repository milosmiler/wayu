<?php get_header(); global $wp_query;?>
<!-- Insert content here -->

		<h1>Resultados para "<?php echo $_GET['s']; ?>"</h1>
		
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
	<?php if (in_category('videos')) { ?> <span class="play"> </span> <?php } ?>
	<h3><a href="<?php the_permalink(); ?>"><?php echo $category_name; ?></a></h3>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php endwhile; endif; ?>

	</section><!-- content_left -->
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
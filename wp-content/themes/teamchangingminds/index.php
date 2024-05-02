<?php
/**
 * The main template file.
 */

get_header();

// page header
get_template_part( 'template-parts/page-header' );

?>

<div class="wrapper">
	<div class="row content-body">
		<?php
		// Start the Loop.
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			?>
			<article class="column-third article-summary">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</article>

		<?php
		endwhile; else : endif;
		?>
	</div>
</div>

<?php get_footer(); ?>
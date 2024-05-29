<?php
/* The default page template. */

get_header();

// page header
get_template_part( 'template-parts/page-header' );

// content wrapper
echo '<div class="wrapper"><div class="column content-body active fade-bottom">';

	// Start the Loop.
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		
		the_content();

	endwhile; else : endif;

echo '</div></div>';

get_footer();

?>
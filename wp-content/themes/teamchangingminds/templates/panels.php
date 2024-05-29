<?php
/* Template Name: Full Width Panels */

get_header();

// page header
get_template_part( 'template-parts/page-header' );

echo '<div class="content active fade-bottom">';

// Start the Loop.
if ( have_posts() ) : while ( have_posts() ) : the_post();
	
	the_content();

endwhile; else : endif;

echo '</div>';

get_footer();

?>
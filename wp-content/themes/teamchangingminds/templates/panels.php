<?php
/* Template Name: Full Width Panels */

get_header();

// page header
get_template_part( 'template-parts/page-header' );

// Start the Loop.
if ( have_posts() ) : while ( have_posts() ) : the_post();
	
	the_content();

endwhile; else : endif;

get_footer();

?>
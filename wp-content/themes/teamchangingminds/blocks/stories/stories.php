<?php
/* Stories Block template. */

$args = array(
	'post_type'			=> 'story',
	'posts_per_page'	=> 10,
	'post_status' 		=> 'publish',
	'orderby' 			=> 'date',
	'order'				=> 'DSC',
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<div class="row">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$s_excerpt = get_the_excerpt();
		$postID = get_the_ID();
		$funder = get_field( 'responder', $postID );

		if ( '' != $s_excerpt ) {
			$s_excerpt = substr($s_excerpt, 0, 220);
			$result = substr($s_excerpt, 0, strrpos($s_excerpt, ' '));
		}

		echo '<div class="column-half"><div class="card story">';
		echo '<p class="card-text"><a href="' .  get_the_permalink() . '">' . $result . '... <i class="fa-light fa-circle-plus"></i></a></p>';
		echo '<p class="label">' . $funder . '</p>';
		echo '</div></div>';
	}
	echo '</div>';
}
wp_reset_postdata();

?>


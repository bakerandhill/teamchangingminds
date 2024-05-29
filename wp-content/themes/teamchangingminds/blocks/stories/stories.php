<?php
/* Stories Block template. */

// Create class attribute allowing for custom "className"
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

$args = array(
	'post_type'			=> 'story',
	'posts_per_page'	=> 10,
	'post_status' 		=> 'publish',
	'orderby' 			=> 'date',
	'order'				=> 'DSC',
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
	echo '<div class="stories row ' . esc_attr( $class_name ) . '">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$s_excerpt = get_the_excerpt();
		$postID = get_the_ID();
		$funder = get_field( 'responder', $postID );

		if ( '' != $s_excerpt ) {
			$s_excerpt = substr($s_excerpt, 0, 220);
			$result = substr($s_excerpt, 0, strrpos($s_excerpt, ' '));
		}

		echo '<div class="column-half"><a href="' .  get_the_permalink() . '" class="card story active fade-bottom">';
		echo '<p class="card-text">' . $result . '... <i class="fa-light fa-circle-plus"></i></p>';
		echo '<p class="label">' . $funder . '</p>';
		echo '</a></div>';
	}
	echo '</div>';
}
wp_reset_postdata();

?>


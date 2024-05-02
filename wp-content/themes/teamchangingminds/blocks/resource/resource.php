<?php
/* Resource  Block template. */

// Load values
$link = get_field( 'resource_link' );
$source = get_field( 'resource_source' );
$logo = get_field( 'resource_source_logo' );

echo '<div class="card resource">';

	// main link
	if ( $link ) {
		echo '<h3 class="plain"><a href="' . $link['url'] . '" class="" target="' . $link['target'] . '">' . $link['title'] . '</a></h3>';
	}
	// source
	if ( $source ) {
		echo '<div class="source">';
		if ( $logo ) {
			echo '<a href="' . $source['url'] . '" class="" target="' . $source['target'] . '">';
			echo wp_get_attachment_image( $logo, 'thumbnail', '', array( 'class' => 'logo' ) );
			echo '</a>';
		}
		echo '<p class="label"><a href="' . $source['url'] . '" class="" target="' . $source['target'] . '">' . $source['title'] . '</a></p>';
		echo '</div>';
	}

echo '</div>';

?>


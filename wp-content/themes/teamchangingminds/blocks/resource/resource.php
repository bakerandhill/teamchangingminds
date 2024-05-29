<?php
/* Resource  Block template. */

// Load values
$link = get_field( 'resource_link' );
$source = get_field( 'resource_source' );
$logo = get_field( 'resource_source_logo' );

if ( $link ) {

	echo '<a href="' . $link['url'] . '" target="' . $link['target'] . '" class="card resource active fade-bottom">';

		// main title
		echo '<h3 class="plain">' . $link['title'] . '</h3>';

		// source
		if ( $source ) {
			echo '<div class="source">';
			if ( $logo ) {
				//echo '<a href="' . $source['url'] . '" class="" target="' . $source['target'] . '">';
				echo wp_get_attachment_image( $logo, 'thumbnail', '', array( 'class' => 'logo' ) );
				//echo '</a>';
			}
			//echo '<p class="label"><a href="' . $source['url'] . '" class="" target="' . $source['target'] . '">' . $source['title'] . '</a></p>';
			echo '<p class="label">' . $source['title'] . '</p>';
			echo '</div>';
		}

echo '</a>';

}

?>


<?php
/* Statistic Block template. */

// Load values
$stat = get_field( 'stat' );
$details = get_field( 'stat_details' );

echo '<div class="card stat active fade-bottom">';

	// main number
	if ( $stat ) {
		echo '<p class="stat-callout">' . $stat . '</p>';
	}

	// details
	if ( $details ) {
		echo '<p class="stat-details">' . $details . '</p>';
	}

echo '</div>';

?>


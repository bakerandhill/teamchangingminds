<?php
/**
 * The template part for displaying the Page header
 */
?>

<header class="page-header">
	<div class="wrapper">
		<div class="row">
			<div class="column text">
			<?php
			$logo = get_field( 'header_logo' );
			$subhead = get_field( 'header_sub' );
			$button = get_field( 'header_button' );
			$feature = get_field( 'header_feature' );

			// logo
			if ( $logo ) {
				echo wp_get_attachment_image( $logo, 'full', '', array( 'class' => 'logo' ) );
			}

			// page title
			echo '<h1 class="page-title">' . get_the_title() . '</h1>';
			
			// subhead
			if ( $subhead ) {
				echo '<p class="large">' . $subhead . '</p>';
			}

			// button
			if ( $button ) {
				echo '<p class="center"><a href="' . $button['url'] . '" class="btn btn-primary" target="' . $button['target'] . '">' . $button['title'] . '</a></p>';
			}

			echo '</div>';

			// feature image
			if ( $feature ) {
				echo '<div class="column image">';
				echo wp_get_attachment_image( $feature, 'full', '', array( 'class' => 'feature' ) );
				echo '</div>';
			}

			?>
		</div>
	</div>
</header>
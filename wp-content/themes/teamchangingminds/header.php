<?php
/* The theme header file. */
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="header-site" id="header-site">
			<!-- Global Nav -->
			<div class="wrapper">
				<div class="row">
					<a href="#" aria-label="Open Nav" class="btn-nav open">
					<i class="fa-regular fa-bars"></i>
					</a>
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
						echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . get_bloginfo( 'name' ) . '" class="logo"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" width="180" height="118"></a>';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
					?>
					<nav class="nav-global">
						<a href="#" aria-label="Close Nav" class="btn-nav close">
							<i class="fas fa-times"></i>
						</a>
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary',
							'menu_class'     => 'nav nav-primary',
							'container'      => false,
							'depth'          => 1)
						); ?>
					</nav>
				</div>
			</div>
		</header>
		<main class="main-content" role="main">
			<section class="content">
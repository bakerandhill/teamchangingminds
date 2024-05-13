<?php
/* The 404 page */

get_header();

?>

<header class="page-header text">
	<div class="wrapper">
		<div class="row">
			<div class="column text">
				<h1 class="page-title">404</h1>
			</div>
		</div>
	</div>
</header>


<div class="wrapper">
	<div class="column content-body-text">

	<p>Sorry, the page you're looking for can't be found. Please <a href="<?php echo esc_url( home_url( '/' ) ); ?>">visit the homepage</a>.</p>

	</div>
</div>

<?php get_footer(); ?>
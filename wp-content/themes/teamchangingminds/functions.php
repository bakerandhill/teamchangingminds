<?php
// Team: Changing Minds functions

// Set up theme defaults
if ( ! function_exists( 'teamchangingminds_setup' ) ) :

	function teamchangingminds_setup() {
		
		// Add support for title tag
		add_theme_support( 'title-tag' );
		
		// Add support for featured image
		add_theme_support( 'post-thumbnails' );

		// Add support for a custom logo
		add_theme_support( 'custom-logo' );

		// Add nav menus
		register_nav_menus( array(
			'primary'   => esc_html__( 'Global nav links', 'teamchangingminds' ),
		) );

		// Add support for HTML5 markup
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		) );

		// Add support for responsive embedded content
		add_theme_support( 'responsive-embeds' );

	}

endif;
add_action( 'after_setup_theme', 'teamchangingminds_setup' );


// Enqueue scripts and styles
function teamchangingminds_scripts() {

	// Set version for site css and js
	$code_ver = wp_get_theme()->get( 'Version' );

	// Load font awesome
	wp_enqueue_script( 'teamchangingminds-fa', 'https://kit.fontawesome.com/0360bae9ec.js', array(), '', 'all' );
	
	
	// Check environment before loading
	if (parse_url( get_site_url(), PHP_URL_HOST ) == 'teamchangingminds.local') {
		wp_enqueue_style( 'teamchangingminds-style-main', get_template_directory_uri() . '/assets/css/main.css', array(), $code_ver, 'all' );
		wp_enqueue_script( 'teamchangingminds-js-site', get_template_directory_uri() . '/assets/js/site.js', array( 'jquery' ), $code_ver, true );
	} else {
		// production
		wp_enqueue_style( 'teamchangingminds-style-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), $code_ver, 'all' );
		wp_enqueue_script( 'teamchangingminds-js-site', get_template_directory_uri() . '/assets/js/site.min.js', array( 'jquery' ), $code_ver, true );
	}
	
}
add_action( 'wp_enqueue_scripts', 'teamchangingminds_scripts' );

// Create widgets
require_once('inc/widgets.php');

// Create blocks
function teamchangingminds_register_blocks() {
	
	// support block
	register_block_type( __DIR__ . '/blocks/resource' );

	// statistic block
	register_block_type( __DIR__ . '/blocks/statistic' );

	// stories block
	register_block_type( __DIR__ . '/blocks/stories' );

}
add_action( 'init', 'teamchangingminds_register_blocks' );

// Create Custom Post Types
require_once('inc/custom-post-types.php');

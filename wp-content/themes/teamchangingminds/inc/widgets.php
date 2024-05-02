<?php

// Register widgets and sidebars

function teamchangingminds_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Crisis Message', 'teamchangingminds' ),
		'id'            => 'widget-crisis',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Subscribe', 'teamchangingminds' ),
		'id'            => 'widget-subscribe',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Hashtag', 'teamchangingminds' ),
		'id'            => 'widget-hashtag',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation', 'teamchangingminds' ),
		'id'            => 'widget-footer-nav',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Copyright', 'teamchangingminds' ),
		'id'            => 'widget-copyright',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'teamchangingminds_widgets_init' );

?>
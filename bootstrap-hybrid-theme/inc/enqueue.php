<?php
/**
 * Styles und Scripts einbinden.
 *
 * @package Bootstrap_Hybrid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Frontend-Assets.
 */
function bootstrap_hybrid_scripts() {
	wp_enqueue_style(
		'bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		array(),
		'5.3.3'
	);

	wp_enqueue_style(
		'bootstrap-hybrid',
		get_stylesheet_uri(),
		array( 'bootstrap' ),
		BOOTSTRAP_HYBRID_VERSION
	);

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
		'bootstrap-bundle',
		get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
		array( 'jquery' ),
		'5.3.3',
		true
	);

	wp_enqueue_script(
		'bootstrap-hybrid',
		get_template_directory_uri() . '/assets/js/theme.js',
		array( 'jquery', 'bootstrap-bundle' ),
		BOOTSTRAP_HYBRID_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootstrap_hybrid_scripts' );

/**
 * Block-Editor-Styles (Bootstrap im Editor sichtbar machen).
 */
function bootstrap_hybrid_editor_assets() {
	wp_enqueue_style(
		'bootstrap-hybrid-editor-bootstrap',
		get_template_directory_uri() . '/assets/css/bootstrap.min.css',
		array(),
		'5.3.3'
	);
}
add_action( 'enqueue_block_editor_assets', 'bootstrap_hybrid_editor_assets' );

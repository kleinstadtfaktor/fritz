<?php
/**
 * Theme Setup.
 *
 * @package Bootstrap_Hybrid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Grundeinstellungen des Themes.
 */
function bootstrap_hybrid_setup() {
	load_theme_textdomain( 'bootstrap-hybrid', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Block-Editor-Features.
	add_theme_support( 'align-wide' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_editor_style( 'assets/css/editor.css' );

	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 64,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Hauptmenü (Navbar)', 'bootstrap-hybrid' ),
			'footer'  => __( 'Footermenü', 'bootstrap-hybrid' ),
		)
	);
}
add_action( 'after_setup_theme', 'bootstrap_hybrid_setup' );

/**
 * Content-Breite.
 */
function bootstrap_hybrid_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bootstrap_hybrid_content_width', 800 );
}
add_action( 'after_setup_theme', 'bootstrap_hybrid_content_width', 0 );

/**
 * Widget-Bereiche.
 */
function bootstrap_hybrid_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'bootstrap-hybrid' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Widgets für die Sidebar.', 'bootstrap-hybrid' ),
			'before_widget' => '<div id="%1$s" class="widget card mb-4 %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="card-header"><h2 class="widget-title h6 mb-0">',
			'after_title'   => '</h2></div><div class="card-body">',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'bootstrap-hybrid' ),
			'id'            => 'footer-1',
			'description'   => __( 'Widgets für den Footer.', 'bootstrap-hybrid' ),
			'before_widget' => '<div id="%1$s" class="col-md-4 widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title h5">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bootstrap_hybrid_widgets_init' );

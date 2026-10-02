<?php
/**
 * Block-Editor-Erweiterungen.
 *
 * @package Bootstrap_Hybrid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Eigene Block-Kategorien registrieren.
 *
 * @param array                   $categories Vorhandene Kategorien.
 * @param WP_Block_Editor_Context $context    Editor-Kontext.
 * @return array
 */
function bootstrap_hybrid_block_categories( $categories, $context ) {
	if ( ! empty( $context->post ) ) {
		$categories[] = array(
			'slug'  => 'bootstrap-hybrid',
			'title' => __( 'Bootstrap Hybrid', 'bootstrap-hybrid' ),
		);
	}
	return $categories;
}
add_filter( 'block_categories_all', 'bootstrap_hybrid_block_categories', 10, 2 );

<?php
/**
 * Template-Helper.
 *
 * @package Bootstrap_Hybrid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'bootstrap_hybrid_nav_menu_fallback' ) ) {
	/**
	 * Fallback, wenn kein Menü gesetzt ist (Seiten auflisten).
	 */
	function bootstrap_hybrid_nav_menu_fallback() {
		echo '<ul class="navbar-nav ms-auto">';
		wp_list_pages(
			array(
				'title_li' => '',
				'depth'    => 1,
			)
		);
		echo '</ul>';
	}
}

if ( ! function_exists( 'bootstrap_hybrid_entry_footer' ) ) {
	/**
	 * Meta-Zeile unter Beiträgen (Kategorien, Tags).
	 */
	function bootstrap_hybrid_entry_footer() {
		$categories = get_the_category_list( ', ' );
		$tags       = get_the_tag_list( '', ', ' );

		echo '<footer class="entry-footer mt-4 small text-muted">';

		if ( $categories ) {
			printf(
				/* translators: %s: Kategorien */
				esc_html__( 'Kategorien: %s', 'bootstrap-hybrid' ),
				wp_kses_post( $categories )
			);
			echo '<br>';
		}

		if ( $tags ) {
			printf(
				/* translators: %s: Tags */
				esc_html__( 'Tags: %s', 'bootstrap-hybrid' ),
				wp_kses_post( $tags )
			);
			echo '<br>';
		}

		echo '</footer>';
	}
}

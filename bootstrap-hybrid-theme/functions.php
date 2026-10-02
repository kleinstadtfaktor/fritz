<?php
/**
 * Bootstrap Hybrid Theme – Funktionen
 *
 * @package Bootstrap_Hybrid
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BOOTSTRAP_HYBRID_VERSION', '1.0.0' );

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/blocks.php';
require get_template_directory() . '/inc/template-tags.php';

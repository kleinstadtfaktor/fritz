<?php
/**
 * Sidebar.
 *
 * @package Bootstrap_Hybrid
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside class="col-lg-4">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

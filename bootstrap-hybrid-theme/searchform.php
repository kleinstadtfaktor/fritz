<?php
/**
 * Suchformular (Bootstrap-Style).
 *
 * @package Bootstrap_Hybrid
 */

$unique_id = wp_unique_id( 'search-' );
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="visually-hidden" for="<?php echo esc_attr( $unique_id ); ?>">
		<?php esc_html_e( 'Suche nach:', 'bootstrap-hybrid' ); ?>
	</label>
	<div class="input-group">
		<input type="search" class="form-control" id="<?php echo esc_attr( $unique_id ); ?>" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Suchen …', 'bootstrap-hybrid' ); ?>">
		<button class="btn btn-primary" type="submit"><?php esc_html_e( 'Suchen', 'bootstrap-hybrid' ); ?></button>
	</div>
</form>

<?php
/**
 * 404 – Seite nicht gefunden.
 *
 * @package Bootstrap_Hybrid
 */

get_header();
?>
<div class="container text-center py-5">
	<h1 class="display-1">404</h1>
	<p class="lead"><?php esc_html_e( 'Diese Seite konnte leider nicht gefunden werden.', 'bootstrap-hybrid' ); ?></p>
	<?php get_search_form(); ?>
	<a class="btn btn-primary mt-3" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<?php esc_html_e( 'Zur Startseite', 'bootstrap-hybrid' ); ?>
	</a>
</div>
<?php
get_footer();

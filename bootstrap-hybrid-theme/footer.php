<?php
/**
 * Footer.
 *
 * @package Bootstrap_Hybrid
 */
?>
</main><!-- #content -->

<footer class="site-footer bg-dark text-light py-5 mt-auto">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mb-3 mb-md-0">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="row">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php else : ?>
					<p class="mb-0 h5"><?php bloginfo( 'name' ); ?></p>
					<p class="mb-0 small"><?php bloginfo( 'description' ); ?></p>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'container'      => false,
							'menu_class'     => 'list-unstyled mb-0',
							'depth'          => 1,
						)
					);
				}
				?>
			</div>
		</div>
		<hr class="border-secondary my-4">
		<p class="small mb-0 text-secondary">
			&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?>
			<a class="text-light" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			&middot;
			<?php
			printf(
				/* translators: %s: WordPress */
				esc_html__( 'Powered by %s', 'bootstrap-hybrid' ),
				'<a class="text-light" href="https://wordpress.org/">WordPress</a>'
			);
			?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

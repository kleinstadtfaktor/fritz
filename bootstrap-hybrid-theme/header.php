<?php
/**
 * Header.
 *
 * @package Bootstrap_Hybrid
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="visually-hidden-focusable" href="#content"><?php esc_html_e( 'Zum Inhalt springen', 'bootstrap-hybrid' ); ?></a>

<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="<?php esc_attr_e( 'Hauptnavigation', 'bootstrap-hybrid' ); ?>">
	<div class="container">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} else {
			printf(
				'<a class="navbar-brand" href="%s">%s</a>',
				esc_url( home_url( '/' ) ),
				esc_html( get_bloginfo( 'name' ) )
			);
		}
		?>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Menü umschalten', 'bootstrap-hybrid' ); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="primary-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'navbar-nav ms-auto',
					'fallback_cb'    => 'bootstrap_hybrid_nav_menu_fallback',
					'depth'          => 2,
				)
			);
			?>
		</div>
	</div>
</nav>

<main id="content" class="site-main py-5">

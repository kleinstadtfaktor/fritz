<?php
/**
 * Suchergebnisse.
 *
 * @package Bootstrap_Hybrid
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<header class="mb-4">
				<h1 class="h2">
					<?php
					printf(
						/* translators: %s: Suchbegriff */
						esc_html__( 'Suchergebnisse für: %s', 'bootstrap-hybrid' ),
						'<span class="text-secondary">' . esc_html( get_search_query() ) . '</span>'
					);
					?>
				</h1>
			</header>

			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'card mb-4' ); ?>>
						<div class="card-body">
							<h2 class="card-title h4">
								<a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="card-text"><?php echo esc_html( get_the_excerpt() ); ?></p>
						</div>
					</article>
					<?php
				endwhile;
				the_posts_pagination(
					array(
						'prev_text' => '&laquo;',
						'next_text' => '&raquo;',
					)
				);
				?>
			<?php else : ?>
				<div class="alert alert-warning">
					<?php esc_html_e( 'Keine Treffer. Bitte versuche es mit anderen Begriffen.', 'bootstrap-hybrid' ); ?>
				</div>
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();

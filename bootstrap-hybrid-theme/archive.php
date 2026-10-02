<?php
/**
 * Archiv (Kategorien, Tags, Datum, Autor).
 *
 * @package Bootstrap_Hybrid
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<header class="mb-4">
				<?php the_archive_title( '<h1 class="h2">', '</h1>' ); ?>
				<?php the_archive_description( '<div class="text-muted">', '</div>' ); ?>
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
						<div class="card-footer text-muted small"><?php echo esc_html( get_the_date() ); ?></div>
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
				<div class="alert alert-info">
					<?php esc_html_e( 'Keine Inhalte gefunden.', 'bootstrap-hybrid' ); ?>
				</div>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();

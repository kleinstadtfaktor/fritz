<?php
/**
 * Haupttemplate (Fallback für alle Views).
 *
 * @package Bootstrap_Hybrid
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php if ( have_posts() ) : ?>
				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header class="mb-4">
						<h1 class="h2"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<div class="row">
					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<div class="col-md-6 mb-4">
							<article <?php post_class( 'card h-100' ); ?>>
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'medium_large', array( 'class' => 'card-img-top img-fluid' ) ); ?>
									</a>
								<?php endif; ?>
								<div class="card-body">
									<h2 class="card-title h4">
										<a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>
									<p class="card-text"><?php echo esc_html( get_the_excerpt() ); ?></p>
									<a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">
										<?php esc_html_e( 'Weiterlesen', 'bootstrap-hybrid' ); ?>
									</a>
								</div>
								<div class="card-footer text-muted small">
									<?php
									printf(
										/* translators: %s: Autor */
										esc_html__( 'Von %s', 'bootstrap-hybrid' ),
										esc_html( get_the_author() )
									);
									?>
									&middot; <?php echo esc_html( get_the_date() ); ?>
								</div>
							</article>
						</div>
						<?php
					endwhile;
					?>
				</div>

				<?php
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
				<?php get_search_form(); ?>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();

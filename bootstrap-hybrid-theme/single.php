<?php
/**
 * Einzelner Beitrag.
 *
 * @package Bootstrap_Hybrid
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<header class="mb-4">
						<h1><?php the_title(); ?></h1>
						<p class="text-muted small">
							<?php
							printf(
								/* translators: %s: Autor */
								esc_html__( 'Von %s', 'bootstrap-hybrid' ),
								esc_html( get_the_author() )
							);
							?>
							&middot; <?php echo esc_html( get_the_date() ); ?>
						</p>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid rounded mb-3' ) ); ?>
						<?php endif; ?>
					</header>

					<div class="entry-content">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<nav class="my-3">',
								'after'  => '</nav>',
							)
						);
						?>
					</div>

					<?php bootstrap_hybrid_entry_footer(); ?>
				</article>

				<?php
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				?>
				<?php
			endwhile;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();

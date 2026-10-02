<?php
/**
 * Statische Seite.
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
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</div>
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

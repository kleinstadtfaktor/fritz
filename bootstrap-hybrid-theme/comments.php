<?php
/**
 * Kommentare.
 *
 * @package Bootstrap_Hybrid
 */

if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area my-5">
	<?php if ( have_comments() ) : ?>
		<h2 class="h4 mb-3">
			<?php
			printf(
				/* translators: %s: Anzahl Kommentare */
				esc_html( _n( '%s Kommentar', '%s Kommentare', get_comments_number(), 'bootstrap-hybrid' ) ),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>

		<ol class="comment-list list-unstyled">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 48,
				)
			);
			?>
		</ol>

		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="text-muted"><?php esc_html_e( 'Kommentare sind geschlossen.', 'bootstrap-hybrid' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_form'         => 'comment-form',
			'class_submit'       => 'btn btn-primary',
			'comment_notes_before' => '<p class="small text-muted">' . esc_html__( 'Deine E-Mail-Adresse wird nicht veröffentlicht.', 'bootstrap-hybrid' ) . '</p>',
		)
	);
	?>
</div>

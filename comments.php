<?php
/**
 * The template for displaying comments.
 *
 * @package RDS_Smarty
 */

if ( post_password_required() ) {
	return;
}
?>
<section class="rds-comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="rds-section-title">
			<?php
			printf(
				esc_html( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'rds-smarty' ) ),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				)
			);
			?>
		</ol>

		<?php
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
			the_comments_navigation();
		}
		?>
	<?php endif; ?>

	<?php
	if ( comments_open() ) {
		comment_form();
	}
	?>
</section>

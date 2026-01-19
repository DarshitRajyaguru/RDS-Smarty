<?php
/**
 * Single post content template.
 *
 * @package RDS_Smarty
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'rds-card' ); ?>>
	<header>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="rds-entry-thumb">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>
		<?php the_title( '<h1 class="rds-section-title">', '</h1>' ); ?>
		<p><?php echo esc_html( get_the_date() ); ?></p>
	</header>
	<div>
		<?php the_content(); ?>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rds-smarty' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
	<?php the_tags( '<p class="rds-tags">', ', ', '</p>' ); ?>
</article>

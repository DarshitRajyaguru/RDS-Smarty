<?php
/**
 * Default content template.
 *
 * @package RDS_Smarty
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'rds-card rds-reveal' ); ?>>
	<header>
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="rds-entry-thumb">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>
		<?php endif; ?>
		<?php the_title( '<h2 class="rds-section-title">', '</h2>' ); ?>
		<p><?php echo esc_html( get_the_date() ); ?></p>
	</header>
	<div>
		<?php the_excerpt(); ?>
	</div>
	<a class="rds-btn rds-btn-outline" href="<?php the_permalink(); ?>">
		<?php esc_html_e( 'Read more', 'rds-smarty' ); ?>
	</a>
</article>

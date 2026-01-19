<?php
/**
 * Page content template.
 *
 * @package RDS_Smarty
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'rds-card' ); ?>>
	<header>
		<?php the_title( '<h1 class="rds-section-title">', '</h1>' ); ?>
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
</article>

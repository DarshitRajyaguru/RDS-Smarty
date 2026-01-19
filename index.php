<?php
/**
 * The main template file.
 *
 * @package RDS_Smarty
 */

get_header();
?>
<main id="primary" class="rds-content">
	<div class="rds-container rds-layout">
		<div>
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;

				the_posts_pagination();
				?>
			<?php else : ?>
				<p><?php esc_html_e( 'No posts found.', 'rds-smarty' ); ?></p>
			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php
get_footer();

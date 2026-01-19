<?php
/**
 * Single post template.
 *
 * @package RDS_Smarty
 */

get_header();
?>
<main id="primary" class="rds-content">
	<div class="rds-container rds-layout">
		<div>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php
get_footer();

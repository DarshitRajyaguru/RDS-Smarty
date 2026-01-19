<?php
/**
 * Page template.
 *
 * @package RDS_Smarty
 */

get_header();
?>
<main id="primary" class="rds-content">
	<div class="rds-container">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		endwhile;
		?>
	</div>
</main>
<?php
get_footer();

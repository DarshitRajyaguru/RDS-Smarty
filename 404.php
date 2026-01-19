<?php
/**
 * 404 template.
 *
 * @package RDS_Smarty
 */

get_header();
?>
<main id="primary" class="rds-content">
	<div class="rds-container">
		<section class="rds-card">
			<h1 class="rds-section-title"><?php esc_html_e( 'Page not found', 'rds-smarty' ); ?></h1>
			<p><?php esc_html_e( 'Sorry, we could not find the page you are looking for.', 'rds-smarty' ); ?></p>
			<a class="rds-btn rds-btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php esc_html_e( 'Back to home', 'rds-smarty' ); ?>
			</a>
		</section>
	</div>
</main>
<?php
get_footer();


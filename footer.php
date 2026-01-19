<?php
/**
 * The footer for RDS Smarty.
 *
 * @package RDS_Smarty
 */
?>
<footer class="rds-footer">
	<div class="rds-container">
		<div class="rds-grid">
			<div>
				<h3 class="rds-section-title"><?php bloginfo( 'name' ); ?></h3>
				<p><?php bloginfo( 'description' ); ?></p>
			</div>
			<div>
				<h4><?php esc_html_e( 'Explore', 'rds-smarty' ); ?></h4>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'fallback_cb'    => '__return_false',
						'menu_class'     => '',
					)
				);
				?>
			</div>
			<div>
				<h4><?php esc_html_e( 'Connect', 'rds-smarty' ); ?></h4>
				<p><?php esc_html_e( 'Build modern stores, tech landing pages, and service sites with confidence.', 'rds-smarty' ); ?></p>
			</div>
		</div>
		<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

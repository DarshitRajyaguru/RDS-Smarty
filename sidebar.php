<?php
/**
 * Sidebar template.
 *
 * @package RDS_Smarty
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside class="rds-sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'rds-smarty' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php
/**
 * The header for RDS Smarty.
 *
 * @package RDS_Smarty
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="rds-skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'rds-smarty' ); ?></a>

<header class="rds-site-header">
	<div class="rds-container rds-header-inner">
		<div class="rds-brand">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo( 'name' ); ?>
				</a>
			<?php endif; ?>
		</div>
		<nav class="rds-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'rds-smarty' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'fallback_cb'    => '__return_false',
					'menu_class'     => '',
				)
			);
			?>
		</nav>
	</div>
</header>

<?php
/**
 * RDS Smarty theme functions.
 *
 * @package RDS_Smarty
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'rds_smarty_setup' ) ) {
	function rds_smarty_setup() {
		load_theme_textdomain( 'rds-smarty', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array( 'height' => 40, 'width' => 160, 'flex-height' => true ) );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'woocommerce' );
		add_theme_support(
			'custom-header',
			array(
				'width'       => 1600,
				'height'      => 400,
				'flex-height' => true,
				'header-text' => false,
			)
		);
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'e6ebf4',
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'rds-smarty' ),
				'footer'  => __( 'Footer Menu', 'rds-smarty' ),
			)
		);

		add_editor_style( 'assets/css/editor.css' );
	}
}
add_action( 'after_setup_theme', 'rds_smarty_setup' );

function rds_smarty_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'rds-smarty-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Sora:wght@400;600;700&display=swap', array(), null );
	wp_enqueue_style( 'rds-smarty-style', get_stylesheet_uri(), array( 'rds-smarty-fonts' ), $theme_version );
	wp_enqueue_script( 'rds-smarty-main', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rds_smarty_enqueue_assets' );

function rds_smarty_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'rds-smarty' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here.', 'rds-smarty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'rds_smarty_widgets_init' );

function rds_smarty_content_width() {
	$GLOBALS['content_width'] = 1140;
}
add_action( 'after_setup_theme', 'rds_smarty_content_width', 0 );

function rds_smarty_register_block_assets() {
	if ( function_exists( 'register_block_style' ) ) {
		register_block_style(
			'core/button',
			array(
				'name'  => 'rds-gradient',
				'label' => __( 'RDS Gradient', 'rds-smarty' ),
			)
		);
	}

	if ( function_exists( 'register_block_pattern' ) ) {
		register_block_pattern(
			'rds-smarty/hero-callout',
			array(
				'title'       => __( 'Hero Callout', 'rds-smarty' ),
				'description' => __( 'A centered hero section with a headline, text, and button.', 'rds-smarty' ),
				'content'     => '<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">Build bold pages with RDS Smarty</h2><!-- /wp:heading --><!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Launch tech, store, and service sites with fast, flexible sections.</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-rds-gradient"} --><div class="wp-block-button is-style-rds-gradient"><a class="wp-block-button__link wp-element-button">Get Started</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
				'categories'  => array( 'call-to-action' ),
			)
		);
	}
}
add_action( 'init', 'rds_smarty_register_block_assets' );

<?php
/**
 * Front page template.
 *
 * @package RDS_Smarty
 */

get_header();
?>
<main id="primary">
	<section class="rds-hero">
		<div class="rds-container rds-hero-grid">
			<div class="rds-reveal">
				<span class="rds-chip"><?php esc_html_e( 'Built for tech, commerce, and daily business sites', 'rds-smarty' ); ?></span>
				<h1><?php esc_html_e( 'Launch bold, fast, and conversion-ready websites.', 'rds-smarty' ); ?></h1>
				<p><?php esc_html_e( 'RDS Smarty blends Astra-like speed with a fresh tech-forward palette, flexible layouts, and material-inspired cards.', 'rds-smarty' ); ?></p>
				<div class="rds-hero-actions">
					<a class="rds-btn rds-btn-primary" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
						<?php esc_html_e( 'Start a Project', 'rds-smarty' ); ?>
					</a>
					<a class="rds-btn rds-btn-outline" href="<?php echo esc_url( home_url( '/services' ) ); ?>">
						<?php esc_html_e( 'Explore Services', 'rds-smarty' ); ?>
					</a>
				</div>
			</div>
			<div class="rds-card rds-reveal">
				<h2><?php esc_html_e( 'Theme highlights', 'rds-smarty' ); ?></h2>
				<ul>
					<li><?php esc_html_e( 'Optimized layout grid for tech, store, and startup pages', 'rds-smarty' ); ?></li>
					<li><?php esc_html_e( 'Conversion-friendly hero, features, and CTA sections', 'rds-smarty' ); ?></li>
					<li><?php esc_html_e( 'Material-inspired surfaces with gentle motion effects', 'rds-smarty' ); ?></li>
					<li><?php esc_html_e( 'WooCommerce-ready shop styling basics', 'rds-smarty' ); ?></li>
				</ul>
			</div>
		</div>
		<div class="rds-hero-divider" aria-hidden="true">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/wave-divider.svg' ); ?>" alt="">
		</div>
	</section>

	<section class="rds-section">
		<div class="rds-container">
			<div class="rds-highlight rds-reveal">
				<div class="rds-card">
					<h3><?php esc_html_e( 'Technology', 'rds-smarty' ); ?></h3>
					<p><?php esc_html_e( 'Launch SaaS pages, AI startups, and agency portfolios with clear information hierarchy.', 'rds-smarty' ); ?></p>
				</div>
				<div class="rds-card">
					<h3><?php esc_html_e( 'E-commerce', 'rds-smarty' ); ?></h3>
					<p><?php esc_html_e( 'Showcase products, collections, and featured deals with grid-first layouts.', 'rds-smarty' ); ?></p>
				</div>
				<div class="rds-card">
					<h3><?php esc_html_e( 'Stores & Services', 'rds-smarty' ); ?></h3>
					<p><?php esc_html_e( 'Create appointment, local store, or service brand pages with confidence.', 'rds-smarty' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="rds-section">
		<div class="rds-container">
			<h2 class="rds-section-title"><?php esc_html_e( 'Layouts made for everyday website builds', 'rds-smarty' ); ?></h2>
			<p><?php esc_html_e( 'Use the flexible section system to build landing pages, service hubs, portfolios, and product showcases.', 'rds-smarty' ); ?></p>
			<div class="rds-grid rds-reveal">
				<div class="rds-card">
					<h3><?php esc_html_e( 'Modular sections', 'rds-smarty' ); ?></h3>
					<p><?php esc_html_e( 'Combine hero, feature grids, testimonials, and pricing blocks with consistent rhythm.', 'rds-smarty' ); ?></p>
				</div>
				<div class="rds-card">
					<h3><?php esc_html_e( 'Motion ready', 'rds-smarty' ); ?></h3>
					<p><?php esc_html_e( 'Reveal effects and subtle hover states keep interfaces lively without slowing down.', 'rds-smarty' ); ?></p>
				</div>
				<div class="rds-card">
					<h3><?php esc_html_e( 'Material surfaces', 'rds-smarty' ); ?></h3>
					<p><?php esc_html_e( 'Elevated cards and crisp borders create depth for products and highlights.', 'rds-smarty' ); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="rds-section">
		<div class="rds-container">
			<h2 class="rds-section-title"><?php esc_html_e( 'Frequently asked questions', 'rds-smarty' ); ?></h2>
			<p><?php esc_html_e( 'Quick answers to help you launch and customize your site faster.', 'rds-smarty' ); ?></p>
			<div class="rds-faq rds-reveal">
				<details>
					<summary><?php esc_html_e( 'Is RDS Smarty compatible with WooCommerce?', 'rds-smarty' ); ?></summary>
					<p><?php esc_html_e( 'Yes. The theme includes WooCommerce support and styling-ready layouts.', 'rds-smarty' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Can I use it for service businesses and stores?', 'rds-smarty' ); ?></summary>
					<p><?php esc_html_e( 'Absolutely. The layout grid is designed for services, local stores, and digital products.', 'rds-smarty' ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Does it work with the block editor?', 'rds-smarty' ); ?></summary>
					<p><?php esc_html_e( 'Yes. It includes editor styles and wide alignment support for blocks.', 'rds-smarty' ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="rds-section">
		<div class="rds-container rds-contact-grid">
			<div class="rds-contact-info rds-card rds-reveal">
				<h2 class="rds-section-title"><?php esc_html_e( 'Contact us', 'rds-smarty' ); ?></h2>
				<p><?php esc_html_e( 'Let us know about your next project. We respond within 24 hours.', 'rds-smarty' ); ?></p>
				<div>
					<strong><?php esc_html_e( 'Address', 'rds-smarty' ); ?></strong>
					<p><?php esc_html_e( '404 Digital Avenue, Ahmedabad, India', 'rds-smarty' ); ?></p>
				</div>
				<div>
					<strong><?php esc_html_e( 'Phone', 'rds-smarty' ); ?></strong>
					<p><a href="tel:+911234567890">+91 12345 67890</a></p>
				</div>
				<div>
					<strong><?php esc_html_e( 'Email', 'rds-smarty' ); ?></strong>
					<p><a href="mailto:hello@example.com">hello@example.com</a></p>
				</div>
				<div>
					<strong><?php esc_html_e( 'Social', 'rds-smarty' ); ?></strong>
					<div class="rds-social" aria-label="<?php esc_attr_e( 'Social links', 'rds-smarty' ); ?>">
						<a href="https://github.com/" rel="noreferrer" aria-label="<?php esc_attr_e( 'GitHub', 'rds-smarty' ); ?>">
							<svg viewBox="0 0 24 24" role="img" aria-hidden="true">
								<path d="M12 2C6.48 2 2 6.58 2 12.26c0 4.5 2.87 8.32 6.84 9.67.5.1.68-.22.68-.48v-1.7c-2.78.62-3.36-1.2-3.36-1.2-.45-1.17-1.1-1.48-1.1-1.48-.9-.64.07-.63.07-.63 1 .07 1.52 1.05 1.52 1.05.9 1.57 2.36 1.12 2.94.86.1-.67.35-1.12.64-1.38-2.22-.26-4.56-1.15-4.56-5.12 0-1.13.39-2.06 1.03-2.78-.1-.26-.45-1.33.1-2.78 0 0 .84-.27 2.75 1.05a9.2 9.2 0 0 1 5 0c1.9-1.32 2.74-1.05 2.74-1.05.55 1.45.2 2.52.1 2.78.64.72 1.03 1.65 1.03 2.78 0 3.98-2.35 4.86-4.58 5.11.36.33.68.98.68 1.98v2.94c0 .26.18.58.69.48 3.96-1.35 6.83-5.17 6.83-9.67C22 6.58 17.52 2 12 2z"/>
							</svg>
						</a>
						<a href="https://wordpress.org/" rel="noreferrer" aria-label="<?php esc_attr_e( 'WordPress', 'rds-smarty' ); ?>">
							<svg viewBox="0 0 32 32" role="img" aria-hidden="true">
								<path d="M16 0C7.164 0 0 7.163 0 16c0 8.837 7.164 16 16 16 8.837 0 16-7.163 16-16C32 7.163 24.837 0 16 0zm11.002 9.198c.2.617.36 1.25.474 1.9.112.652.17 1.32.17 2.004 0 2.666-.588 5.308-1.76 7.92-1.174 2.612-2.765 4.83-4.775 6.66-.036.034-.072.064-.108.096l-3.37-9.766c.698-1.1 1.05-2.215 1.05-3.348 0-.546-.072-1.134-.214-1.764-.142-.632-.324-1.29-.546-1.98l-.71-2.226c.246-.04.49-.094.73-.16.24-.066.45-.1.634-.1.456 0 .684-.17.684-.51 0-.25-.178-.4-.532-.4-.004 0-.12.01-.35.028-.232.02-.514.03-.85.03-.31 0-.674-.012-1.092-.034-.418-.024-.83-.036-1.236-.036-.144 0-.33.006-.558.016-.228.01-.414.016-.558.016-.16 0-.364-.004-.614-.012-.25-.008-.514-.014-.792-.014-.47 0-.71.154-.71.46 0 .11.044.21.132.302.086.092.204.14.35.14.148 0 .34.006.574.016.234.01.458.02.672.03l1.3 3.56-1.82 5.28-3.02-8.84c.246-.04.49-.094.73-.16.24-.066.45-.1.634-.1.456 0 .684-.17.684-.51 0-.25-.178-.4-.532-.4-.004 0-.12.01-.35.028-.232.02-.514.03-.85.03-.31 0-.674-.012-1.092-.034-.418-.024-.83-.036-1.236-.036-.144 0-.33.006-.558.016-.228.01-.414.016-.558.016-.16 0-.364-.004-.614-.012-.25-.008-.514-.014-.792-.014-.47 0-.71.154-.71.46 0 .11.044.21.132.302.086.092.204.14.35.14.148 0 .34.006.574.016.234.01.458.02.672.03l1.22 3.34-1.72 5.03-2.86-8.37c.246-.04.49-.094.73-.16.24-.066.45-.1.634-.1.456 0 .684-.17.684-.51 0-.25-.178-.4-.532-.4-.004 0-.12.01-.35.028-.232.02-.514.03-.85.03-.31 0-.674-.012-1.092-.034-.418-.024-.83-.036-1.236-.036-.144 0-.33.006-.558.016-.228.01-.414.016-.558.016-.33 0-.708-.01-1.13-.028-.422-.02-.736-.028-.946-.028-.32 0-.5.142-.5.426 0 .11.04.21.124.302.082.092.196.14.34.14.268 0 .556.036.864.11l3.1 8.504-1.74 5.05c-1.04-1.4-1.85-2.95-2.43-4.64-.58-1.69-.87-3.44-.87-5.25 0-2.78.68-5.4 2.05-7.86C7.56 5.69 9.44 4.1 11.7 3c.62-.3 1.27-.55 1.95-.74 1.88-.54 3.8-.63 5.75-.26 1.96.37 3.68 1.13 5.14 2.3 1.46 1.17 2.6 2.65 3.42 4.42zM16 30.2c-1.2 0-2.36-.17-3.48-.5l3.7-10.72 3.8 11.02c-.04.01-.08.02-.12.03-1.18.31-2.4.47-3.66.47zm4.8-2.05c.74-.44 1.44-.95 2.1-1.52 1.6-1.4 2.88-3.08 3.84-5.04.96-1.96 1.44-4.02 1.44-6.18 0-1.3-.18-2.56-.54-3.8-.36-1.24-.9-2.4-1.62-3.5.2 1.2.06 2.51-.4 3.92-.46 1.4-1.08 2.84-1.86 4.32l-2.96 8.9z"/>
							</svg>
						</a>
						<a href="https://x.com/" rel="noreferrer" aria-label="<?php esc_attr_e( 'X', 'rds-smarty' ); ?>">
							<svg viewBox="0 0 24 24" role="img" aria-hidden="true">
								<path d="M18.9 3h2.7l-6 6.86L22 21h-5.1l-4-5.22L8.2 21H5.5l6.4-7.34L2 3h5.2l3.6 4.78L14.9 3Zm-1 16.3h1.5L6.9 4.6H5.3l12.6 14.7Z"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="rds-card rds-reveal">
				<h3 class="rds-section-title"><?php esc_html_e( 'Send a message', 'rds-smarty' ); ?></h3>
				<form class="rds-form" action="#" method="post">
					<div class="rds-form-row">
						<label class="rds-form-field">
							<span><?php esc_html_e( 'First name', 'rds-smarty' ); ?></span>
							<input type="text" name="first_name" required>
						</label>
						<label class="rds-form-field">
							<span><?php esc_html_e( 'Last name', 'rds-smarty' ); ?></span>
							<input type="text" name="last_name" required>
						</label>
					</div>
					<label class="rds-form-field">
						<span><?php esc_html_e( 'Email', 'rds-smarty' ); ?></span>
						<input type="email" name="email" required>
					</label>
					<label class="rds-form-field">
						<span><?php esc_html_e( 'Phone number', 'rds-smarty' ); ?></span>
						<input type="tel" name="phone">
					</label>
					<label class="rds-form-field">
						<span><?php esc_html_e( 'Message', 'rds-smarty' ); ?></span>
						<textarea name="message" rows="5" required></textarea>
					</label>
					<button class="rds-btn rds-btn-primary" type="submit">
						<?php esc_html_e( 'Submit', 'rds-smarty' ); ?>
					</button>
				</form>
			</div>
		</div>
	</section>

	<section class="rds-section">
		<div class="rds-container rds-cta rds-reveal">
			<h2 class="rds-section-title"><?php esc_html_e( 'Turn on RDS Smarty and publish faster', 'rds-smarty' ); ?></h2>
			<p><?php esc_html_e( 'Designed for WordPress 6.4+ and PHP 7.4, with accessible navigation, responsive grids, and WooCommerce support.', 'rds-smarty' ); ?></p>
			<div class="rds-hero-actions">
				<a class="rds-btn rds-btn-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>">
					<?php esc_html_e( 'Customize Theme', 'rds-smarty' ); ?>
				</a>
				<a class="rds-btn rds-btn-outline" href="<?php echo esc_url( home_url( '/about' ) ); ?>">
					<?php esc_html_e( 'Learn More', 'rds-smarty' ); ?>
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
?>

<header id="site-header" class="site-header">
	<div class="header-container">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ) {
				the_custom_logo();
			} elseif ( $site_name ) {
				?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Roshan Kahpung" rel="home">
						<?php echo esc_html( $site_name ); ?>
					</a>
				</h1>
				<p class="site-description">
					<?php
					if ( $tagline ) {
						echo esc_html( $tagline );
					}
					?>
				</p>
			<?php } ?>
		</div>

		<div class="header-menu">
			<div class="menu-bar">
				<div class="label-section">
					<span class="menu-label">MENU</span>
				</div>
				<div class="hamburger-section">
					<svg class="navigation__toggle opened" viewBox="15 15 70 70" xmlns="http://www.w3.org/2000/svg"><path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35"></path><path class="line--2" d="M0 50h70"></path><path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65"></path></svg>
				</div>
			</div>
			<div class="navigation-section">
				<nav class="site-navigation">
					<?php
						$header_nav_menu = wp_nav_menu(
							array(
								'theme_location' => 'primary-menu',
								'menu_id'        => 'primary-menu',
								'menu_class'     => 'primary-menu',
								// You can add more parameters to customize the output
							)
						);
					?>
				</nav>
			</div>
		</div>
	</div>
</header>
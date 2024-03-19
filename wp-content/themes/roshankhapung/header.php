<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package roshankhapung
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'roshankhapung_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'roshankhapung_enable_skip_link', true );
$skip_link_url = apply_filters( 'roshankhapung_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
    <!-- <link rel="shortcut icon" href="<?php //echo get_bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon"> -->
    <!-- <link rel="icon" href="<?php //echo get_bloginfo('template_directory'); ?>/assets/images/favicon.png" type="image/x-icon"> -->
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php if ( $enable_skip_link ) { ?>
<a class="skip-link screen-reader-text" href="<?php echo esc_url( $skip_link_url ); ?>"><?php echo esc_html__( 'Skip to content', 'hello-elementor' ); ?></a>
<?php } ?>

<?php get_template_part( 'template-parts/header' ); ?>
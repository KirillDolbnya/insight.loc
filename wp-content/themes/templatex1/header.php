<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, user-scalable=no, shrink-to-fit=no" />
	<title><?php echo wp_get_document_title();?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>
<body <?php body_class(); ?>>
<div
class="loader"><div
class="loader_wrap"><div
class="logo_loader">
<img class="logo" src="<?=get_template_directory_uri()?>/assests/images/logo.svg"></div><div
class="loader_bar"><div
class="loader_progress"></div></div></div></div>

		


<?php get_template_part('header-menu'); ?>


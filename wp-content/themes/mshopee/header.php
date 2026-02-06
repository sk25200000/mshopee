<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php wp_head(); ?>
	<script>
		document.getElementById('twenty-twenty-one-style-css').remove();
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header-main">
	<div class="fix-wrap">
		<div class="header-inner">
			<div class="hdr-logo">
				<?php if( get_field('header_logo', 'options') ): ?>
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?php the_field('header_logo', 'options'); ?>" alt="<?php the_field('header_logo_alt', 'options'); ?>"/>
					</a>
				<?php endif; ?>	
			</div>
			<div class="hdr-right">
				<nav class="main-nav-menu">
				 <?php 
				 	wp_nav_menu( array(
					    'menu'           => 'Main Menu', // Do not fall back to first non-empty menu.
					    'menu_class' => 'main-menu',
					    'theme_location' => '__no_such_location',
					    'fallback_cb'    => false // Do not fall back to wp_page_menu()
					) );
				 ?>
				 </nav>
				 <?php if( get_field('get_app_link', 'options') and get_field('get_app_text', 'options') ): ?>
			 		<a href="<?php the_field('get_app_link', 'options'); ?>" class="get-app-top-btn"><?php the_field('get_app_text', 'options'); ?></a>
			 	<?php endif; ?>	
			</div>
			<span class="nav-toggle">
				<span class="bar top"></span>
				<span class="bar middle"></span>
				<span class="bar bottom"></span>
			</span>
		</div>
	</div>
</header>

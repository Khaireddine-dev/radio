<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radio_salam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- everything default and using `weight: 100` -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="main-header">
		<div class="cover-navbar">
			<div>
				<nav class="main-navbar" role="navigation">
					<div>
						<?= the_custom_logo(); ?>
							<?php
							wp_nav_menu( array(
									'theme_location'    => 'navbar',
							) );
							?>
					</div>
				</nav>
			</div>
		</div>
		<?php get_template_part( 'template-parts/content', 'slider' ); ?>
	</header>

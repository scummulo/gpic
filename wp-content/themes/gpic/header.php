<?php
/**
 * The header for our theme
 * @package GPIC
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
	<header>
		<div class="container">
			<nav>
				<a id="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/dist/assets/img/logo-w.png" alt="gpic-logo"></a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'nav',
					'container'      => 'ul'
				) );
				?>
			</nav>
		</div>

		<div id="nav-trigger">
			<i></i><i></i><i></i>
		</div>
	</header>

	<main>
		

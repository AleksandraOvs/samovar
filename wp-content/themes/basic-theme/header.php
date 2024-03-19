<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/Organization">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<link rel="icon" href="images/favicons/favicon.ico"> <!-- 32×32 -->
	<link rel="icon" href="images/favicons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="images/favicons/favicon.png"> <!-- 180×180 -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="site-container">
		<div class="fixed-container header-container">
			<header class="header">
				<div class="header__main">
					<a href="/" class="header__main__logo">
						<?php
						$header_logo = get_theme_mod('header_logo');
						$img = wp_get_attachment_image_src($header_logo, 'full');
						if ($img) : echo '<img src="' . $img[0] . '" alt="">';
						endif;
						?>
					</a>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-header',
							'container' => 'nav',
							'menu_class' => 'header__main__menu',
						)
					);
					?>
					<button class="header__burger burger js-toggle-menu" type="button">
					<span class="burger__line"></span>
					<span class="sr-only">open/close menu</span>
				</button>

				<div class="menu-mobile">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-mobile',
							'container' => 'div',
							//'menu_class' => 'menu-mobile',
						)
					);
					?>
				</div>
				
				</div>
				<div class="header__center"></div>


				<?php
				if (carbon_get_theme_option('crb_header-link_link')) {
				?>
					<div class="header__right">
						<?php
						$thumb_contact = wp_get_attachment_image_url(carbon_get_theme_option('crb_header-link_img'), 'full');
						?>
						<a href="<?php echo carbon_get_theme_option('crb_header-link_link') ?>" class="button orange-fill"><span><?php echo carbon_get_theme_option('crb_header-link') ?></span><img class="header-contact-icon" src="<?php echo $thumb_contact; ?>" alt=""></a>
					</div>
				<?php } ?>

			</header>
		</div>

		<main class="main">
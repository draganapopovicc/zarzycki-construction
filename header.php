<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<?php
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');

$header__link = get_field('header_link', 'option');
if($header__link) {
	$header_link_url = $header__link['url'];
	$header_link_title = $header__link['title'];
	$header_link_target = $header__link['target'] ? $header__link['target'] : '_self';
};

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<meta name="theme-color" content="#506e93" />
	
	<?php echo get_field('head_script', 'option'); ?> <!-- Head External Code -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php echo get_field('body_top_script', 'option'); ?> <!-- Body Top External Code -->
<header id="masthead" class="header-main">
	<div class="header__top">
		<div class="container header__top__info">
		
			<div class="header__top__contact">
				<?php if($phone): ?>
					<a aria-label="Call us" href="tel:<?php echo $phone ?>">
						<div class="contact-svg">
							<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="phone-out" class="icon glyph"><path d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" /><path d="M21,10a1,1,0,0,1-1-1,5,5,0,0,0-5-5,1,1,0,0,1,0-2,7,7,0,0,1,7,7A1,1,0,0,1,21,10Z"/><path d="M17,10a1,1,0,0,1-1-1,1,1,0,0,0-1-1,1,1,0,0,1,0-2,3,3,0,0,1,3,3A1,1,0,0,1,17,10Z" /></svg>
						</div>
						<div class="contact-text">
							<!-- <span>Call Us</span> -->
							<p><?php echo $phone ?> </p>
						</div>
					</a>
				<?php endif ?>
				<?php if($email): ?>
					<a aria-label="Send us an email" class="email" href="mailto:<?php echo $email; ?>">
						<div class="contact-svg">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20" viewBox="0 0 24 24"><path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z"/></svg>
						</div>
						<div class="contact-text">
							<!-- <span>Email Us</span> -->
							<p><?php echo $email ?> </p>
						</div>
					</a>
				<?php endif ?>
			</div>
		</div>
	</div>

	<div class="header__bottom ">
		<div class="header__container container">
			<figure class="site-logo"> <?php the_custom_logo(); ?> </figure>

			<div class="header-navigation__wrap">
				<nav id="site-navigation" class="main-navigation">
					<!-- Mobile Nav Button -->
					<div class="hamburger">
						<label for="nav-toggle">Navigation Menu</label>
						<input type="checkbox" class="menu-toggle" id="nav-toggle">
						<div></div>
					</div>
					<!-- Mobile Nav Button -->

					<div class="main-navigation_wrap">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main',
								'menu_id'        => 'primary-menu',
								'walker'		 => new CustomMenuWalker
							)
						);
						?>

						<div class="mobile-header__info">
							<div class="header__info">
								<?php if($phone): ?>
									<a aria-label="Call us" href="tel:<?php echo $phone ?>">
										<div class="contact-svg">
											<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="phone-out" class="icon glyph"><path d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" /><path d="M21,10a1,1,0,0,1-1-1,5,5,0,0,0-5-5,1,1,0,0,1,0-2,7,7,0,0,1,7,7A1,1,0,0,1,21,10Z"/><path d="M17,10a1,1,0,0,1-1-1,1,1,0,0,0-1-1,1,1,0,0,1,0-2,3,3,0,0,1,3,3A1,1,0,0,1,17,10Z" /></svg>
										</div>
										<div class="contact-text">
											<span>Need Help?</span>
											<p><?php echo $phone ?> </p>
										</div>
									
									</a>
								<?php endif ?>
								<?php if($email): ?>
									<a aria-label="Send us an email" class="email" href="mailto:<?php echo $email; ?>">
										<div class="contact-svg">
											<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20" viewBox="0 0 24 24"><path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z"/></svg>
										</div>
										<div class="contact-text">
											<span>Have Any Question?</span>
											<p><?php echo $email ?> </p>
										</div>
									</a>
								<?php endif ?>
							</div>
						</div>

						<?php if($header__link): ?>
							<div class="header__button button-mobile">
								<a class="btn btn-2" href="<?php echo esc_url($header_link_url) ?>"  target="<?php echo esc_attr( $header_link_target ); ?>">
									<?php echo $header_link_title ?>
								</a>
							</div>
						<?php endif ?>
					</div>
				</nav><!-- #site-navigation -->
			
				<?php if($header__link): ?>
					<div class="header__button button-desktop">
						<a class="btn btn-2" href="<?php echo esc_url($header_link_url) ?>"  target="<?php echo esc_attr( $header_link_target ); ?>">
							<?php echo $header_link_title ?>
						</a>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
</header><!-- #masthead -->

<div id="page" class="site">


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s-tier
 */

?>
<?php
$footer_logo = get_field('footer_logo', 'option');
$store_description = get_field('description', 'option');

$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$google_map_link = get_field('google_map_link', 'option');


?>

<footer id="colophon" class="site-footer footer">
	<div class="footer__top space_2">
		<div class="container footer__wrapper">
			<?php if($store_description || $footer_logo): ?>
				<div class="footer__box-about">
					<?php if( $footer_logo ) : ?>
						<figure class="footer__logo">
							<?php echo wp_get_attachment_image( $footer_logo , 'small' ); ?>
						</figure>
					<?php endif ?>

					<?php if($store_description) :?>
						<div class="footer__box-description"> <?php echo wp_kses_post($store_description); ?> </div>
					<?php endif ?>
				</div>
			<?php endif ?>

			<div class="footer__info-box">
				<?php if($phone): ?>
					<a class="footer__info-block" aria-label="Call us" href="tel:<?php echo $phone ?>">
						<div class="contact-svg">
							<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" id="phone-out" class="icon glyph"><path d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" /><path d="M21,10a1,1,0,0,1-1-1,5,5,0,0,0-5-5,1,1,0,0,1,0-2,7,7,0,0,1,7,7A1,1,0,0,1,21,10Z"/><path d="M17,10a1,1,0,0,1-1-1,1,1,0,0,0-1-1,1,1,0,0,1,0-2,3,3,0,0,1,3,3A1,1,0,0,1,17,10Z" /></svg>
						</div>
						<div class="contact-text">
							<span>Call Us</span>
							<p><?php echo $phone ?> </p>
						</div>
					</a>
				<?php endif ?>
				<?php if($email): ?>
					<a class="footer__info-block" aria-label="Send us an email" class="email" href="mailto:<?php echo $email; ?>">
						<div class="contact-svg">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="20" height="20" viewBox="0 0 24 24"><path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z"/></svg>
						</div>
						<div class="contact-text">
							<span>Email Us</span>
							<p><?php echo $email ?> </p>
						</div>
					</a>
				<?php endif ?>
				<?php if($address && $google_map_link): ?>
					<a class="footer__info-block" aria-label="Visit us on our address"  target="_blank" href="<?php echo $google_map_link ?>">
						<div class="contact-svg">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
								<path d="M20.1819 10.1818C20.1819 16.5455 12.0001 22 12.0001 22C12.0001 22 3.81824 16.5455 3.81824 10.1818C3.81824 8.01187 4.68025 5.93079 6.21464 4.3964C7.74902 2.86201 9.8301 2 12.0001 2C14.17 2 16.2511 2.86201 17.7855 4.3964C19.3199 5.93079 20.1819 8.01187 20.1819 10.1818Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M12.0001 12.9091C13.5063 12.9091 14.7274 11.688 14.7274 10.1818C14.7274 8.67559 13.5063 7.45454 12.0001 7.45454C10.4939 7.45454 9.27283 8.67559 9.27283 10.1818C9.27283 11.688 10.4939 12.9091 12.0001 12.9091Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<div class="contact-text">
							<span>Address</span>
							<p><?php echo $address?> </p>
						</div>
					</a>
				<?php endif ?>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container">
		 © 2024 David Zarzycki General Contractor, Inc.
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--
	         (__)
     `\------(oo)
       ||    (__) <(What are you looking for?)
       ||w--||
-->
<?php echo get_field('body_bottom_script', 'option'); ?> <!-- Body Bottom External Code -->
</body>
</html>

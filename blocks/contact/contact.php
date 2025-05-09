<?php
$contact_short_code = get_field('contact_short_code');
$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$address = get_field('address', 'option');
$google_map_link = get_field('google_map_link', 'option');

$google_map_iframe = get_field('google_map_iframe');

$image = get_field('image_contact');

$class = 'st-contact ';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}
?>

<section class="<?php echo $class ?>">
	<div class="st-contact-wrap">
		<div class="st-contact__box">
			<div class="st-contact__form">
				<div class="container">
                    <div class="st-contact__wrapper">
                        <?php get_template_part('components/intro'); ?> 
                        <div class="st-contact__form-shortcode">
                            <?php echo do_shortcode($contact_short_code);?>
                        </div>
                    </div>

                    <!-- <?php if( $image):  ?>
                        <figure class="st-contact__image">
                            <?php
                                echo wp_get_attachment_image( $image, 'full', "");
                            ?>
                        </figure>
                    <?php endif ?> -->
				</div>
			</div>
			<div class="st-contact__info container st-contact__wrapper">
                <div>
                    <h2 class="st-contact__info-title title-3">Contact Information</h2>
                    <?php if($phone ): ?>
                        <a class="st-contact__info-item" aria-label="Call us"  class="phone" href="tel:<?php echo $phone;?>">
                            <div class="st-contact__icon">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" id="phone-out" class="icon glyph"><path d="M21,15v3.93a2,2,0,0,1-2.29,2A18,18,0,0,1,3.14,5.29,2,2,0,0,1,5.13,3H9a1,1,0,0,1,1,.89,10.74,10.74,0,0,0,1,3.78,1,1,0,0,1-.42,1.26l-.86.49a1,1,0,0,0-.33,1.46,14.08,14.08,0,0,0,3.69,3.69,1,1,0,0,0,1.46-.33l.49-.86A1,1,0,0,1,16.33,13a10.74,10.74,0,0,0,3.78,1A1,1,0,0,1,21,15Z" /><path d="M21,10a1,1,0,0,1-1-1,5,5,0,0,0-5-5,1,1,0,0,1,0-2,7,7,0,0,1,7,7A1,1,0,0,1,21,10Z"/><path d="M17,10a1,1,0,0,1-1-1,1,1,0,0,0-1-1,1,1,0,0,1,0-2,3,3,0,0,1,3,3A1,1,0,0,1,17,10Z" /></svg>
                            </div>
                            <div class="st-contact__info-wrap">
                                <p>Phone</p>
                                <span><?php echo $phone ?></span> 
                            </div>
                        </a>
                    <?php endif ?>
                    <?php if($email ): ?>
                        <a  class="st-contact__info-item email" aria-label="Send us an email" class="email" href="mailto:<?php echo $email; ?>">
                            <div class="st-contact__icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="50" height="50" viewBox="0 0 24 24"><path d="M22,5V9L12,13,2,9V5A1,1,0,0,1,3,4H21A1,1,0,0,1,22,5ZM2,11.154V19a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V11.154l-10,4Z"/></svg>
                            </div>

                            <div class="st-contact__info-wrap">
                                <p>Email</p>
                                <span><?php echo $email ?></span>
                            </div> 
                        </a>
                    <?php endif ?>
                    <?php if( $address && $google_map_link): ?>
                        <a class="st-contact__info-item" aria-label="Visit us on our address" target="_blank" href="<?php echo $google_map_link ?>">
                            <div class="st-contact__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.1819 10.1818C20.1819 16.5455 12.0001 22 12.0001 22C12.0001 22 3.81824 16.5455 3.81824 10.1818C3.81824 8.01187 4.68025 5.93079 6.21464 4.3964C7.74902 2.86201 9.8301 2 12.0001 2C14.17 2 16.2511 2.86201 17.7855 4.3964C19.3199 5.93079 20.1819 8.01187 20.1819 10.1818Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.0001 12.9091C13.5063 12.9091 14.7274 11.688 14.7274 10.1818C14.7274 8.67559 13.5063 7.45454 12.0001 7.45454C10.4939 7.45454 9.27283 8.67559 9.27283 10.1818C9.27283 11.688 10.4939 12.9091 12.0001 12.9091Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="st-contact__info-wrap">
                                <p>Location</p>
                                <span><?php echo $address ?></span> 
                            </div>
                        </a>
                    <?php endif ?>
                </div>
                <div class="st-contact__map">
                    <?php echo $google_map_iframe?>
                </div>
			</div>
		</div>
	</div>
</section>


<?php
$gallery = get_field('section_gallery');
$image_caption = get_field('image_caption');

$gallery_num = '';

if($gallery) {
	$gallery_num = count($gallery);
}

$text_align = get_field('text_align');
$justify_content = get_field('justify_content');
$choose_style = get_field('choose_style');

$media = get_field('media');
$size = 'full';
$layout = get_field_object('layout');
$stack = get_field_object('stack');
$padding = get_field_object('padding');

$class = "st_section";
$class .= ' ' . $choose_style;
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

$sec_in_class = "st_section_inner container";
if ( ! empty( $layout ) ) {
    $sec_in_class .=  ' ' . $layout['value'];
}
if ( ! empty( $stack ) ) {
    $sec_in_class .=  ' ' . $stack['value'];
}

$sec_in_class .= ' ' . 'justify-' . $justify_content;
?>

<section class="<?php echo $class; ?>">
	<?php get_template_part('components/background'); ?>
	<div class="<?php echo $sec_in_class ?>">

		<div class="left text-<?php echo $text_align ?>">
			<?php get_template_part('components/intro'); ?>
			<?php get_template_part('components/buttons'); ?>
		</div>

		<?php if( $gallery ): ?>
			<div class="right">
				<div class="right-images images-num-<?php echo $gallery_num ?>">
					<?php foreach( $gallery as $image_id ):
						?>
						<figure>
						<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
						</figure>
					<?php endforeach; ?>
				</div>
				<?php if($image_caption): ?>
					<div class="st_section__image-cap"><?php echo $image_caption ?></div>
				<?php endif ?>
			</div>
		<?php endif; ?>
	</div>
</section>

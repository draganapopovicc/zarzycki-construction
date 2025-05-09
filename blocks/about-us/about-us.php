<?php
// $col_class = 'st-services__all';

// $cols = get_field_object('desktop_columns');
// $tab_cols = get_field_object('tab_columns');
// $mob_cols = get_field_object('mob_columns');
// if ( ! empty( $cols ) ) {
// 	$col_class .=  ' ' . $cols['value'];
// }
// if ( ! empty( $tab_cols ) ) {
//     $col_class .=  ' ' . $tab_cols['value'];
// }
// if ( ! empty( $mob_cols ) ) {
//     $col_class .=  ' ' . $mob_cols['value'];
// }

$class = 'st-about';
if ( ! empty( $block['className'] ) ) {
	$class .= ' ' . $block['className'];
}

$padding = get_field_object('padding');
if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}
?>

<section class="<?php echo $class ?>">
		<?php get_template_part('components/background'); ?>

		<div class="container"> 
			<?php get_template_part('components/intro'); ?>

			<?php if( have_rows('descriptions_about') ): ?>
				<div class="st-about__desc-wrap">
					<?php while( have_rows('descriptions_about') ) : the_row();
						$title = get_sub_field('about_title'); 
						$description = get_sub_field('about_description'); 
						$gallery = get_sub_field('about_gallery'); 
						?>
					
						<div class="st-about-info">
							<?php if($title): ?>
								<p class="st-about__title"> <?php echo $title ?> </p>
							<?php endif ?>
						
							<?php if($description): ?>
								<div class="st-about__desc">
									<?php echo $description ?> 
								</div>
							<?php endif ?>

							<?php if( $gallery ): ?>
								<div class="st-about__gallery">
									<?php foreach( $gallery as $image ):
										?>
										<a href="<?php echo esc_url($image['url']); ?>" class="fancybox-figure" data-fancybox="gallery">
											<img width="307" height="396" src="<?php echo esc_url($image['sizes']['medium_large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</a>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endwhile ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</section>


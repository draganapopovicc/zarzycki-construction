<?php
$padding = get_field_object('padding');

$class = "before-after";
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

?>

<section class="<?php echo $class; ?>">
	<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>

		<div class="before-after__anchor-links">
			<a href="#interior">Interior </a> /
			<a href="#exterior">Exterior </a>
		</div>
	</div>

		<div id="interior" class="before-after__projects">
			<div class="container">
				<h2 class="before-after__projects-type">Interior
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 512 512"><path d="M256,464c114.87,0,208-93.13,208-208S370.87,48,256,48,48,141.13,48,256,141.13,464,256,464ZM160,193.37l96,96,96-96L374.63,216,256,334.63,137.37,216Z"/></svg>
				</h2> 
			</div>

			<?php while( have_rows('project_images_interior') ) : the_row();
				$title = get_sub_field('project_title'); 
				$description = get_sub_field('project_description');   
				$use_pair_slider = get_sub_field('use_pair_images_slider_interior');
				?>
			
				<div class="st-project">
					<div class="container">
						<?php if($title): ?>
							<p class="st-project__title"> <?php echo $title ?> </p>
						<?php endif ?>
					
						<?php if($description): ?>
						<div class="st-project__desc">
							<?php echo $description ?> 
						</div>
						<?php endif ?>
						
						<?php if($use_pair_slider): ?>
								<div class="st-project__images">
									<div class="main-carousel">
										<?php if( have_rows('interior_slider') ): ?>
										<?php while( have_rows('interior_slider') ) : the_row(); 
											$image_before = get_sub_field('project_image_before'); 
											$image_after = get_sub_field('project_image_after'); ?>

											<div class="carousel-cell">
												<div class="images-wrap_pair">
													<?php if( $image_before ): ?>
														<div>
															<figure>
																<?php echo wp_get_attachment_image( $image_before, 'large' ); ?>
															</figure>
															<span>Before</span>
														</div>
													<?php endif; ?>
													<?php if( $image_after ): ?>
														<div>
															<figure>
																<?php echo wp_get_attachment_image( $image_after, 'large' ); ?>
															</figure>
															<span>After</span>
														</div>
													<?php endif; ?>
												</div>
											</div>
										<?php endwhile ?>
										<?php endif ?>
									</div>
								</div>
							<?php else: ?>
								<?php
									$image_before = get_sub_field('project_image_before'); 
									$image_after = get_sub_field('project_image_after');
								?>

								<?php if( $image_before && $image_after ) : ?>
									<div class="st-project__images st-project__images--separate">
										<div class="image-wrap">
											<div class="main-carousel">
											<?php foreach( $image_before  as $image_id ):?>
													<figure class="carousel-cell">
														<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
													</figure>
												<?php endforeach; ?>
											</div>
											<span>Before</span>
										</div>
										<div class="image-wrap ">
											<div class="main-carousel">
												<?php foreach( $image_after  as $image_id ):?>
													<figure class="carousel-cell">
														<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
													</figure>
												<?php endforeach; ?>
											</div>
											<span>After</span>
										</div>
									</div>
								<?php endif ?>

							<?php endif; ?>	
						
					</div>
					
				</div>
			<?php endwhile ?>
		</div>

		<div id="exterior" class="before-after__projects">
			<div class="container">
				<h2 class="before-after__projects-type">Exterior
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 512 512"><path d="M256,464c114.87,0,208-93.13,208-208S370.87,48,256,48,48,141.13,48,256,141.13,464,256,464ZM160,193.37l96,96,96-96L374.63,216,256,334.63,137.37,216Z"/></svg>
				</h2> 
			</div>

			<?php while( have_rows('project_images') ) : the_row();
				$title = get_sub_field('project_title'); 
				$description = get_sub_field('project_description');   
				$use_pair_slider = get_sub_field('use_pair_images_slider_exterior');
				?>
			
				<div class="st-project">
					<div class="container">
						<?php if($title): ?>
							<p class="st-project__title"> <?php echo $title ?> </p>
						<?php endif ?>
					
						<?php if($description): ?>
						<div class="st-project__desc">
							<?php echo $description ?> 
						</div>
						<?php endif ?>
						
						<?php if($use_pair_slider): ?>
							<div class="st-project__images">
									<div class="main-carousel">
										<?php if( have_rows('exterior_slider') ): ?>
										<?php while( have_rows('exterior_slider') ) : the_row(); 
											$image_before = get_sub_field('project_image_before'); 
											$image_after = get_sub_field('project_image_after'); ?>

											<div class="carousel-cell">
												<div class="images-wrap_pair">
													<?php if( $image_before ): ?>
														<div>
															<figure>
																<?php echo wp_get_attachment_image( $image_before, 'large' ); ?>
															</figure>
															<span>Before</span>
														</div>
													<?php endif; ?>
													<?php if( $image_after ): ?>
														<div>
															<figure>
																<?php echo wp_get_attachment_image( $image_after, 'large' ); ?>
															</figure>
															<span>After</span>
														</div>
													<?php endif; ?>
												</div>
											</div>
										<?php endwhile ?>
										<?php endif ?>
									</div>
								</div>
							<?php else: ?>
								<?php
									$image_before = get_sub_field('project_image_before'); 
									$image_after = get_sub_field('project_image_after');
								?>

								<?php if( $image_before && $image_after ) : ?>
									<div class="st-project__images st-project__images--separate">
										<div class="image-wrap">
											<div class="main-carousel">
											<?php foreach( $image_before  as $image_id ):?>
													<figure class="carousel-cell">
														<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
													</figure>
												<?php endforeach; ?>
											</div>
											<span>Before</span>
										</div>
										<div class="image-wrap ">
											<div class="main-carousel">
												<?php foreach( $image_after  as $image_id ):?>
													<figure class="carousel-cell">
														<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
													</figure>
												<?php endforeach; ?>
											</div>
											<span>After</span>
										</div>
									</div>
								<?php endif ?>

							<?php endif; ?>	
					</div>
					
				</div>
			<?php endwhile ?>
		</div>
</section>


<!-- <?php if( have_rows('project_images') ): ?>
		<div id="exterior" class="before-after__projects">
			<div class="container">
				<h2 class="before-after__projects-type">Exterior
				<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24" viewBox="0 0 512 512"><path d="M256,464c114.87,0,208-93.13,208-208S370.87,48,256,48,48,141.13,48,256,141.13,464,256,464ZM160,193.37l96,96,96-96L374.63,216,256,334.63,137.37,216Z"/></svg>
				</h2> 
			</div>

			<?php while( have_rows('project_images') ) : the_row();
				$title = get_sub_field('project_title'); 
				$description = get_sub_field('project_description');   
				$image_before = get_sub_field('project_image_before'); 
				$image_after = get_sub_field('project_image_after'); 
				?>
			
				<div class="st-project">
					<div class="container">
						<?php if($title): ?>
							<p class="st-project__title"> <?php echo $title ?> </p>
						<?php endif ?>
					
						<?php if($description): ?>
						<div class="st-project__desc">
							<?php echo $description ?> 
						</div>
						<?php endif ?>

						<?php if( $image_before && $image_after ) : ?>
							<div class="st-project__images">
								<div class="image-wrap ">
									<div class="main-carousel">
										<?php foreach( $image_before  as $image_id ):?>
											<figure class="carousel-cell">
												<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
											</figure>
										<?php endforeach; ?>
									</div>
									<span>Before</span>
								</div>
								<div class="image-wrap">
									<div class="main-carousel">
										<?php foreach( $image_after  as $image_id ):?>
											<figure class="carousel-cell">
												<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
											</figure>
										<?php endforeach; ?>
									</div>
									<span>After</span>
								</div>
							</div>
						<?php endif ?>
					</div>
				</div>
			<?php endwhile ?>
		</div>
<?php endif ?> -->

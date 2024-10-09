<?php
/**
 * Template name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */

get_header();
$fields = get_fields();

// Intro
$intro_heading = $fields['intro_copy_heading'] ?? null;
$intro_copy = $fields['intro_copy_copy'] ?? null;
$global_phone_number = get_field('global_phone_number', 'option') ?? null;
$global_quote_link = get_field('global_quote_link', 'option') ?? null;

// Difference
$agd_background_image = $fields['agd_background_image'] ?? null;
$agd_title = $fields['agd_title'] ?? null;
$agd_icon_text_rows = $fields['agd_icon_text_rows'] ?? null;

// Group Slider
$group_slider_logo = $fields['group_slider_logo'] ?? null;
$group_companies_slides = $fields['group_companies_slides'] ?? null;
?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php get_template_part('template-parts/section', 'hero-slider');?>
				
					<section class="entry-content" itemprop="text">
						<?php if( !empty( $intro_heading ) || !empty( $intro_copy ) ):?>
						<section class="intro-copy">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<div class="cell small-12 medium-11 tablet-10 large-8 xlarge-6">
										<?php if( !empty( $intro_heading ) ):?>
											<h1 class="h2 text-center">
												<?=wp_kses_post($intro_heading);?>
											</h1>
										<?php endif;?>
										<?php if( !empty( $intro_copy ) ):?>
											<div class="copy-wrap">
												<?=wp_kses_post($intro_copy);?>
											</div>
										<?php endif;?>
									</div>
									<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
										<div class="cell small-12 btns-wrap">
											<div class="grid-x grid-padding-x align-center">
												<?php get_template_part('template-parts/part', 'global-cta-links',
													array(
														'global_phone_number' => $global_phone_number,
														'phone_classes' => 'shrink',
														'global_quote_link' => $global_quote_link,	
														'quote_classes' => 'small-12 medium-shrink',
													),
												);?>
											</div>
										</div>
									<?php endif ;?>
								</div>
							</div>
							<hr class="gradient">
						</section>
						
						<?php endif;?>
						<?php if( !empty( $agd_background_image ) || !empty( $agd_title )  || !empty( $agd_icon_text_rows ) ):?>
						<section class="difference relative has-object-fit">
							<?php 
							$image = $agd_background_image['id'] ?? null;
							$size = 'full';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}?>
							<div class="grid-container relative">
								<div class="grid-x grid-padding-x align-center text-center">
									<div class="cell small-12 large-10 xlarge-8">
										<?php if( !empty( $agd_title ) ):?>
											<h2><?=esc_html( $agd_title );?></h2>
										<?php endif;?>
										<?php if( !empty( $agd_icon_text_rows ) ):?>
											<div class="grid-x grid-padding-x align-justify">
												<?php foreach( $agd_icon_text_rows as $row ):
													$icon = $row['icon'] ?? null;
													$label = $row['label'] ?? null;	
												?>
													<div class="cell small-12 medium-4 grid-x flex-dir-column align-middle align-justify">
														<?php 
														$image = $icon['id'] ?? null;
														$size = 'full';
														if( $image ) {
															echo wp_get_attachment_image( $image, $size );
														}?>
														<?php if( !empty( $label ) ):?>
															<h3><?=wp_kses_post( $label );?></h3>	
														<?php endif;?>
													</div>
												<?php endforeach;?>
											</div>
										<?php endif;?>
									</div>
								</div>
							</div>
							<hr class="gradient relative">
						</section>
						<?php endif;?>
						
						<?php if( !empty( $group_slider_logo ) || !empty( $group_companies_slides ) ):?>
						<section class="group-slider relative">
							<?php if( !empty( $group_companies_slides  ) ) :?>
								<div class="group-slider-bg-swiper overflow-hidden">
									<div class="swiper-wrapper">
										<?php foreach( $group_companies_slides as $slide ) :
											$background_image = $slide['background_image'] ?? null;
										?>
											<div class="swiper-slide bg-slide has-object-fit">
												<?php 
												$image = $background_image['id'] ?? null;
												$size = 'full';
												if( $image ) {
													echo wp_get_attachment_image( $image, $size );
												}?>
											</div>
										<?php endforeach;?>
									</div>
								</div>
							<?php endif;?>
							<div class="grid-container relative inner">
								<div class="grid-x grid-padding-x align-center">
									<div class="cell small-12 large-10 xlarge-8">
										<?php 
										$image = $group_slider_logo['id'] ?? null;
										$size = 'full';
										if( $image ) :?>
											<div class="logo-wrap text-center">
												<?=wp_get_attachment_image( $image, $size, false, array( 'class' => 'relative' ) );?>
											</div>
										<?php endif; ?>
										<?php if( !empty( $group_companies_slides  ) ):?>
										<div class="group-slider-swiper overflow-hidden">
											<div class="grid-x align-center">
												<div class="swiper-pagination company-pagination grid-x"></div>
											</div>
											<div class="swiper-wrapper">
												<?php foreach( $group_companies_slides as $slide ):
													$brand_color = $slide['brand_color'] ?? null;
													$name = $slide['company_name'] ?? null;
													$logo = $slide['logo'] ?? null;	
													$description = $slide['description'] ?? null;	
													$button_link = $slide['button_link'] ?? null;	
													$slides = $slide['image_video_slides'] ?? null;	
												?>
													<div class="swiper-slide company-slide" data-company="<?=esc_html( $name );?>" data-color="<?=esc_html( $brand_color );?>">
														<div class="grid-x grid-padding-x align-justify">
															<?php if( !empty( $logo ) || !empty( $description ) || !empty( $button_link ) ):?>
																<div class="left cell small-12 medium-5 tablet-4">
																	<div class="inner height-100 grid-x flex-dir-column align-justify">
																		<div>
																			<?php 
																			$image = $logo['id'] ?? null;
																			$size = 'full';
																			if( $image ) {
																				echo wp_get_attachment_image( $image, $size );
																			}?>
																			<?php if( !empty( $description ) ):?>
																				<p><?=esc_html( $description );?></p>
																			<?php endif;?>
																		</div>
																		<?php 
																		$link = $button_link ?? null;;
																		if( $link ): 
																			$link_url = $link['url'];
																			$link_title = $link['title'];
																			$link_target = $link['target'] ? $link['target'] : '_self';
																			?>
																			<div class="btn-wrap text-center">
																				<a class="button border" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
																			</div>
																		<?php endif; ?>
																	</div>
																</div>
																<?php if( !empty( $slides ) ):?>
																	<div class="company-images right cell small-12 medium-7 tablet-8">
																		<div class="overflow-hidden">
																			<div class="company-images-swiper">
																				<div class="swiper-wrapper">
																					<?php $nested_slide = 1;  foreach($slides as $slide):
																						$media_type = $slide['media_type'] ?? null; 	
																						$image = $slide['image'] ?? null; 	
																						$video_url = $slide['video_url'] ?? null; 	
																						$slide_id =  sanitize_title($name) . '-slide-' . $nested_slide;
																					?>
																						<div class="swiper-slide type-<?=esc_attr( $media_type );?>">
																							<?php 
																							$size = 'full';
																							if( $image ) {
																								echo wp_get_attachment_image( $image['id'], $size );
																							}
																							if( $media_type == 'video' && !empty( $video_url ) ) :?>
																								<button class="pointer" data-open="<?=$slide_id;?>" aria-controls="slider-image-modal" aria-haspopup="dialog">
																									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z" fill="#fff"/></svg>
																								</button>
																								<div class="reveal large" id="<?=$slide_id;?>" data-reveal data-reset-on-close="true">
																									<div class="text-right">
																										<button class="close-button pointer" data-close aria-label="Close modal" type="button">
																											<svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" fill="<?=$brand_color;?>"/></svg>
																										</button>
																									</div>
																									<div class="responsive-embed widescreen">
																										<?php
																										
																										// Load value.
																										$iframe = $video_url;
																										
																										// Use preg_match to find iframe src.
																										preg_match('/src="(.+?)"/', $iframe, $matches);
																										$src = $matches[1];
																										
																										// Add extra parameters to src and replace HTML.
																										$params = array(
																											'controls'  => 1,
																											'hd'        => 1,
																											'autohide'  => 1
																										);
																										$new_src = add_query_arg($params, $src);
																										$iframe = str_replace($src, $new_src, $iframe);
																										
																										// Add extra attributes to iframe HTML.
																										$attributes = 'frameborder="0"';
																										$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
																										
																										// Display customized HTML.
																										echo $iframe;
																										?>
																									</div>
																								</div>
																							<?php endif;?>
																						</div>
																					<?php $nested_slide++; endforeach;?>
																				</div>
																				<div class="swiper-pagination company-images-pagination"></div>
																			</div>
																		</div>
																	</div>
																<?php endif;?>
															<?php endif;?>
														</div>
													</div>
												<?php endforeach;?>
											</div>
										</div>
										<?php endif;?>
									</div>
								</div>
							</div>
							<hr class="gradient relative">
						</section>
						<?php endif;?>
						
					</section> <!-- end article section -->
							
					<footer class="article-footer">
						<?php get_template_part('template-parts/section', 'footer-cta');?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();
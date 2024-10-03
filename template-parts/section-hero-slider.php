<?php
$slider_transition_delay = get_field('hero_slider_transition_delay') ?? null;
$slides = get_field('hero_slides') ?? null;
?>

<header class="entry-header page-banner has-bg grid-x hero-slider" data-delay="<?= esc_attr( $slider_transition_delay );?>">
	<div class="swiper-wrapper">
		<?php $i = 1; foreach($slides as $slide):
			$type = $slide['media_type'] ?? null;
			$title = $slide['title'] ?? null;
			$button_1 = $slide['button_1'] ?? null;
			$button_2 = $slide['button_2'] ?? null;
		?>
			<div class="swiper-slide has-bg">
				<div class="grid-container height-100">
					<div class="grid-x grid-padding-x height-100">
						<div class="cell small-12">
							<?php if( $type == 'image' && !empty( $slide['image'] ) ) {
								$imgID = $slide['image']['ID'];
								$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
								$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt] );
								echo '<div class="bg img-wrap">';
								echo $img;
								echo '</div>';
							}?>
							<?php if( $type == 'video' && !empty( $slide['video_file'] ) ):?>
								<div class="bg video-wrap">
									<video width="1600" preload="none" height="900" playsinline loop muted>
						  			<source src="<?= esc_url( $slide['video_file']['url'] );?>" type="video/mp4" />
									</video>
								</div>
							<?php endif;?>
							<?php if( !empty( $title ) || !empty( $button_1 ) || !empty( $button_2 ) ):?>
								<div class="relative content grid-x flex-dir-column align-center height-100">
									<?php if( !empty( $title ) ):?>
										<div class="cell small-12 text-center">
											<h1><?=wp_kses_post($title);?></h1>
										</div>
									<?php endif;?>
									
									<?php if( !empty( $button_1 ) || !empty( $button_2 ) ):?>
										<div class="cell small-12">
											<div class="grid-x grid-padding-x align-center">
												<?php 
													$link1 = $button_1['link'] ?? null;
													$has_icon = $button_1['add_phone_icon'] ?? null;
													if( $link1 ): 
														$link_url = $link1['url'];
														$link_title = $link1['title'];
														$link_target = $link1['target'] ? $link1['target'] : '_self';
													?>
													<div class="cell shrink">
														<a class="button<?php if( $has_icon === true ):?> has-icon<?php endif;?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
														<?php if( $has_icon === true ):?>
															<svg xmlns="http://www.w3.org/2000/svg" width="13.132" height="22.223"><path d="M10.606 0H2.525A2.526 2.526 0 0 0 0 2.525V19.7a2.526 2.526 0 0 0 2.525 2.525h8.081a2.526 2.526 0 0 0 2.526-2.525V2.525A2.526 2.526 0 0 0 10.606 0Zm-4.04 21.213A1.515 1.515 0 1 1 8.081 19.7a1.513 1.513 0 0 1-1.515 1.513Zm4.546-4.041H2.02V3.03h9.091Z" fill="#ffffff"/></svg>
														<?php endif;?>
															<span><?php echo esc_html( $link_title ); ?></span>
														</a>
													</div>
												<?php endif; ?>
												
												<?php 
													$link2 = $button_2['link'] ?? null;
													$has_icon = $button_1['add_phone_icon'] ?? null;
													if( $link2 ): 
														$link_url = $link2['url'];
														$link_title = $link2['title'];
														$link_target = $link2['target'] ? $link2['target'] : '_self';
													?>
													<div class="cell shrink">
														<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
													</div>
												<?php endif; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		<?php $i++; endforeach;?>
	</div>
</header>
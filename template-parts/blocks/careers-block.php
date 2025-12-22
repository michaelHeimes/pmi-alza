<?php 

$id = $block['id'] ?? 'careers-block';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

$class = 'careers-block';
if( !empty($block['className']) ) {
	$class .= ' ' . $block['className'];
}

if ( have_rows('careers_block') ) : 
	$job_link_text = get_field('job_link_text') ?? null;	
	$apply_link_text = get_field('apply_link_text') ?? null;	
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class); ?>">

	<ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs">

		<?php 
		$i = 1;
		while ( have_rows('careers_block') ) : the_row();
			$tab_icon = get_sub_field('tab_icon') ?? null;
			$tab_title = get_sub_field('tab_title') ?? null;
			$tab_title_slug = '';
			if($tab_title) {
				$tab_title_slug = sanitize_title($tab_title);
			}
		?>
			<li class="accordion-item <?php echo $i === 1 ? 'is-active' : ''; ?>" data-accordion-item>
				<a href="#career-category-<?=$tab_title_slug;?>" class="accordion-title uppercase">
					<div class="grid-x">
						<?php if ( $tab_icon ) : ?>
							<div class="text-center icon-wrap">
								<?=wp_get_attachment_image( $tab_icon['id'], 'full' );?>
							</div>
						<?php endif; ?>
						<?php echo esc_html($tab_title); ?>
					</div>
				</a>
				<div class="accordion-content" data-tab-content>
					<?php if ( have_rows('jobs') ) : ?>
					
						<div class="careers-block-job-grid grid-x grid-padding-x align-justify">
					
							<?php while ( have_rows('jobs') ) : the_row(); 
								$title      = get_sub_field('title');
								$job_link   = get_sub_field('job_link');
								$apply_link = get_sub_field('apply_link');
							?>
					
							<div class="careers-block-job cell small-12 tablet-6">
								<div class="grid-x grid-padding-x">
					
									<?php if ( $tab_icon ) : ?>
										<div class="cell shrink icon-wrap">
											<?=wp_get_attachment_image( $tab_icon['id'], 'full', false, [ "class" => "icon"] );?>
										</div>
									<?php endif; ?>
						
									<div class="careers-block-job-info cell auto">
						
										<div class="careers-block-job-info-top">
											<?php echo esc_html($title); ?>
										</div>
										
										<?php if ( $job_link || $apply_link ):?>
											<hr>
											<div class="careers-block-job-info-bottom grid-x grid-padding-x">
												
												<?php if ( $job_link ) : 
													$link = $job_link;
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
												?>
													<div class="cell shrink">
														<a class="see-job" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
															<span>
															<?php if( $link_title && empty($job_link_text) ) {
																echo $link_title;
															} elseif( $job_link_text ) {
																echo $job_link_text;
															}
															;?>
															</span>
															<img src="<?=get_template_directory_uri();?>/assets/images/chev-right-10px.svg">
														</a>
													</div>
												<?php endif; ?>
												
												<?php if ( $job_link && $apply_link ):?>
													<div class="cell shrink pipe"><span></span></div>
												<?php endif;?>
							
												<?php if ( $apply_link ) : 
													$link = $apply_link;
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
												?>
													<div class="cell shrink">
														<a class="see-job" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
															<span>
															<?php if( $link_title && empty($apply_link_text) ) {
																echo $link_title;
															} elseif( $apply_link_text ) {
																echo $apply_link_text;
															}
															;?>
															</span>
															<img src="<?=get_template_directory_uri();?>/assets/images/chev-right-10px.svg">
														</a>
													</div>
												<?php endif; ?>
							
											</div>
										<?php endif;?>
									</div>
								</div>
					
							</div>
					
							<?php endwhile; ?>
					
						</div><!-- .careers-block-job-grid -->
					
					<?php endif; ?>
				</div>
			</li>

		<?php $i++; endwhile; ?>

	</ul>
</div><!-- .careers-block -->

<?php endif; ?>

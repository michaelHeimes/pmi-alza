<?php 

$id = $block['id'] ?? 'careers-block';
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

$class = 'locations-block careers-block module block';
if( !empty($block['className']) ) {
	$class .= ' ' . $block['className'];
}

$locations = get_field('locations') ?? null;

if ( !empty($locations) && is_array($locations) ) : 

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class); ?>">

	<ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs" data-allow-all-closed="true" data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" data-deep-link-smudge-offset="50">

		<?php 
		$i = 1;
		foreach($locations as $block):
			$tab_title = $block['tab_title'] ?? null;
			$tab_title_slug = '';
			if($tab_title) {
				$tab_title_slug = sanitize_title($tab_title);
			}
			$content = $block['content'] ?? null;
			$directions_url = $block['directions_url'] ?? null;

			$images = $block['images'] ?? null;
			
		?>
			<li class="accordion-item <?php echo $i === 1 ? 'is-active' : ''; ?>" data-accordion-item>
				<a href="#alza-group-<?=$tab_title_slug;?>" class="accordion-title uppercase">
					<div class="grid-x">
						<?php echo esc_html($tab_title); ?>
					</div>
				</a>
				<div class="accordion-content" data-tab-content>
					<?php if ( $content || $directions_url || $images ) : ?>
					
						<div class="grid-x grid-padding-x align-justify">
							<?php if ( $content || $directions_url ):?>
								<div class=" cell small-12 medium-5 directions-wrap">
									<?=wp_kses_post( $content );?>
									<?php if($directions_url):
									?>
										<div class="link-wrap">
											<a class="button border grid-x align-middle chevron-link" href="<?php echo esc_url( $directions_url ); ?>" target="_blank">
												<span>Directions</span>
												<svg xmlns="http://www.w3.org/2000/svg" width="7.003" height="11.341" viewBox="0 0 7.003 11.341"><path d="M1.333 0 0 1.333l4.329 4.338L0 10.009l1.333 1.333 5.671-5.671Z" fill="#1b9e8f"/></svg>
											</a>
										</div>
									<?php endif;?>
								</div>
							<?php endif;?>
							<?php if ( $images ): ?> 
								<div class="wp-block-gallery has-nested-images columns-default is-cropped panel-gallery cell small-12 medium-7"> 
									<div class="panel-gallery grid-x align-right"> 
										<?php foreach( $images as $image ): 
											$full_image_url = $image['url']; 
											$img_id         = $image['id']; 
											?> 
											<figure class="wp-block-image size-medium gallery-item not-square"> 
												<a href="<?php echo esc_url($full_image_url); ?>"> 
													<?php echo wp_get_attachment_image( $img_id, 'medium', false, ['class' => 'wp-image-' . $img_id] ); ?>
												</a> 
											</figure> 
										<?php endforeach; ?> 
									</div> 
								</div> 
							<?php endif; ?>
						</div>
					
					<?php endif; ?>
				</div>
			</li>

		<?php $i++; endforeach; ?>

	</ul>
</div><!-- .careers-block -->

<?php endif; ?>

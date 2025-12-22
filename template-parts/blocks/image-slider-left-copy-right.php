<?php 

// Create id attribute allowing for custom "anchor" value.
$id = 'image-slider-left-copy-right-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-slider-left-copy-right';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

$image_images = get_field('image_images') ?? null;
$copy = get_field('copy') ?? null;

$image_slider_autoplay = get_field('image_slider_autoplay') ?? null;
if($image_slider_autoplay) {
	$image_slider_transition_delay = get_field('image_slider_transition_delay') ?? null;
} else {
	$image_slider_transition_delay = null;
}

if( $image_images ):

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<?php if( $image_images ):?>
		<div class="cell small-12 medium-6">
			<div class="overflow-hidden relative">
				<div class="image-gallery-slider" data-autoplay="<?=esc_attr($image_slider_autoplay);?>" data-delay="<?= esc_attr( $image_slider_transition_delay );?>">
					<div class="swiper-wrapper">
						<?php foreach( $image_images as $image ): ?>
							<div class="swiper-slide">
								<div class="img-wrap">
									<?=wp_get_attachment_image( $image['id'], 'large' ); ?>
								</div>
							</div>
						<?php endforeach;?>
					</div>
					<div class="swiper-pagination image-slider"></div>
				</div>
			</div>
		</div>
	<?php endif;?>
	<?php if($copy):?>
		<div class="cell small-12 medium-6">
			<?=wp_kses_post( $copy );?>
		</div>
	<?php endif;?>
</div>
<?php endif;?>
<?php
$footer_cta_title = get_field('footer_cta_title', 'option') ?? null;
$footer_cta_background_image = get_field('footer_cta_background_image', 'option') ?? null;
$footer_cta_title = get_field('footer_cta_title', 'option') ?? null;
$global_phone_number = get_field('global_phone_number', 'option') ?? null;
$global_quote_link = get_field('global_quote_link', 'option') ?? null;
$button_links = get_field('button_links', 'option') ?? null;
?>
<section class="footer-cta has-object-fit">
	<?php 
	$image = $footer_cta_background_image['id'] ?? null;
	$size = 'full';
	if( $image ) {
		echo wp_get_attachment_image( $image, $size );
	}?>
	<div class="grid-container relative">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 large-8 xlarge-6">
				<?php if( !empty( $footer_cta_title ) ):?>
						<h2 class="text-center"><?=$footer_cta_title;?></h2>
				<?php endif;?>
				<?php get_template_part('template-parts/part', 'button-group',
					array(
						'alignment' => 'align-center',
						'button_links' => $button_links,
					),
				);?>
			</div>
		</div>
	</div>
	<hr class="gradient relative">
</section>
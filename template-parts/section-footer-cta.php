<?php
$footer_cta_title = get_field('footer_cta_title', 'option') ?? null;
$footer_cta_background_image = get_field('footer_cta_background_image', 'option') ?? null;
$footer_cta_title = get_field('footer_cta_title', 'option') ?? null;
$global_phone_number = get_field('global_phone_number', 'option') ?? null;
$global_quote_link = get_field('global_quote_link', 'option') ?? null;
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
				<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
					<div class="btns-wrap">
						<div class="grid-x grid-padding-x align-center">
							<?php get_template_part('template-parts/part', 'global-cta-links',
								array(
									'global_phone_number' => $global_phone_number,
									'global_quote_link' => $global_quote_link,	
								),
							);?>
						</div>
					</div>
				<?php endif ;?>
			</div>
		</div>
	</div>
	<hr class="gradient relative">
</section>
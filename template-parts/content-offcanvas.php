<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: https://jointswp.com/docs/off-canvas-menu/
 */
 $global_phone_number = get_field('global_phone_number', 'option') ?? null;
  $global_quote_link = get_field('global_quote_link', 'option') ?? null;
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>

	<div class="inner">
		<ul class="menu grid-x align-right">
			<li class="close-menu"><a id="menu-toggle" data-toggle="off-canvas">
				<svg xmlns="http://www.w3.org/2000/svg" width="36.063" height="36.063" viewBox="0 0 36.063 36.063"><g data-name="Group 347" fill="#1b9e8f"><rect data-name="Rectangle 48" width="47" height="4" rx="2" transform="rotate(45 1.415 3.415)"/><rect data-name="Rectangle 51" width="47" height="4" rx="2" transform="rotate(45 1.415 3.415)"/><rect data-name="Rectangle 52" width="47" height="4" rx="2" transform="rotate(135 17.446 8.883)"/></g></svg>
			</a></li>
		</ul>		
		<?php trailhead_off_canvas_nav(); ?>
		
		<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
			<div class="btns-wrap grid-x grid-padding-x align-center">
				<?php get_template_part('template-parts/part', 'global-cta-links',
					array(
						'global_phone_number' => $global_phone_number,
						'phone_classes' => 'shrink',
						'global_quote_link' => $global_quote_link,	
						'quote_classes' => 'shrink',
					),
				);?>
			</div>
		<?php endif ;?>
				
	</div>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>

</div>

<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: https://jointswp.com/docs/off-canvas-menu/
 */
 $global_phone_number = get_field('global_phone_number', 'option') ?? null;
 $global_quote_link = get_field('global_quote_link', 'option') ?? null;

?>

<div class="top-bar-wrap grid-container fluid">

	<div class="top-bar grid-x grid-padding-x align-middle" id="top-bar-menu">
	
		<div class="top-bar-left float-left cell shrink">
			
			<div class="site-branding show-for-sr">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$trailhead_description = get_bloginfo( 'description', 'display' );
				if ( $trailhead_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $trailhead_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
		
			<ul class="menu">
				<li class="logo"><a href="<?php echo home_url(); ?>">
					<?php 
					$image = get_field('header_logo', 'option');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</a></li>
			</ul>
						
		</div>

		<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
			<div class="top-bar-right cell auto show-for-medium">
				<div class="grid-x grid-padding-x align-right">
					<?php get_template_part('template-parts/part', 'global-cta-links',
						array(
							'global_phone_number' => $global_phone_number,
							'global_quote_link' => $global_quote_link,	
						),
					);?>
				</div>
			</div>
		<?php endif ;?>

		<!-- <div class="menu-toggle-wrap top-bar-right float-right hide-for-tablet">
			<ul class="menu">
				<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
			</ul>
		</div> -->
	</div>
	
</div>
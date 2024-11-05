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
	
		<div class="top-bar-left float-left cell shrink grid-x">
			
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
		
		<div class="top-bar-right cell small-12 medium-auto grid-x flex-dir-column-reverse xlarge-flex-dir-row show-for-large">
			<?php trailhead_top_nav();?>
			<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
				<div class="btns-wrap grid-x grid-padding-x">
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

		<div class="cell menu-toggle-wrap grid-x align-right hide-for-large">
			<ul class="menu">
				<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
			</ul>
		</div>
	</div>
	
</div>
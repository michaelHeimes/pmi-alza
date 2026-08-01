<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: https://jointswp.com/docs/off-canvas-menu/
 */
 $global_phone_number = get_field('global_phone_number', 'option') ?? null;
 $global_quote_link = get_field('global_quote_link', 'option') ?? null;
 $global_notification_bar = get_field('global_notification_bar', 'option') ?? null;
?>
<?php if($global_notification_bar):?>
	<div class="top-bar-alert">
		<div class="grid-container text-center">
			<?=wp_kses_post( $global_notification_bar );?>
		</div>
	</div>
<?php endif;?>
<style>				
	.alza-group-nav {
		background: #000;
		border-bottom: 1px solid #404040;
	}
	.alza-group-nav .agv-link {
		font-size: 1rem;	
		font-family: 'Roboto', sans-serif;
		font-weight: 700;
		padding: .5em 0 0;
		text-align: center;
		transition: color .25s ease;
		margin-bottom: -1px;
	}
	.alza-group-nav  .cell.shrink:not(:first-child) .agv-link {
		margin-left: 25px;
	}
	.alza-group-nav .agv-link span.title {
		padding: 0.3em 0;
		display: block;
	}
	.alza-group-nav .agv-link span.line {
		display: block;
		height: 3px;
		width: 100%;
		background-color: transparent;
	}
	.alza-group-nav a.agv-link:hover,
	.alza-group-nav a.agv-link:focus {
		color: #fff !important;
	}
	
	@media screen and (min-width: 769px) {
		.alza-group-nav .agv-link {
			font-size: 1.125rem;	
		}
		.alza-group-nav .agv-link span.line {
			height: 5px;
		}
	}
	
	.alza-group-nav .agv-link-alza {
		color: #4B9B8F;
	}
	.alza-group-nav .agv-link-alza span.line {
		background-color: #4B9B8F;
	}
	
	.alza-group-nav .agv-link-laserfab {
		color: #E57E39;
	}
	.alza-group-nav .agv-link-laserfab span.line {
		/* background-color: #E57E39; */
	}
	
	.alza-group-nav .agv-link-benco {
		color: #EA2331;
	}
	.alza-group-nav .agv-link-benco span.line {
		/* background-color: #EA2331; */
	}
	
	.alza-group-nav .agv-link-jelkes {
		color: #2E6CAA;
	}
	.alza-group-nav .agv-link-jelkes span.line {
		/* background-color: #2E6CAA; */
	}
</style>
<div class="alza-group-nav">
	<div class="grid-container fluid">
		<div class="grid-x align-right">
			<div class="cell shrink grid-x align-bottom">
				<span class="agv-link agv-link-alza" href="">
					<span class="title">ALZA Group</span>
					<span class="line"></span>
				</span>
			</div>
			<div class="cell shrink grid-x align-bottom">
				<a class="agv-link agv-link-laserfab" href="https://laserfab.net/" target="_blank">
					<span class="title">Laserfab</span>
					<span class="line"></span>
				</a>
			</div>
			<div class="cell shrink grid-x align-bottom">
				<a class="agv-link agv-link-benco" href="https://bencotechnology.com/" target="_blank">
					<span class="title">BenCo</span>
					<span class="line"></span>
				</a>
			</div>
			<div class="cell shrink grid-x align-bottom">
				<a class="agv-link agv-link-jelkes" href="https://jelkes.com/" target="_blank">
					<span class="title">Jelkes</span>
					<span class="line"></span>
				</a>
			</div>
		</div>
	</div>
</div>
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
		
		<div class="top-bar-right cell auto grid-x align-right">
			<?php trailhead_top_nav();?>
			<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
				<div class="btns-wrap grid-x grid-padding-x desktop">
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

		<div class="cell menu-toggle-wrap grid-x align-right">
			<div class="top-bar-right cell auto grid-x align-left">
				<?php trailhead_top_nav();?>
				<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
					<div class="btns-wrap grid-x grid-padding-x mobile">
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
			<ul class="menu">
				<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
			</ul>
		</div>
	</div>
	
</div>
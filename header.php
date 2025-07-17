<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trailhead
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	
	<?php if( !empty( get_field('before_closing_head_tag', 'option') ) ) {
		echo get_field('before_closing_head_tag', 'option');
	}?>
	
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'trailhead' ); ?></a>
		
			<div class="sticky-container">
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
						margin-left: 25px;
						text-align: center;
						transition: color .25s ease;
						margin-bottom: -1px;
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
									<span class="title">Jelke's</span>
									<span class="line"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<header class="site-header" role="banner" data-sticky data-margin-top="0" data-sticky-on="small">
					<?php get_template_part( 'template-parts/nav', 'offcanvas-topbar' ); ?>
				</header><!-- #masthead -->
			</div>
				
				<div class="off-canvas-wrapper">
				
				<!-- Load off-canvas container. Feel free to remove if not using. -->			
				<?php get_template_part( 'template-parts/content', 'offcanvas' ); ?>
				
					<div class="off-canvas-content" data-off-canvas-content>
						<div id="page" class="site">
	
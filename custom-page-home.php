<?php
/**
 * Template name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */

get_header();
$fields = get_fields();

// Intro
$intro_heading = $fields['intro_copy_heading'] ?? null;
$intro_copy = $fields['intro_copy_copy'] ?? null;
$global_phone_number = get_field('global_phone_number', 'option') ?? null;
$global_quote_link = get_field('global_quote_link', 'option') ?? null;

//Difference
$agd_background_image = get_field('agd_background_image') ?? null;
$agd_title = get_field('agd_title') ?? null;
$agd_icon_text_rows = get_field('agd_icon_text_rows') ?? null;

?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<?php get_template_part('template-parts/section', 'hero-slider');?>
				
					<section class="entry-content" itemprop="text">
						<?php if( !empty( $intro_heading ) || !empty( $intro_copy ) ):?>
						<section class="intro-copy">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<div class="cell small-12 large-8 xlarge-6">
										<?php if( !empty( $intro_heading ) ):?>
											<h1 class="h2 text-center">
												<?=wp_kses_post($intro_heading);?>
											</h1>
										<?php endif;?>
										<?php if( !empty( $intro_copy ) ):?>
											<div class="copy-wrap">
												<?=wp_kses_post($intro_copy);?>
											</div>
										<?php endif;?>
									</div>
									<?php if( !empty( $global_phone_number ) || !empty( $global_quote_link ) ) :?>
										<div class="cell small-12 btns-wrap">
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
						</section>
						<?php endif;?>
						<?php if( !empty( $agd_background_image ) || !empty( $agd_title )  || !empty( $agd_icon_text_rows ) ):?>
						<section class="difference relative has-object-fit">
							<?php 
							$image = $agd_background_image['id'] ?? null;
							$size = 'full';
							if( $image ) {
								echo wp_get_attachment_image( $image, $size );
							}?>
							<div class="grid-container relative">
								<div class="grid-x grid-padding-x align-center text-center">
									<div class="cell small-12 large-10 xlarge-8">
										<?php if( !empty( $agd_title ) ):?>
											<h2><?=esc_html( $agd_title );?></h2>
										<?php endif;?>
										<?php if( !empty( $agd_icon_text_rows ) ):?>
											<div class="grid-x grid-padding-x align-justify">
												<?php foreach( $agd_icon_text_rows as $row ):
													$icon = $row['icon'] ?? null;
													$label = $row['label'] ?? null;	
												?>
													<div class="cell small-12 medium-4 grid-x flex-dir-column align-middle align-justify">
														<?php 
														$image = $icon['id'] ?? null;
														$size = 'full';
														if( $image ) {
															echo wp_get_attachment_image( $image, $size );
														}?>
														<?php if( !empty( $label ) ):?>
															<h3><?=wp_kses_post( $label );?></h3>	
														<?php endif;?>
													</div>
												<?php endforeach;?>
											</div>
										<?php endif;?>
									</div>
								</div>
							</div>
						</section>
						<?php endif;?>
					</section> <!-- end article section -->
							
					<footer class="article-footer">
						 <?php wp_link_pages(); ?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();
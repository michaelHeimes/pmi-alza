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
$intro_heading = $fields['intro_copy_heading'] ?? null;
$intro_copy = $fields['intro_copy_copy'] ?? null;
$global_phone_number = get_field('global_phone_number', 'option') ?? null;
$global_quote_link = get_field('global_quote_link', 'option') ?? null;
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
										<div class="cell small-12">
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
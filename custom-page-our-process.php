<?php
/**
 * Template name: Our Process Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */

get_header();
$fields = get_fields();

$rows = $fields['rows'] ?? null;

?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="topper-wrap has-object-fit">
						<img class="topper" src="<?php echo get_template_directory_uri(); ?>/assets/images/alza-interior-topper.webp">
					</div>
					<section class="entry-content relative" itemprop="text">
						<section class="intro-copy entry-content">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<div class="cell small-12 large-12 xlarge-8 xxlarge-8">										
										<?php the_content();?>
									</div>
								</div>
							</div>
						</section>
						<?php if( !empty($rows) && is_array($rows) ):?>
							<section class="rows relative">
								<div class="grid-container">
									<div class="grid-x grid-padding-x align-center">
										<div class="cell small-12 large-12 xlarge-8 xxlarge-8">
											<?php 
											$i = 1; 
											foreach($rows as $row): 
												$icon = $row['icon'] ?? null;
												$title = $row['title'] ?? null;
												$text = $row['text'] ?? null;
											?>
												<div class="process-row grid-x align-middle">
													<div class="bg-swoosh-wrap">
														<img class="bg-swoosh" src="<?=get_template_directory_uri();?>/assets/images/service-row-bg-swoosh.png" aria-hidden="true">
													</div>
													<?php if( $icon ):?>
														<div class="icon-wrap cell small-12 medium-3 tablet-shrink">
															<?=wp_get_attachment_image( $icon['id'], 'full' );?>
														</div>
													<?php endif;?>
						
													<?php if($title || $text):?>
														<div class="text-wrap cell auto">
															<?php if($title):?>
																<h2 class="uppercase">
																	<span class="color-mint"><?=sprintf('%02d', $i);?></span> 
																	<?=wp_kses_post( $title );?>
																</h2>
															<?php endif;?>
															<?php if($text):?>
																<?=wp_kses_post( $text );?>
															<?php endif;?>
														</div>
													<?php endif;?>
													<div class="cell small-12">
														<div class="grid-x">
															<div class="arrow-wrap" style="visibility: hidden;">
																<?php if($i % 2 === 0):?>
																	<svg xmlns="http://w3.org" width="646.074" height="232.818" viewBox="0 0 646.074 232.818">
																		<defs>
																			<mask id="mask-<?= $i; ?>">
																				<path class="mask-track" d="M 2.5,20 L 2.5,143 L 636,143 L 636,225" stroke="white" stroke-width="35" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
																			</mask>
																		</defs>
																		<g mask="url(#mask-<?= $i; ?>)">
																			<path data-name="2ic_expand_more_24px" d="m643.188 217.649-9.4 9.376-9.393-9.376-2.887 2.887 12.283 12.283 12.283-12.283Z" fill="#1b9e8f"/>
																			<path d="M636.512 140.5H616.5v5h20.012ZM636 208h-5v20h5Zm0-28h-5v20h5Zm0-28h-5v19.988h5Zm-27.504-11.5h-19.984v5h19.984Zm-27.992 0h-20v5h20Zm-28 0h-19.992v5H552.5Zm-27.992 0h-20v5h20Zm-28 0h-20v5h20Zm-28 0h-20v5h20Zm-28 0h-20v5h20Zm-27.992 0h-20.008v5h20Zm-28 0h-20v5h19.992Zm-28 0h-20v5h20Zm-28 0h-20v5h20Zm-27.992 0h-20v5h19.984Zm-28 0h-20v5h20Zm-28 0h-20.016v5H244.5Zm-27.992 0h-20v5h19.976Zm-28 0h-20v5h20Zm-28 0h-20v5h19.976Zm-28 0h-20.008v5h19.976Zm-27.992 0h-20v5h19.968Zm-28 0h-20v5h19.968Zm-28 0h-20v5h20Zm-27.992 0h-20v5h19.96ZM5.044 112H.012v20h4.992Zm0-27.992H.012v19.988h4.992Zm0-28h-5V76h5Zm0-27.992h-5v19.976h5Zm0-28h-5V20h5Z" fill="#1b9e8f"/>
																		</g>
																	</svg>
																<?php else:?>
																	<svg xmlns="http://w3.org" width="646.006" height="233.818" viewBox="0 0 646.006 233.818">
																		<defs>
																			<mask id="mask-<?= $i; ?>">
																				<path class="mask-track" d="M 643.5,20 L 643.5,143 L 10,143 L 10,225" stroke="white" stroke-width="35" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
																			</mask>
																		</defs>
																		<g mask="url(#mask-<?= $i; ?>)">
																			<path d="M9.497 140.494h20.012v5H9.497Zm.512 67.5h5v20h-5Zm0-28h5v20h-5Zm0-27.992h5v19.992h-5Zm27.5-11.508h19.988v5H37.509Zm27.992 0h20v5h-20Zm28 0h19.996v5H93.509Zm27.992 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20v5h-20Zm27.992 0h20.012v5h-20.008Zm28 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20v5h-20Zm27.992 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20.02v5h-19.988Zm27.992 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20.008v5h-20.008Zm27.992 0h20v5h-20Zm28 0h20v5h-20Zm28 0h20v5h-20Zm27.992 0h20v5h-20Zm15.508-28.5h4.992v20h-4.992Zm0-27.992h4.992v19.988h-4.992Zm0-28h5v20h-5Zm0-27.992h5v19.984h-5Zm0-28h5v20h-5Z" fill="#1b9e8f"/>
																			<path d="m21.68 218.649-9.4 9.376-9.393-9.376L0 221.536l12.283 12.283 12.283-12.283Z" fill="#1b9e8f"/>
																		</g>
																	</svg>
																<?php endif;?>
															</div>

														</div>
													</div>
												</div>
											<?php 
											$i++; 
											endforeach;
											?>
										</div>
									</div>
								</div>
							</section>
						<?php endif;?>

					</section> <!-- end article section -->
							
					<footer class="article-footer">
						<?php get_template_part('template-parts/section', 'footer-cta');?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();
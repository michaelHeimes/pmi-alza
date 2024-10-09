<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trailhead
 */
$global_address = get_field('global_address', 'option') ?? null;
$global_telephone_number = get_field('global_telephone_number', 'option') ?? null;
$global_email_address = get_field('global_email_address', 'option') ?? null;
$logo = get_field('footer_logo', 'option');
$copyright_text = get_field('footer_copyright_text', 'option') ?? null;
$subfooter_links = get_field('footer_subfooter_links', 'option') ?? null;
?>

				<footer id="colophon" class="site-footer">
					<div class="footer-info">
						<div class="grid-container">
							<div class="grid-x grid-padding-x align-center">
								<?php 
								$image = $logo['id'] ?? null;
								$size = 'full';
								if( $image ) :?>
									<div class="footer-col cell small-12 medium-shrink">
										<?=wp_get_attachment_image( $image, $size );?>
									</div>
								<?php endif;?>
								<?php if( !empty( $global_address ) ):?>
									<div class="footer-col cell small-12 medium-shrink">
										<p><?=wp_kses_post($global_address);?></p>
									</div>
								<?php endif;?>
								<?php if( !empty( $global_telephone_number ) || !empty( $global_email_address ) ):?>
									<div class="footer-col cell small-12 medium-shrink">
										<?php if( !empty( $global_telephone_number ) ):?>
											<div class="p">
												Tel: <a href="tel:<?=esc_attr( $global_email_address );?>">
													<?=esc_attr( $global_email_address );?>
												</a>
											</div>
										<?php endif;?>
										<?php if( !empty( $global_email_address ) ):?>
											<div class="p">
												Email: <a href="mailto:<?=esc_attr( $global_email_address );?>">
													<?=esc_attr( $global_email_address );?>
												</a>
											</div>
										<?php endif;?>
									</div>
								<?php endif;?>
								<?php if ( has_nav_menu( 'social-links' ) ) :?>
									<div class="footer-col cell small-12 medium-shrink">
										<?php trailhead_social_links();?>
									</div>
								<?php endif;?>
							</div>
						</div>
					</div>
					<div class="site-info text-center tablet-text-left">
						<div class="grid-container fluid">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 tablet-auto">
									<p>
										&copy;<?= date("Y");?>
										<?php if( !empty( $copyright_text ) ){
											echo $copyright_text;	
										};?>
										<?php if( !empty($subfooter_links) ):
											$i = 1; foreach($subfooter_links as $subfooter_link):	
											$link = $subfooter_link['link'] ?? null;
												if( $link ): 
										?>
											<span>
												<?php if( $i > 1 ):?>
													<span>|</span>
												<?php endif;?>
												<?php 
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											</span>
										<?php endif; $i++; endforeach; endif;?>
									</p>
								</div>
								<div class="cell small-12 tablet-shrink">
									<p>
										Website by:
										<a class="uppercase" href="https://gopipedream.com/" target="_blank">
											Pipedream
										</a>
									</p>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
					
			</div><!-- #page -->
			
		</div>  <!-- end .off-canvas-content -->
							
	</div> <!-- end .off-canvas-wrapper -->
					
<?php wp_footer(); ?>

</body>
</html>

<?php
$page_id = '';
$title = '';
$post_content = '';

if( is_home() ) {
	$page_id = get_option('page_for_posts');
	$media_slider_autoplay = get_field('media_slider_autoplay', $page_id) ?? null;
	$media_slider_transition_delay = get_field('media_slider_transition_delay', $page_id) ?? null;
	$media_slides = get_field('media_slides', $page_id) ?? null;
	$post_content = get_post_field( 'post_content', $page_id ) ?? null;
} else {
	$page_id = get_queried_object() ?? null;
	$media_slider_autoplay = get_field('media_slider_autoplay', $page_id) ?? null;
	$media_slider_transition_delay = get_field('media_slider_transition_delay', $page_id) ?? null;
	$media_slides = get_field('media_slides', $page_id) ?? null;
	$title = get_the_archive_title();	
	$term_desc = $page_id->category_description ?? null;
	if( $term_desc ) {
		$post_content = wpautop( $page_id->category_description ) ?? null;
	}
	if( is_archive('category') ) {
		$title = $page_id->name;
		$term = get_queried_object();
		$hero_image = get_field('hero_image', $term) ?? null;
	}

}


?>

	<main id="primary" class="site-main">
		<div class="topper-wrap has-object-fit">
			<img class="topper" src="<?php echo get_template_directory_uri(); ?>/assets/images/alza-interior-topper.webp">
		</div>
		<div class="blog-primary entry-content relative">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 tablet-11 large-10">
						<?php if( $media_slides ) {
							get_template_part('template-parts/part', 'media-slider',
								array(
									'media_slider_autoplay' => $media_slider_autoplay,
									'media_slider_transition_delay' => $media_slider_transition_delay,
									'media_slides' => $media_slides,
								),
							);
						}?>
						<?php if( is_archive('category') && $hero_image ):?>
							<div class="heri-img">
								<?=wp_get_attachment_image( $hero_image['id'], 'full');?>
							</div>
						<?php endif;?>
					</div>
					<div class="cell small-12 tablet-11 large-10 xlarge-8">
						<?php if( is_archive('category') ):?>
							<h1>
								Category: <?=$title;?>
							</h1>
						<?php endif;?>
						<div class="block-content">
							<?=wp_kses_post($post_content);?>
						</div>
						<?php
						if ( have_posts() ) :?>
							
							<?php
							echo '<div class="posts-rows">';
	
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();
					
									/*
									 * Include the Post-Type-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
									 */
										get_template_part( 'template-parts/loop', 'post' );
								endwhile;
							
							echo '</div>';
							
							echo '<div class="grid-x grid-padding-x align-center">';
								echo '<div class="inner cell small-12 medium-10 tablet-4 relative font-header uppercase">';
									trailhead_page_navi();
								echo '</div>';
							echo '</div>';
				
						else :
				
							get_template_part( 'template-parts/content', 'none' );
				
						endif;
						?>
						
						<?php 
							if( get_post_type() == 'post' ) {
								get_template_part('template-parts/part', 'blog-footer-nav');
							}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
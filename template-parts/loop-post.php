<?php
/**
 * Template part for displaying posts in an archive grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */
$excerpt = get_the_excerpt();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-row'); ?>>
	<a class="color-white" href="<?=esc_url( get_permalink() );?>" rel="bookmark">
		<div class="grid-x grid-padding-x">
			<div class="thumb-wrap cell small-12 medium-4">
				<div class="inner">
					<?php the_post_thumbnail('post-card'); ?>
				</div>
			</div>
			
			<div class="cell small-12 medium-8">
				<header class="entry-header">
					<?php
						the_title( '<h2 class="h3 entry-title color-white">', '</h2>' );
					?>
				</header><!-- .entry-header -->
				<?php if( $excerpt ):?>
					<section class="excerpt">
						<p>
							<?=wp_kses_post( wp_trim_words($excerpt, 44) );?>
						</p>
					</section>
				<?php endif;?>
				<footer class="entry-footer weight-regular">
					<div class="button m-0 text-center">
						Read More
					</div>
				</footer><!-- .entry-footer -->
			</div>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
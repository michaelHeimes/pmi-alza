<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('relative'); ?>>
	<img class="topper" src="<?php echo get_template_directory_uri(); ?>/assets/images/alza-interior-topper.webp">
	<section class="entry-content position-relative">
        <div class="grid-container relative">
            <div class="grid-x grid-padding-x align-center">
                <div class="cell small-12 large-10 xlarge-9 xxlarge-8">
                    <?php the_content();?>
		            <?php get_template_part('template-parts/loop-modules');?>
                </div>
            </div>
        </div>
	</section><!-- .entry-content -->
        
<footer class="article-footer">
        <?php get_template_part('template-parts/section', 'footer-cta');?>
</footer> <!-- end article footer -->

</article><!-- #post-<?php the_ID(); ?> -->

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
    <div class="topper-wrap has-object-fit">
    	<img class="topper" src="<?php echo get_template_directory_uri(); ?>/assets/images/alza-interior-topper.webp">
    </div>
	<section class="entry-content position-relative">
        <div class="grid-container relative">
            <div class="grid-x grid-padding-x align-center">
                <?php if( has_post_thumbnail() ):?>
                    <div class="thumb-wrap cell small-12 large-12 xlarge-10 xxlarge-10">
                        <?php the_post_thumbnail('full');?>
                    </div>
                <?php endif;?>
                <div class="content-wrap cell small-12 large-10 xlarge-9 xxlarge-8">
                    <?php the_content();?>
                </div>
            </div>
        </div>
	</section><!-- .entry-content -->
        
<footer class="article-footer">
    <?php get_template_part('template-parts/section', 'footer-cta');?>
</footer> <!-- end article footer -->

</article><!-- #post-<?php the_ID(); ?> -->

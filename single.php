<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trailhead
 */
 
 $banner_slider_autoplay = get_field('banner_slider_autoplay') ?? null;
 $banner_slider_transition_delay = get_field('banner_slider_transition_delay') ?? null;
 $banner_slides = get_field('banner_slides') ?? null;
 $post_content = get_post_field( 'post_content') ?? null;
get_header();
?>

    <main id="primary" class="site-main">
        <div class="topper-wrap has-object-fit">
            <img class="topper" src="<?php echo get_template_directory_uri(); ?>/assets/images/alza-interior-topper.webp">
        </div>
        <?php
        while ( have_posts() ) :
            the_post();?>
            <div class="entry-content relative">
                <?php if( $banner_slides ):?>
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x align-center">
                            <div class="cell small-12 tablet-11 large-10">
                                <?php get_template_part('template-parts/part', 'banner-slider',
                                        array(
                                            'banner_slider_autoplay' => $banner_slider_autoplay,
                                            'banner_slider_transition_delay' => $banner_slider_transition_delay,
                                            'banner_slides' => $banner_slides,
                                        ),
                                );?>
                            </div>
                        </div>    
                    </div>
                <?php endif;?>
                <div class="grid-container">
                    <div class="grid-x grid-padding-x align-center">
                        <div class="cell small-12 tablet-11 large-10 xlarge-8">
                            <h1><?php the_title();?></h1>
                            
                            <?php the_content();?>
                            
                            <footer class="entry-footer">
                                <div class="grid-x grid-padding-x align-center">
                                    <div class="cell small-10 large-8 xlarge-6">
                                        <?php
                                        $prev_link = get_previous_post_link(
                                            '<li class="prev-link">%link</li>',
                                            '<svg xmlns="http://www.w3.org/2000/svg" width="9.609" height="15.561" style="transform:rotate(180deg)"><path d="M1.829 0 0 1.828 5.939 7.78 0 13.733l1.829 1.828 7.781-7.78Z" fill="#1B9E8F"></path></svg> Prev'
                                        );
                                        
                                        $next_link = get_next_post_link(
                                            '<li class="next-link">%link</li>',
                                            'Next <svg xmlns="http://www.w3.org/2000/svg" width="9.609" height="15.561"><path d="M1.829 0 0 1.828 5.939 7.78 0 13.733l1.829 1.828 7.781-7.78Z" fill="#1B9E8F"></path></svg>'
                                        );
                                        
                                        if ( $prev_link || $next_link ) : ?>
                                            <ul class="pagination nav-links single-post font-body uppercase">
                                                <?php echo $prev_link; ?>
                                                <?php echo $next_link; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </footer><!-- .entry-footer -->
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="gradient relative">
            
            <?php get_template_part('template-parts/section', 'footer-cta');
    
        endwhile; // End of the loop.
        ?>
    
    </main><!-- #main -->

<?php
get_footer();

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package trailhead
 */

get_header();
?>
	<div class="content">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x align-center">
				<div class="cell small-12 medium-11 tablet-10 large-8 xlarge-6">
				
					<main id="primary" class="site-main height-100" style="padding-top: 3rem; min-height: 400px;">
				
						<article class="content-not-found grid-x flex-dir-column align-center height-100">
						
							<header class="article-header">
								<h1>404</h1>
							</header> <!-- end article header -->
						
							<section class="entry-content">
								<p>The page you're looking for doesn't exist. Please use the navigation at the top of the page or <a href="<?php echo home_url(); ?>">return to the home page.</a></p>
							</section> <!-- end article section -->
						
						
						</article> <!-- end article -->
				
					</main><!-- #main -->
					
				</div>
			</div>
		</div>
	</div><!-- end content -->

<?php
get_footer();

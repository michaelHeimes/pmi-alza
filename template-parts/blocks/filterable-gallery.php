<style>
.filterable-gallery {
	margin: 0px auto;
	width: 100%;
	max-width: 100%;
}
.filterable-gallery .filters-button-group {
	margin-bottom: 16px;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
		-ms-flex-pack: center;
			justify-content: center;
	-ms-flex-wrap: wrap;
		flex-wrap: wrap;
}
.filterable-gallery .filters-button-group button {
	cursor: pointer;
}
.filterable-gallery .fg-gallery-item {
	position: relative;
	padding: 2px;
}
.grid-item,
.grid-sizer {
	width: 25%;
	@media (min-width: 768px) {
	  width: 20%;
	}
}
.grid-item {
	float: left;
	height: auto;
	padding-bottom: 25%;
	@media (min-width: 768px) {
	  padding-bottom: 20%;
	}
}
/* .grid-item:nth-child(7n+3) { 
	width: 40%;
}
.grid-item:nth-child(7n+4) { 
	height: 300px;
	width: 20%;
}
.grid-item:nth-child(7n+5) { 
	width: 40%;
	height: 300px;
}
.grid-item:nth-child(7n+6) { 
	width: 20%;
}
.grid-item:nth-child(7n+7) { 
	width: 20%;
} */
.filterable-gallery .fg-gallery-item a {
	display: block;
	position: relative;
	width: 100%;
	height: 100%;
	padding-bottom: 100%;
}
.filterable-gallery .fg-gallery-item a img {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	-o-object-fit: cover;
	   object-fit: cover;
}
.filterable-gallery .fg-gallery-item img {
	margin: 0;
}
.filterable-gallery .fg-gallery-item svg {
	width: 80px;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
	opacity: .7;
}
.filterable-gallery .button-block {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
		-ms-flex-pack: center;
			justify-content: center;
}
.filterable-gallery .filters-button-group button {
	cursor: pointer;
	margin: 8px;
	text-transform: uppercase;
	padding: 0.6em 1em 0.55em;
	transition: all .25s ease;
}
.filterable-gallery .filters-button-group button:hover {
}
/* .filterable-gallery .button-block .button a {
	border: 1.5px solid #EB4229;
	padding: 10px 40px;
	display: block;
} */
.fg-lightbox {
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999998;
	text-align: center;
	position: fixed;
	z-index: 99999;
	visibility: hidden;
	z-index: -1;
	overflow: hidden;
}
.fg-lightbox.show {
	visibility: visible;
	z-index: 99999;
}
.fg-lightbox-bg {
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	min-height: 100vh;
	background-color: rgba(0,0,0,.8);
	opacity: 0;
	-webkit-transition: opacity .3s ease;
	-o-transition: opacity .3s ease;
	transition: opacity .3s ease;
}
.fg-lightbox.show .fg-lightbox-bg {
	opacity: 1;
}
.filterable-gallery .close-btn-wrap,
.filterable-gallery .swiper-container {
	max-width: 1400px;
	margin-left: auto;
	margin-right: auto;
}
.filterable-gallery  .close-btn-wrap {
	width: calc(100% - 16px);
	margin: auto;
	text-align: right;
	position: relative;
	text-align: right;
	position: relative;
	z-index: 1;
}
.filterable-gallery .close-btn-wrap button {
	cursor: pointer;
	background: transparent;
	border: 0;
	-webkit-box-shadow: 0 0 0;
			box-shadow: 0 0 0;
	font-family: inherit;
	font-size: 100%;
	line-height: 1.15;
	margin: 0;
	overflow: visible;
	-webkit-appearance: button;
}
.slider-wrap {
	padding-top: 32px;
	height: calc(100% - 32px);
	overflow: auto;
}
.fg-gallery-slider {
	height: 100%;
	-webkit-transform: translateY(30px);
		-ms-transform: translateY(30px);
			transform: translateY(30px);
	position: absolute;
	left: 50000rem;
	left: 200vw;
	opacity: 0;
	-webkit-transition: opacity .3s ease, left 0s .3s;
	-o-transition: opacity .3s ease, left 0s .3s;
	transition: opacity .3s ease, left 0s .3s;
}
.fg-gallery-slider.show {
	position: static;
	opacity: 1;
	-webkit-transform: translateY(0px);
		-ms-transform: translateY(0px);
			transform: translateY(0px);
	-webkit-transition: opacity .3s ease .35s, -webkit-transform .3s ease .35s;
	transition: opacity .3s ease .35s, -webkit-transform .3s ease .35s;
	-o-transition: opacity .3s ease .35s, transform .3s ease .35s;
	transition: opacity .3s ease .35s, transform .3s ease .35s;
	transition: opacity .3s ease .35s, transform .3s ease .35s, -webkit-transform .3s ease .35s;
}
.filterable-gallery .swiper-container {
	position: relative;
}
.filterable-gallery .swiper-container .swiper-slide {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
		flex-wrap: wrap;
	height: auto;
	-webkit-box-pack: center;
		-ms-flex-pack: center;
			justify-content: center;
	-webkit-box-align: center;
		-ms-flex-align: center;
			align-items: center;
	flex-wrap: wrap;
	width: 100%;
	max-height: calc(100vh - 110px);
}
.filterable-gallery .swiper-container .swiper-slide p {
	color: #fff;
	text-align: center;
	max-width: 960px;
	margin: auto;
}
.filterable-gallery .swiper-container .swiper-slide img {
	margin: 8px 0 0;
	width: auto;
	max-height: calc(100vh - 140px);
}
.swiper-button-prev:after, 
.swiper-button-next:after {
	color: #fff;
}
/* .swiper-button-prev, 
.swiper-button-next,
.swiper-button-prev:after, 
.swiper-button-next:after {
	width: 35px;
	height: 56px;
}
.swiper-button-prev:after, 
.swiper-button-next:after {
	font-size: 0;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
}

.swiper-button-prev:after {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22.575' height='36.909' viewBox='0 0 22.575 36.909'%3E%3Cpath id='right-arrow-2' d='M18.279,0,0,18.455,18.279,36.909l4.3-4.337L8.622,18.455,22.575,4.337Z' transform='translate(0 0)' fill='%23fff' fill-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
}

.swiper-button-next:after {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='22.575' height='36.909' viewBox='0 0 22.575 36.909'%3E%3Cpath id='right-arrow-2' d='M18.279,36.909,0,18.454,18.279,0l4.3,4.337L8.622,18.454,22.575,32.572Z' transform='translate(22.575 36.909) rotate(180)' fill='%23fff' fill-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
} */

@-webkit-keyframes rotate360 {
  from {
	-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
  }
  to {
	-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
  }
}

@keyframes rotate360 {
  from {
	-webkit-transform: rotate(0deg);
			transform: rotate(0deg);
  }
  to {
	-webkit-transform: rotate(360deg);
			transform: rotate(360deg);
  }
}
.filterable-gallery .swiper-lazy-preloader {
	-webkit-animation: rotate360 0.5s linear infinite;
			animation: rotate360 0.5s linear infinite;
}
.filterable-gallery .swiper-button-prev, 
.filterable-gallery .swiper-rtl .swiper-button-next {
	position: absolute;
}
.filterable-gallery .swiper-rtl .swiper-button-next {
	right: 0;
}
.video-wrap {
	width: 100%;
	max-width: 85%;
	max-width: 140vh;
}
.video-wrap .responsive-embed {
	margin: auto;
	position: relative;
	height: 0;
	margin-bottom: 1rem;
	padding-bottom: 56.25%;
	overflow: hidden;
	width: calc(100% - 150px);
	max-height: calc(100vh - 110px);
	max-width: 1400px;
}
.video-wrap .responsive-embed iframe,
.video-wrap .responsive-embed video {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.wp-block-acf-filterable-gallery .gallery-grid.grid {
	display: flex;
}

.wp-block-acf-filterable-gallery .grid-sizer {
	display: none;
}

.wp-block-acf-filterable-gallery .grid-item {
	float: none;
}

.wp-block-acf-filterable-gallery .grid-item a {
	position: relative;
	height: auto;
	padding-bottom: 100%;
}

</style>

<section class="filterable-gallery">
	<?php			
	$args = array(  
		'post_type' => 'media-gallery-item',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	);
	
	$loop = new WP_Query( $args ); 
	
	if ( $loop->have_posts() ) : ?>
		
		<?php
		$terms = get_terms( array(
			'taxonomy' => 'gallery-item-type',
			'hide_empty' => true,
		) );
		
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			echo '<div class="button-group filters-button-group">';
			echo '<button class="button is-checked" data-filter="*">All</button>';
			foreach ( $terms as $term ) {
				echo '<button class="button" data-filter=".'  . esc_html( $term->slug ) .  '">' . esc_html( $term->name ) . '</button>';
			}
			echo '</div>';
		}
		?>
		
		<div class="gallery-grid grid">
			<div class="grid-sizer"></div>
			<?php while ( $loop->have_posts() ) : $loop->the_post();
				$postID = get_the_ID();
				$type = get_field('media_type', $postID);
				$terms = get_the_terms( $postID, 'gallery-item-type' );
				$term_names = '';
				if ( $terms && ! is_wp_error( $terms ) ) {
					$term_names = array();
					foreach ( $terms as $term ) {
						$term_names[] = $term->slug;
					}
				};	
			?>			
				<div class="fg-gallery-item grid-item <?php if( $term_names ) { echo implode( ' ', $term_names ); };?>">
					<a href="#item-<?php echo esc_attr( $postID );?>" data-currenttype=".all">
					<?php if( !empty( get_field('image', $postID) ) ) {
						$imgID = get_field('image', $postID)['ID'];
						$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
						$img = wp_get_attachment_image( $imgID, 'large', false, [ "class" => "", "alt"=>$img_alt] );
						echo $img;
					}
					if( $type == 'video' ) {
						echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c7.6-4.2 16.8-4.1 24.3 .5l144 88c7.1 4.4 11.5 12.1 11.5 20.5s-4.4 16.1-11.5 20.5l-144 88c-7.4 4.5-16.7 4.7-24.3 .5s-12.3-12.2-12.3-20.9V168c0-8.7 4.7-16.7 12.3-20.9z" fill="#fff"/></svg>';
					}
					?>
					</a>
				</div>
			<?php
			endwhile;?>
		</div>
		
		<div class="fg-lightbox">
			<div class="slider-wrap">
				<div class="close-btn-wrap">
					<button type="button">
						<svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" fill="#fff"/></svg>
					</button>
				</div>
				<div class="fg-lightbox-bg"></div>
					<?php
					$terms = get_terms( array(
						'taxonomy' => 'gallery-item-type',
						'hide_empty' => true,
						//'number' => 1,
					) );
					
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):
						foreach ( $terms as $term ):
							$term_slug = $term->slug;
						?>
							<?php			
							$args = array(  
								'post_type' => 'media-gallery-item',
								'post_status' => 'publish',
								'posts_per_page' => -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'gallery-item-type',  // Replace with your actual taxonomy name
										'field' => 'slug',
										'terms' => $term_slug,  // Replace with your desired term slug
									)
								)
							);
							
							$loop = new WP_Query( $args ); 

							if ( $loop->have_posts() ) : ?>
								<div class="fg-gallery-slider" data-fgslider=".<?= $term_slug;?>">
									<div class="swiper-container">
										<div class="swiper-wrapper">
											
											<?php $i = 0; while ( $loop->have_posts() ) : $loop->the_post();
												$postID = get_the_ID();
												$type = get_field('media_type', $postID);
											?>	
											<div class="swiper-slide" data-item="item-<?= esc_attr( $postID );?>" data-swiper-slide-index="<?= esc_attr( $i );?>">
												
												<?php if( $type == 'image' && !empty( get_field('image', $postID) ) ) {
													$imgID = get_field('image', $postID)['ID'];
													$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
													$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt, "loading" => "lazy"] );
													echo '<div>';
													echo $img;
													if( !empty( get_field('imagevideo_caption', $postID ) ) ) {
														echo '<p>' . esc_attr( get_field('imagevideo_caption', $postID) ) . '</p>';
													};
													echo '</div>';
												}?>
												
												<?php
												
												if( $type == 'video' && get_field('video_url', $postID) ) {
												
													// Load value.
													$iframe = get_field('video_url', $postID);
													
													// Use preg_match to find iframe src.
													preg_match('/src="(.+?)"/', $iframe, $matches);
													$src = $matches[1];
													
													// Add extra parameters to src and replace HTML.
													$params = array(
														'controls'  	 => 1,
														'hd'        	 => 1,
														'autohide'  	 => 1,
														'rel' 			 => 0,
													);
													$new_src = add_query_arg($params, $src);
													$iframe = str_replace($src, $new_src, $iframe);
													
													// Add extra attributes to iframe HTML.
													$attributes = 'frameborder="0"';
													$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
													
													// Display customized HTML.
													echo '<div class="video-wrap">';
													echo '<div class="responsive-embed">';
													echo $iframe;
													echo '</div>';
													if( !empty( get_field('imagevideo_caption', $postID ) ) ) {
														echo '<p>' . esc_attr( get_field('imagevideo_caption', $postID) ) . '</p>';
													};
													echo '</div>';
												}
												?>
												
											</div>
											<?php $i++; endwhile;?>
											
										</div>
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
									</div>
								</div>
							<?php endif;
							wp_reset_postdata(); 
							?>
								
								
								
						<?php endforeach;
					endif;?>
					
					<?php			
					$args = array(  
						'post_type' => 'media-gallery-item',
						'post_status' => 'publish',
						'posts_per_page' => -1,
					);
					
					$loop = new WP_Query( $args ); 
					
					if ( $loop->have_posts() ) : ?>
						<div class="fg-gallery-slider" data-fgslider=".all">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									
									<?php $i = 0; while ( $loop->have_posts() ) : $loop->the_post();
										$postID = get_the_ID();
										$type = get_field('media_type', $postID);
									?>	
									<div class="swiper-slide" data-item="item-<?= esc_attr( $postID );?>" data-swiper-slide-index="<?= esc_attr( $i );?>">
										
										<?php if( $type == 'image' && !empty( get_field('image', $postID) ) ) {
											$imgID = get_field('image', $postID)['ID'];
											$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
											$img = wp_get_attachment_image( $imgID, 'full', false, [ "class" => "", "alt"=>$img_alt, "loading" => "lazy"] );
											echo '<div>';
											echo $img;
											if( !empty( get_field('imagevideo_caption', $postID ) ) ) {
												echo '<p>' . esc_attr( get_field('imagevideo_caption', $postID) ) . '</p>';
											};
											echo '</div>';
										}?>
										
										<?php
										
										if( $type == 'video' && get_field('video_url', $postID) ) {
										
											// Load value.
											$iframe = get_field('video_url', $postID);
											
											// Use preg_match to find iframe src.
											preg_match('/src="(.+?)"/', $iframe, $matches);
											$src = $matches[1];
											
											// Add extra parameters to src and replace HTML.
											$params = array(
												'controls'  	 => 1,
												'hd'        	 => 1,
												'autohide'  	 => 1,
												'rel' 			 => 0,
											);
											$new_src = add_query_arg($params, $src);
											$iframe = str_replace($src, $new_src, $iframe);
											
											// Add extra attributes to iframe HTML.
											$attributes = 'frameborder="0"';
											$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
											
											// Display customized HTML.
											echo '<div class="video-wrap">';
											echo '<div class="responsive-embed">';
											echo $iframe;
											echo '</div>';
											if( !empty( get_field('imagevideo_caption', $postID ) ) ) {
												echo '<p>' . esc_attr( get_field('imagevideo_caption', $postID) ) . '</p>';
											};
											echo '</div>';
										}
										?>
										
									</div>
									<?php $i++; endwhile;?>
									
								</div>
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
							</div>
						</div>
					<?php endif;
					wp_reset_postdata(); 
					?>
			</div>
		</div>
		
	<?php endif;
	wp_reset_postdata(); 
	?>
	
</section>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		
	// Filterable Gallery
	const filterableGalleries = document.querySelectorAll('.filterable-gallery');
	
	if(filterableGalleries) {
	
	  filterableGalleries.forEach(function(filterableGallery, index) {
		
		const $grid = filterableGallery.querySelector('.grid');
		
		const galleryItems = filterableGallery.querySelectorAll('.fg-gallery-item a');
		const lightBox = filterableGallery.querySelector('.fg-lightbox');
		
		// init Isotope
		const iso = new Isotope( $grid , {
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			columnWidth: '.grid-sizer',
		  }
		});
		
		// filter functions
		
		// bind filter button click
		const filtersElem = filterableGallery.querySelector('.filters-button-group');
		if (filtersElem) {
		  filtersElem.addEventListener( 'click', function( event ) {
	  
			if ( !matchesSelector( event.target, 'button' ) ) {
			  return;
			}
			let filterValue = event.target.getAttribute('data-filter');
			
			galleryItems.forEach(function(galleryItem, index) {
			  
			  if( filterValue == '*' ) {
				galleryItem.setAttribute('data-currenttype', '.all');
			  } else {
				galleryItem.setAttribute('data-currenttype', filterValue);
			  }
	  
			});
			
			
			// use matching filter function
			filterValue = filterValue;
			iso.arrange({ filter: filterValue });
		  });
	  }
		
		// change is-checked class on buttons
		const buttonGroups = filterableGallery.querySelectorAll('.button-group');
		for ( let i=0, len = buttonGroups.length; i < len; i++ ) {
		  const buttonGroup = buttonGroups[i];
		  radioButtonGroup( buttonGroup );
		}
		
		function radioButtonGroup( buttonGroup ) {
		  buttonGroup.addEventListener( 'click', function( event ) {
			// only work with buttons
			if ( !matchesSelector( event.target, 'button' ) ) {
			  return;
			}
			buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
			event.target.classList.add('is-checked');
		  });
		}
		
		
		const gallerySliders = filterableGallery.querySelectorAll('.fg-gallery-slider');
		
		let swiper = '';
		
		gallerySliders.forEach((gallerySlider) => {
		  if (gallerySlider) {
			swiper = new Swiper(gallerySlider.querySelector('.swiper-container'), {
			  spaceBetween: 0,
			  autoHeight: true,
			  loop: true,
			  effect: "fade",
			  fadeEffect: { crossFade: true },
			  navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
			  keyboard: {
				  enabled: true,
			  },
			});
			gallerySlider.swiper = swiper;
		  }
		  
		  swiper.on('slideChange', function () {
			  const activeIndex = swiper.activeIndex;
			  const previousIndex = activeIndex === 0 ? swiper.slides.length - 1 : activeIndex - 1;
			  const nextIndex = activeIndex === swiper.slides.length - 1 ? 0 : activeIndex + 1;
			  
			  const previousSlide = swiper.slides[previousIndex];
			  const activeSlide = swiper.slides[activeIndex];
			  const nextSlide = swiper.slides[nextIndex];
			
			if( previousSlide.querySelector('.responsive-embed iframe') ) {
				const embed = previousSlide.querySelector('.responsive-embed');
				const iframe = embed.innerHTML;
				embed.innerHTML = iframe;
			}
			
			if( nextSlide.querySelector('.responsive-embed iframe') ) {
				const embed = nextSlide.querySelector('.responsive-embed');
				const iframe = embed.innerHTML;
				embed.innerHTML = iframe;
			}
	
		  });
		  
		});
	
		galleryItems.forEach(function(galleryItem) {
		  galleryItem.addEventListener('click', function(event) {
			event.preventDefault();
			lightBox.classList.add('show');
		
			const currentType = galleryItem.getAttribute('data-currentType');
			const matchingSlider = document.querySelector(`.fg-gallery-slider[data-fgslider="${currentType}"]`);
			matchingSlider.classList.add('show');
		
			const href = galleryItem.getAttribute('href');
			const targetSlide = href.substring(1);
		
			if (matchingSlider) {
			  const swiper = matchingSlider.swiper;
			  const slideIdToFind = matchingSlider.querySelector(`.swiper-slide[data-item="${targetSlide}"]`);
			  const slideIndex = Number(slideIdToFind.getAttribute('data-swiper-slide-index'));
		
			  if (swiper) {
				swiper.slideToLoop(slideIndex);
			  }
			}
		  });
		});
		
		const closeLightbox = function() {
		  const activeSlide = filterableGallery.querySelector('.fg-gallery-slider.show .swiper-slide-active');
		  
		  if( activeSlide.querySelector('.responsive-embed iframe') ) {
			const embed = activeSlide.querySelector('.responsive-embed');
			const iframe = embed.innerHTML;
			embed.innerHTML = iframe;
		  }
		  
		  if( activeSlide.querySelector('.responsive-embed video') ) {
			const embed = activeSlide.querySelector('.responsive-embed');
			const iframe = embed.innerHTML;
			embed.innerHTML = iframe;
		  }
		  
		  filterableGallery.querySelector('.fg-lightbox').classList.remove('show');
		  filterableGallery.querySelector('.fg-gallery-slider.show').classList.remove('show');
		}
		
		const closeBtns = filterableGallery.querySelectorAll('.close-btn-wrap button');
		closeBtns.forEach(function(btn, index) {
		  btn.addEventListener( 'click', function( event ) {
			closeLightbox();
		  });
		});
		
		document.addEventListener('keydown', function(event) {
		  if (event.key === 'Escape' || event.key === 'Esc' || event.keyCode === 27) {
			closeLightbox();
		  }
		});
		
	  });	
	  
	}
		
	}, false);
</script>



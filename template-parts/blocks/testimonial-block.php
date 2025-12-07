<?php if ( have_rows('testimonial_block') ) : ?>
	<div class="testimonial-slider-block swiper">
	
		<div class="swiper-wrapper">
	
			<?php while ( have_rows('testimonial_block') ) : the_row(); 
				$name    = get_sub_field('name') ?? null;
				$content = get_sub_field('content') ?? null;
				$photo   = get_sub_field('photo') ?? null;
			?>
			
				<div class="testimonial-slider-item swiper-slide">
					<div class="testimonial-slider-item-inner">
						
						<div class="testimonial-slider-item-top">
							<img class="quote" src="<?= get_template_directory_uri(); ?>/assets/images/alza-quote-mark.svg" alt="">
							
							<?php if ( $photo ) : ?>
								<img class="photo" src="<?= esc_url( $photo['url'] ); ?>" alt="<?= esc_attr( $name ); ?>">
							<?php endif; ?>
						</div>
	
						<?= wp_kses_post( $content ); ?>
	
						<br><br>
						<div class="testimonial-name">- <?= esc_html( $name ); ?></div>
					</div>
				</div>
	
			<?php endwhile; ?>
	
		</div>
	
		<div class="swiper-pagination testimonial"></div>
	
	</div>
	
	<style>
	.testimonial-slider-block {
		border: 1px solid #1B9E8F;
		border-radius: 6px;
		overflow: visible;
		padding: 0 30px 18px;
	}
	
	.testimonial-slider-block .testimonial-slider-item {
		padding-bottom: 20px;
	}
	
	.testimonial-slider-block .testimonial-slider-item-inner,
	.swiper-pagination.testimonial {
		line-height: 26px;
		font-size: 20px;
	}
	
	.testimonial-slider-block {
		padding-top: 32px;
		margin-top: 32px;
	}
	
	.testimonial-slider-item-top {
		padding-bottom: 30px;
	}
	
	.testimonial-slider-block .photo {
		max-width: 180px;
		margin-top: -64px;
		border: 0;
	}
	
	.testimonial-slider-block .testimonial-slider-item-top {
		display: flex;
		justify-content: space-between;
		align-items: flex-start;
	}
	
	.swiper-pagination.testimonial {
		gap: 21px;
	}
	.testimonial-slider-block .swiper-pagination-bullet {
		width: 18px;
		height: 18px;
		border: 2px solid #4b4b4b;
		background: transparent;
		opacity: 1;
		margin: 0;
		transition: border-width .3s ease, border-color .3s ease;
	}
	
	.testimonial-slider-block .swiper-pagination-bullet-active,
	.testimonial-slider-block .swiper-pagination-bullet:hover {
		border: 4px solid #1B9E8F;
		background: transparent;
	}
	
	.testimonial-slider-block .testimonial-name {
		color: #1B9E8F;
	}
	
	.testimonial-slider-block .swiper-pagination {
		position: static;
		display: flex;
		justify-content: flex-end;
	}
	</style>
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const slider = document.querySelector('.testimonial-slider-block');
	
		if (!slider) return;
	
		new Swiper(slider, {
			slidesPerView: 1,
			loop: true,
			effect: 'fade',
			fadeEffect: { crossFade: true },	
			pagination: {
				el: slider.querySelector('.swiper-pagination'),
				clickable: true
			}
		});
	});
	</script>
<?php endif; ?>
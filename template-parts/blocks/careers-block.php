<?php if ( have_rows('careers_block') ) : 
	$job_link_text = get_field('job_link_text') ?? null;	
	$apply_link_text = get_field('apply_link_text') ?? null;	
?>

<div class="careers-block">

	<ul class="accordion" data-responsive-accordion-tabs="accordion medium-tabs">

		<?php 
		$i = 1;
		while ( have_rows('careers_block') ) : the_row();
			$tab_icon = get_sub_field('tab_icon') ?? null;
			$tab_title = get_sub_field('tab_title') ?? null;
			$tab_title_slug = '';
			if($tab_title) {
				$tab_title_slug = sanitize_title($tab_title);
			}
		?>
			<li class="accordion-item <?php echo $i === 1 ? 'is-active' : ''; ?>" data-accordion-item>
				<a href="#career-category-<?=$tab_title_slug;?>" class="accordion-title uppercase">

					<?php if ( $tab_icon ) : ?>
						<?=wp_get_attachment_image( $tab_icon['id'], 'full' );?>
					<?php endif; ?>

					<?php echo esc_html($tab_title); ?>

					<i class="fas fa-chevron-down"></i>
				</a>
				<div class="accordion-content" data-tab-content>
					<?php if ( have_rows('jobs') ) : ?>
					
						<div class="careers-block-job-grid">
					
							<?php while ( have_rows('jobs') ) : the_row(); 
								$title      = get_sub_field('title');
								$job_link   = get_sub_field('job_link');
								$apply_link = get_sub_field('apply_link');
							?>
					
							<div class="careers-block-job grid-x grid-padding-x">
					
								<?php if ( $tab_icon ) : ?>
									<div class="cell shrink">
										<?=wp_get_attachment_image( $tab_icon['id'], 'full' );?>
									</div>
								<?php endif; ?>
					
								<div class="careers-block-job-info">
					
									<div class="careers-block-job-info-top">
										<?php echo esc_html($title); ?>
									</div>
									
									<?php if ( $job_link || $apply_link ):?>
										<hr>
										<div class="careers-block-job-info-bottom">
											<?php if ( $job_link ) : 
												$link = $job_link;
												$link_url = $link['url'];
												$link_title = $link['title'];
												$link_target = $link['target'] ? $link['target'] : '_self';
											?>
												<a class="see-job" href="<?php echo esc_url($job_link['url']); ?>">
													<span>
													<?php if( $link_title && empty($job_link_text) ) {
														echo $link_title;
													} elseif( $job_link_text ) {
														echo $job_link_text;
													}
													;?>
													</span>
													<img src="<?=get_template_directory_uri();?>/assets/images/chev-right-10px.svg">
												</a>
											<?php endif; ?>
						
											<?php if ( $apply_link ) : ?>
												<a href="<?php echo esc_url($apply_link['url']); ?>">
													Apply Today <i class="fas fa-chevron-right"></i>
												</a>
											<?php endif; ?>
						
										</div>
									<?php endif;?>
								</div>
					
							</div>
					
							<?php endwhile; ?>
					
						</div><!-- .careers-block-job-grid -->
					
					<?php endif; ?>
				</div>
			</li>

		<?php $i++; endwhile; ?>

	</ul>
</div><!-- .careers-block -->

<style>
.careers-block ul.tabs {
	border-top: 0;
	border-left: 0;
	border-right: 0
}
.careers-block ul.tabs li {
	position: relative;
}
.careers-block ul.tabs li a {
	display: flex;
	flex-direction: column;
	align-items: center;
	font-size: clamp(1.063rem, 0.951rem + 0.556vw, 1.5rem);
}
.careers-block ul.tabs li.is-active a {
	border-top: 1px solid #555555;
	border-left: 1px solid #555555;
	border-right: 1px solid #555555;
}
.careers-block ul.tabs li.is-active a:after {
	content: '';
	position: absolute;
	left: 1px;
	top: calc(100% + 0px);
	display: block;
	width: calc(100% - 2px);
	height: 2px;
	background-color: #000;
}


/* .careers-block img {
	border: 0 !important;
	margin: 0 !important;
}
.careers-block ul {
	margin: 0 !important;
}

.careers-block ul li:before {
	display: none !important;
}

.careers-block .tab-icon, .ui-tabs-tab svg, .careers-block .tab-icon-open {
	width: 50px;
	height: 50px;
	display: block;
	margin: auto !important;
}

.careers-block .tab-icon-open, .careers-block .ui-tabs-tab.ui-tabs-active .tab-icon, .careers-block .ui-tabs-nav .ui-tabs-tab:hover .tab-icon, .careers-block.ui-accordion .ui-accordion-header.ui-state-active .tab-icon {
	display: none !important;
}

.careers-block .ui-tabs-tab.ui-tabs-active .tab-icon-open, .careers-block .ui-tabs-nav .ui-tabs-tab:hover .tab-icon-open, .careers-block.ui-accordion .ui-accordion-header.ui-state-active .tab-icon-open {
	display: block !important;
}

.careers-block img.job-icon {
	width: 30px;
	height: 30px;
	margin-top: 0.5em !important;
}

.careers-block {
	background: transparent;
	border: none !important;
	padding: 0;
}

.careers-block .ui-tabs-nav {
	background: transparent;
	border: 0;
	padding: 0;
	display: flex;
	//align-items: flex-end;
	//overflow-x: auto;
	//overflow-y: hidden;
}

.careers-block .ui-tabs-nav .ui-tabs-tab {
	background: #333;
	border-color: transparent;
	margin-bottom: 0;
	margin-right: 20px;
	//padding: 20px 40px;
	//padding-bottom: 0;
	display: flex;
	justify-content: center;
	min-width: 246px;
}

.careers-block .ui-tabs-nav .ui-tabs-tab a {
	color: #cf3a24;
	width: 100%;
	text-align: center;
	//padding: 0;
	padding: 20px 40px;
	font-size: 23px;
}

.careers-block .ui-tabs-nav .ui-tabs-tab.ui-tabs-active a, .careers-block .ui-tabs-nav .ui-tabs-tab:hover a {
	color: #d6d4d3;
}

.careers-block .careers-block-tab  {
	color: #d6d4d3;
	border: 1px solid #555;
	background: none;
	margin-bottom: 1em;
}

.careers-block .careers-block-tab a {
	color: #cf3a24;
}

.careers-block .ui-tabs-nav .ui-tabs-tab.ui-tabs-active  {
	border-color: #555;
	margin-bottom: -1px;
	background-color: black;
}

.careers-block .careers-block-job-grid {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	row-gap: 40px;
}

.careers-block .careers-block-job {
	display: flex;
	gap: 30px;
	width: 45%;
	line-height: normal;
}

.careers-block .careers-block-job-info-top {
	border-bottom: 1px solid #d6d4d3;
	margin-bottom: 20px;
	padding-bottom: 20px;
	font-size: 21px;
}

.careers-block .careers-block-job .see-job {
	border-right: 1px solid #d6d4d3;
	//padding-right: 25px;
	margin-right: 30px;
}


.careers-block .careers-block-job .careers-block-job-info-bottom svg {
	fill: #cf3a24;
	width: 10px;
	margin-left: 10px;
}

.careers-block .careers-block-job .careers-block-job-info-bottom i {
	margin-left: 10px;
}

.careers-block .careers-block-job .careers-block-job-info-bottom .see-job svg {
	margin-right: 15px;
}

.careers-block .careers-block-job .careers-block-job-info-bottom .see-job i {
	margin-right: 15px;
}

@media screen and (max-width: 1000px) {
	.careers-block .careers-block-job {
		width: 100%;
		//max-width: 560px;
		//margin: auto;
	}

	.careers-block .careers-block-job .careers-block-job-info {
		width: 100%;
	}
}

.careers-block.ui-accordion .ui-accordion-header {
	background: none;
	border-color: #555;
	color: #cf3a24;
	margin: 0;
	margin-top: 1em;
	font-size: 23px;
}

.careers-block.ui-accordion .ui-accordion-header a {
	position: relative;
	display: flex;
	//justify-content: center;
	align-items: center;
	color: #cf3a24;
	gap: 10px;
}

.careers-block .ui-tabs-tab i {
	display: none;
}

.careers-block.ui-accordion .ui-accordion-header a i {
	display: block;
	position: absolute;
	right: 0;
	top: 5px;
	transition: transform .3s ease;
}

.careers-block.ui-accordion .ui-accordion-header.ui-state-active a i {
	transform: rotateX(-180deg);
}

.careers-block.ui-accordion .tab-icon, .careers-block.ui-accordion .tab-icon-open {
	margin: 0 !important;
	width: 30px;
}

.careers-block.ui-accordion .ui-accordion-header.ui-state-active a {
	color: #d6d4d3;
}

.careers-block.ui-accordion .careers-block-tab {
	padding: 1em;
	border-top: 0;
}

.careers-block.ui-accordion .careers-block-job .see-job {
	border-right: 0;
}

.careers-block.ui-accordion .ui-accordion-header.ui-state-active {
	//margin-bottom: 0;
	border-bottom: 0;
}

.careers-block.ui-accordion .careers-block-job .careers-block-job-info-bottom {
	display: flex;
	flex-wrap: wrap;
} */
</style>
<?php endif; ?>

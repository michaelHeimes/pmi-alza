<?php
$global_phone_number = $args['global_phone_number'] ?? null;
$global_quote_link = $args['global_quote_link'] ?? null;
?>

<?php 
	$link1 = $global_phone_number ?? null;
	if( $link1 ): 
		$link_url = $link1['url'];
		$link_title = $link1['title'];
		$link_target = $link1['target'] ? $link1['target'] : '_self';
	?>
	<div class="cell shrink">
		<a class="button has-icon no-border no-bg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="13.132" height="22.223"><path d="M10.606 0H2.525A2.526 2.526 0 0 0 0 2.525V19.7a2.526 2.526 0 0 0 2.525 2.525h8.081a2.526 2.526 0 0 0 2.526-2.525V2.525A2.526 2.526 0 0 0 10.606 0Zm-4.04 21.213A1.515 1.515 0 1 1 8.081 19.7a1.513 1.513 0 0 1-1.515 1.513Zm4.546-4.041H2.02V3.03h9.091Z" fill="#1b9e8f"/></svg>
			<span><?php echo esc_html( $link_title ); ?></span>
		</a>
	</div>
<?php endif; ?>

<?php 
	$link2 = $global_quote_link ?? null;
	if( $link2 ): 
		$link_url = $link2['url'];
		$link_title = $link2['title'];
		$link_target = $link2['target'] ? $link2['target'] : '_self';
	?>
	<div class="cell small-12 medium-shrink">
		<a class="button border" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	</div>
<?php endif; ?>
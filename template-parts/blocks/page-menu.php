<?php
//$title = get_field('page_menu_title');
if ( have_rows('page_menu') ){
	echo '<div class="page-menu-block">';
	//echo '<h4 class="page-menu-block-title">' . $title . ' <i class="fa fa-chevron-up fa-chevron-down"></i></h4>';
	echo '<div class="page-menu-block-links">';
	echo '<div class="page-menu-block-inner">';
	while ( have_rows('page_menu') ) { the_row(); 
		$link = get_sub_field('page_menu_link');
		if ($link['url'] == $_SERVER['REQUEST_URI'] || $link['url'] == home_url($_SERVER['REQUEST_URI'])) {
			echo '<a class="current-page button" href="' . $link['url'] . '">' . $link['title'] . '</a>';
		}
		else {
			echo '<a class="button" href="' . $link['url'] . '">' . $link['title'] . '</a>';
		}
	}
	echo '</div>';
	echo '</div>';
	echo '</div>';
	
?>
<!-- <script>

jQuery(document).ready(function( $ ) {
	//$('.sidebar-nav-collapse .menu-top-menu-container').slideToggle();
	$('.page-menu-block-title').on("click touch", function () {
		
		$('.page-menu-block-links').slideToggle();
		//$('.page-menu-block-links').toggle();
		$('.page-menu-block-title i').toggleClass('fa-chevron-down');
		//$('.page-menu-block-title i').toggleClass('fa-chevron-up');
	});
	
	var menuitems = $('.page-menu-block a').length;
	var middle = Math.ceil(menuitems / 2);
	$('.page-menu-block a').eq(middle).addClass("first-of-column");
	if (Number.isInteger(menuitems / 2 ) == false) {
		$('.page-menu-block a').eq(menuitems - 1).addClass("last-of-column");
	}
	
});
</script> -->

<style>
.page-menu-block {
	margin-top: 50px;
	margin-bottom: 50px;
}

.page-menu-block .page-menu-block-inner {
	display: flex;
	flex-wrap: wrap;
	gap: 20px;
	justify-content: center;
}
.page-menu-block h4{
	font-size: 20px;
}
.page-menu-block a.button {
	margin: 0;
}
.page-menu-block a.button.current-page {
	background-color: transparent;
}
.page-menu-block-title {
	cursor: pointer;
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin: 0;
	display: none;
	color: #848383;
}

.page-menu-block-title i {
	font-size: 30px;
}

</style>

<?php };?>
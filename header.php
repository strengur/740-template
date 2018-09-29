<!DOCTYPE html>
<html lang="is">
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
<!-- 		<link rel="stylesheet" href="http://basehold.it/30/ff00ff"> -->
		<?php wp_head(); ?>
	</head>

	<body>
	<nav>
	<div class="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/740is-logo-163px.png" alt="Merki 740.is"></a>
	</div>

	<div class="menu-items button-green">
		<?php wp_nav_menu( array('menu' => 'DesktopMenu')); ?>
		<!-- <ul>
			<li><a href="http://740.is">Heim</a></li>
			<li><a href="http://740.is/verkefni/">Verkefni</a></li>
			<li><a href="http://740.is/#umokkur">Um 740</a></li>
			<li id="display-contact-form"><a href="http://740.is/hafa-samband">Hafa samband</a></li>
			</ul> -->
	</div>

	<div class="mobile">
		<img src="<?php bloginfo('template_directory');?>/images/icons/menu.svg" alt="Snjalltækja hnappur">
	</div>
	<div class="mobile-menu-items button-green hide-mobile-menu">
		<?php wp_nav_menu( array('menu' => 'MobileMenu')); ?>
	</div>

</nav>


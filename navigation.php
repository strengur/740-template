<nav>
	<div class="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/740is-logo-163px.png" alt="Merki 740.is"></a>
	</div>

	<div class="menu-items button-green">
		<?php wp_nav_menu( array('menu' => 'DesktopMenu')); ?>
	</div>

	<div class="mobile">
		<img src="<?php bloginfo('template_directory');?>/images/icons/menu.svg" alt="Snjalltækja hnappur">
	</div>
	<div class="mobile-menu-items button-green hide-mobile-menu">
		<?php wp_nav_menu( array('menu' => 'MobileMenu')); ?>
	</div>

</nav>

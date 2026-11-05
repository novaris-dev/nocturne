<?php
// The framework hard-codes `.menu-toggle` on the button, but the package's
// script looks for `.app-nav__toggle`.
echo str_replace(
	'class="menu-toggle"',
	'class="app-nav__toggle"',
	Novaris\Theme\Menu\display( [
		'theme_location'  => 'primary',
		'container_class' => 'app-nav',
		'menu_class'      => 'app-nav__menu',
		'echo'            => false,
	] )
);

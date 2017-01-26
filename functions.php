<?php
	//Habilitando los menus
	register_nav_menus(array(
		'menu' => 'Menu superior',
	));

	//Habilitando el sidebar
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 id="mi_titular">',
		'after_title' => '</h2>'
	));
?>
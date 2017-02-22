<?php
	//Habilitando los menus
	register_nav_menus(array(
		'menu' => 'Menu superior',
	));

	//Habilitando la imagen destacada
	add_theme_support( 'post-thumbnails' );

	//Habilitamos la imagen de cabecera (página de inicio)
	$defaults = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 300,
		'flex-height'            => false,
		'flex-width'             => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $defaults );

	//Habilitando el sidebar
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 id="mi_titular">',
		'after_title' => '</h2>'
	));
?>
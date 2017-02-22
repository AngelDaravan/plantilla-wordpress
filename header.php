<?php
/**
 *
 * @package Ángel Daraván
 * @subpackage Mi plantilla Daraván
 * @since Mi plantilla Daraván v1
 */

?>
<!DOCTYPE html>
<html>
<!-- CONFIGURAR PARA QUE NO TAPE LA BARRA CON EL MENU!! ID: wpadminbar -->
<?php wp_head(); ?>
<head>
	<title><?php bloginfo( 'name' ); ?> | <?php bloginfo('description'); ?></title>
	<meta charset="utf-8" />
	<!-- EN PHP se utilizan valores dinamicos. template_directory sería un directorio relativo sobre nuestro directorio -->
	<!-- Utilizo el framework W3.CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/w3.css">
	<!-- Mi CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/otro.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<!-- Diseño responsive -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body >
	<!-- Barra de navegación lateral, solo para dispositivos moviles -->
	<nav class="w3-sidenav w3-card-2 w3-animate-left" style="display:none" id="menu_izquierda">
		<a href="javascript:void(0)" onclick="cerrar_menu()"
	  class="w3-closenav w3-large">&times; Cerrar</a>
	  <?php wp_nav_menu(
	  	//Con el nav, no hay ul, por lo que solo metemos los carácteres
	  	array(
			'container' => 'false',
			'items_wrap' => '%3$s',
			'theme_location' => 'menu'
		)); ?>
	</nav>
<div id="barra_principal" class="w3-container w3-card-4 w3-top">
<!-- El menú lo alineo a la izquierda. Cuando esté en un dispositivo móvil esta parte desaparece para convertirlo en un desplegable -->
	<div id="menu" class="w3-col l7">
		<?php wp_nav_menu(array(
			'container' => 'false',
			'items_wrap' => '<ul id="menu-top" class="w3-navbar w3-large">%3$s</ul>',
			'theme_location' => 'menu'
		)); ?>
	</div>
	<div id="titulo" class="w3-col l5">
		<h1 id="mi_nombre"><?php bloginfo( 'name' ); ?></h1>
	</div>
</div>
<!-- Barra principal modificada para los moviles -->
<div id="barra_movil" class="w3-container w3-card-4 w3-top">
	<div id="menu_lateral" class="w3-col l3" onclick="abrir_menu()">
		&#9776;
	</div>
	<div id="titulo" class="w3-col l9">
		<h1 id="mi_nombre"><?php bloginfo( 'name' ); ?></h1>
	</div>
</div>
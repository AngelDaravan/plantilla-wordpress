<?php ?>
<div id="mi_pie" class="w3-container">
		<p>Copyright Angel Daravan 2017. Todos los derechos reservados.</p>
</div>
<!-- Script del menu lateral -->
	<script>
	function abrir_menu() {
		document.getElementById("menu_izquierda").style.display = "block";
	}

	function cerrar_menu() {
		document.getElementById("menu_izquierda").style.display = "none";
	}

	//Se necesita de window.onload para que en el momento que carge la página ejecute la funcion
	window.onload = function barra_administracion(){
		if(document.getElementById("wpadminbar")){
			document.getElementById("barra_principal").style.marginTop = "20px";
		}
	}
	
	</script>
	<?php wp_footer(); ?>
</body>
</html>

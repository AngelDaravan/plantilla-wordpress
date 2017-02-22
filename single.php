<?php get_header(); ?>
<?php
		if ( has_post_thumbnail() ) {
			?>
			<div id="mi_portada">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php
		} else {
			//Mostramos la portada de inicio ?>
			<div id="mi_portada">
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div>
			<?php
		}
?>
	<div id="cuerpo" class="w3-container w3-card-8"> 
		<div id="contenido" class="w3-col l9">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<h2 id="mi_titular"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p id="mis_datos" class="w3-small">Escrito por: <?php the_author(); ?>. Publicado en el: <?php the_date(); ?>. Categoría: <?php
				//Es más facil elaborar este script que colocar simplemente 'the_categorie', porque "rompe" tu estilo css 
				$categories = get_the_category();
				foreach ($categories as $category){
				echo '<a class="post-item" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
				echo ' ';
				}
				if($post->comment_count > 0) { 
								echo ' &nbsp;|&nbsp; ';
								comments_popup_link('', '1 comentario', '% comentarios'); 
						}
				?>.
			</p>
			<div id="mi_articulo" class="w3-border-bottom">
				<p>
					<!-- Extracto = excerpt, Articulo entero = content -->
					<?php the_content(); ?>
					<p id="mis_datos" class="w3-small"><?php the_tags("Etiquetas: ", ", ", "."); ?></p>
				</p>
			</div>	<!-- articulo -->
		<?php endwhile; else: ?>
		<h2 id="mi_titular">No hay artículos disponibles</h2>
		<?php endif; ?>
		<div>
			<h2 id="mi_titular"><a href="#comentarios">Comentarios</a></h2>
			<?php comments_template(); ?>
		</div>
		</div> <!-- contenido -->	
			<?php get_sidebar(); ?>
	</div><!-- cuerpo -->
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.min.js" type="text/javascript">
		$.fn.vscroll = function(){
			$(window).scroll(function(){
				var posicion = $(window).scrollTop();
				console.log(posicion);
				}
			)};
	</script>
	<?php get_footer(); ?>
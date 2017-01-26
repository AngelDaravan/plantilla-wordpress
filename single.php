<?php get_header(); ?>

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
				}?>. <a href="#">Sin comentarios</a>.
			</p>
			<div id="mi_articulo" class="w3-border-bottom">
				<p>
					<!-- Extracto = excerpt, Articulo entero = content -->
					<?php the_content(); ?>
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

	<?php get_footer(); ?>
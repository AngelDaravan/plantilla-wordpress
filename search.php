<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

if( strlen($query_string) > 0 ) {
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>
<?php get_header(); ?>
<div id="mi_portada">
	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</div>
<div id="cuerpo" class="w3-container w3-card-8"> 
	<div id="contenido" class="w3-col l9">
		<?php if ( have_posts() ) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 id="mi_titular"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p id="mis_datos" class="w3-small">Escrito por: <?php the_author(); ?>. Publicado en el: <?php the_date(); ?>. Categoría: <?php
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
				<?php
				if ( function_exists('the_excerpt') && is_search() ) {
					the_excerpt();
				} ?>
			</div>
			
			<hr>
<?php endwhile; ?>
		<?php else : ?>
			<p>ERROR</p>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<?php get_header();?>
<button id="btnsingle" onclick="history.go(-1);">RETOUR</button><br><br><br>
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<div class="categPost">
	<div class="titre">
    	<h1><?php the_title(); ?></h1>
	</div>
    	<p id="card-body"><?php the_excerpt(); ?></p>
		<a id="seeArticle" href=" <?php the_permalink(); ?>"> Voir l'article</a>
</div>
	<?php endwhile; endif; ?>
<?php get_footer();?>
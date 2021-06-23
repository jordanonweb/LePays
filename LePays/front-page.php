<?php get_header() ?>

<div class="container">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <div class="posts">
	<div class="titre">
    	<h1 class="titreAcc"><?php the_title(); ?></h1>
</div>
    	<p class="card-body"><?php the_excerpt(); ?></p>
 
        <a id="seeArticle" href=" <?php the_permalink(); ?>"> Voir l'article</a>
	</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer() ?>
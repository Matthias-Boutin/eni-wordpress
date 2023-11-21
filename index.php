<?php get_header(); ?>

<h1 class="text-center mt-5">Des supers articles</h1>
<?php if (have_posts(  )): ?>

    <div class="container mt-5">
        <div class="row">
        <?php while(have_posts(  )) {
            the_post(); ?>
                <div class="col-4">
                    <div class="card m-5">
                        <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top" style="height:230px;" alt="<?php the_author_description(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?> - <?php the_author(); ?></h5>
                            <p class="card-text"><?php the_excerpt() ?></p>
                            <a href="<?php the_permalink();?>" class="btn btn-primary">Voir l'article</a>
                        </div>
                    </div>
                </div>
                
            <?php } ?>
        </div>
    </div>

<?php else: ?>
    <p>Il n'y a aucun article</p>



<?php endif; ?>




<?php get_footer(); ?>
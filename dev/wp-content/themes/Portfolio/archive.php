<?php
/*
      Template Name: Archive
*/
if(is_page()){
    query_posts([
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
}
get_header();?>
    <div class="projets">
        <div class="projets__article">
            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="projets__content">
                <a href="article.html" class="projets__link">
                    <img src="img/artiste.jpg" class="projets__image" width="3081" height="1500" alt="Un site sur Nicolas De Stael"/>
                    <div class="projets__hov">
                        <div class="projets__title">
                            <p class="projets__text-one">
                                <?php the_title();?>
                            </p>
                            <a href="article.html" class="projets__text-two"><?php _e('Voir le projet','b');?></a>
                        </div>
                        <div class="projets__color"></div>
                    </div>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <?php
        get_footer();

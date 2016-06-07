<?php

get_header();

?>
    <div class="container__article">
        <h2 aria-level="2" class="container__title"><?php the_title();?></h2>
        <div class="container__site">
            <figure class="container__figure">
                <img src="<?php the_field('article_site');?>" class="container__site-picture"alt="Site de Baobab"/>
            </figure>
            <div class="container__info">
                <p class="container__info-det"><span class="container__gras"><?php _e('Réalisation','b');?></span> : <?php the_field('article_date');?></p>
                <p class="container__info-det container__info-det--bottom">
                    <span class="container__gras"><?php _e('Description','b');?></span> : <?php the_field('article_description');?>
                </p>
                <a href="<?php the_field('article_link-site');?>" class="container__site-link"><?php _e('Vers le site','b');?></a>
            </div>
        </div>
            <div class="container__description">
                <p class="container__description-text">
                    <?php the_field('article_paragraphe-one');?>
                </p>
                <p class="container__description-text">
                    <?php the_field('article_paragraphe-two');?>
                </p>
            </div>
    </div>
    <?php
        get_footer();
        ?>

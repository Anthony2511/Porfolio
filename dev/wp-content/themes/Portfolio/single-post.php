<?php

get_header();

?>
    <div class="container__article">
        <h2 aria-level="2" class="container__title"><?php the_title();?></h2>
        <div class="container__site">
            <figure class="container__figure">
                <img src="<?php the_field('article_site');?>" class="container__site-picture" alt="Site de Baobab"/>
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
                <div class="container__projet">
                    <h2 aria-level="2" class="container__projet-title" id="projet">Le projet</h2>
                    <p class="container__description-text">
                        <?php the_field('article_paragraphe-one');?>
                    </p>
                </div>
                <div class="container__projet">
                    <h2 aria-level="2" class="container__projet-title" id="lampe">La réalisation</h2>
                    <p class="container__description-text">
                        <?php the_field('article_paragraphe-two');?>
                    </p>
                </div>
            </div>
            <div class="info-sup">
                <h2 aria-level="2" class="info-sup__title" id="palette">Les couleurs</h2>
                <img src="<?php the_field('color-one');?>" alt="couleur" />
                <img src="<?php the_field('color-two');?>" alt="couleur" />
                <img src="<?php the_field('color-three');?>" alt="couleur" />
                <img src="<?php the_field('color-four');?>" alt="couleur" />
            </div>
    </div>
    <?php
        get_footer();
        ?>

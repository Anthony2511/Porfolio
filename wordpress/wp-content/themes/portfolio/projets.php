<?php
/*
Template Name: Page Projets
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'projets',
        'paged' => get_query_var('paged')
    ]);
}; ?>

<?php include('head.php'); ?>

<body class="projet">
  <div class="background">
    <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
    <?php include('navigation.php'); ?>
    <?php include('header.php'); ?>

      <div class="wrap">
          <section class="works__width">
            <div class="works__container works__container--projets">
              <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
              <div class="works__bloc works__bloc--margin">
                <figure class="works__figure">
                  <img class="works__img" src="./images/mariam-big.png" width="1140" height="760" alt="Projet Mariam-Faso">
                </figure>
                <section class="works__infos works__infos--projets">
                  <h4 class="works__title works__title--size" aria-level="4" role="heading"><?php the_title(); ?></h4>
                  <span class="works__text works__text--projets">Site réalisé pour l'ASBL Mariam-Faso</span>
                </section>
                <a class="works__link-projects works__link-projects--projets" href="<?php the_permalink(); ?>" title="Vers le projet : <?php the_title(); ?>"><span><?= __('Vers le projet','po'); ?></span></a>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </section>
      </div>
      <?php include('footer.php'); ?>

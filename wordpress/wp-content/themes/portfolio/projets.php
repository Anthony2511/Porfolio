<?php
/*
Template Name: Page Projets
*/
; ?>

<?php if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
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
                <?php $imageProjects = get_field('single-projet__image'); ?>
                <figure class="works__figure">
                  <?php if( !empty($imageProjects) ): ?>
                  <?php $size = 'thumb-projects';
                        $thumb = $imageProjects['sizes'][ $size ]; ?>
                  <img class="works__img" src="<?= $thumb; ?>" width="1140" height="760" alt="<?= $imageProjects['alt']; ?>" />
                   <?php endif; ?>
                </figure>
                <section class="works__infos works__infos--projets">
                  <h4 class="works__title works__title--size" aria-level="4" role="heading"><?php the_title(); ?></h4>
                  <span class="works__text works__text--projets"><?= get_field('single-projet__slogan'); ?></span>
                </section>
                <a class="works__link-projects works__link-projects--projets" href="<?php the_permalink(); ?>" title="Vers le projet : <?php the_title(); ?>"><span><?= __('Vers le projet','po'); ?></span></a>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </section>
      </div>
      <?php include('footer.php'); ?>

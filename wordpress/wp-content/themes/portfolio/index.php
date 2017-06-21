<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body class="home">
  <div class="background">
    <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
    <?php include('navigation.php'); ?>
    <?php include('header-home.php'); ?>
      <div class="wrap" id="page">
        <div class="about">
          <?php $homeIntro = get_field('image__introduction'); ?>
          <figure class="about__figure">
            <?php if( !empty($homeIntro) ): ?>
            <?php $size = 'thumb-intro';
                  $thumb = $homeIntro['sizes'][ $size ]; ?>
            <img class="about__img" src="<?= $thumb; ?>" width="341" height="606" alt="<?= $homeIntro['alt']; ?>" />
             <?php endif; ?>
          </figure>
          <section class="about__bloc">
            <h3 class="title" aria-level="3" role="heading"><?= __('Qui suis-je ?','po'); ?></h3>
            <?= get_field('home__introduction'); ?>
            <a class="about__link" href="#" title="Vers mon cv"><?= __('Voir mon cv','po'); ?></a>
          </section>
        </div>
      </div>
        <div class="works">
          <section class="works__width">
            <h3 class="title color" aria-level="3" role="heading"><?= __('Mes dernières réalisations','po'); ?></h3>
            <div class="works__container">
              <?php $posts = new WP_Query( ['posts_per_page' => 3, 'post_type' => 'projets'] ); ?>
              <?php if($posts->have_posts()) : while($posts->have_posts()): $posts->the_post();?>
              <div class="works__bloc">
                <?php $projetHome = get_field('single-projet__image'); ?>
                <figure class="works__figure">
                  <?php if( !empty($projetHome) ): ?>
                  <?php $size = 'thumb-projects';
                        $thumb = $projetHome['sizes'][ $size ]; ?>
                  <img class="works__img" src="<?= $thumb; ?>" width="1140" height="760" alt="<?= $projetHome['alt']; ?>" />
                   <?php endif; ?>
                </figure>
                <section class="works__infos">
                  <h4 class="works__title" aria-level="4" role="heading"><?php the_title(); ?></h4>
                  <span class="works__text"><?= get_field('single-projet__slogan'); ?></span>
                </section>
                <a class="works__link-projects" href="<?php the_permalink(); ?>" title="Vers le projet : <?php the_title(); ?>"><span><?= __('Vers le projet', 'po'); ?></span></a>
              </div>
              <?php wp_reset_postdata(); ?>
              <?php endwhile; endif; ?>
            </div>
            <div class="works__center">
              <a class="works__link" href="<?php the_permalink(31); ?>" title="Vers la page de mes projets"><?= __('Voir tous mes projets','po'); ?></a>
            </div>
          </section>
        </div>
      <div class="wrap">
        <section class="contact">
          <h3 class="title" aria-level="3" role="heading"><?= __('Me contacter','po'); ?></h3>
          <p class="contact__text">
            <?= get_field('home__text-contact'); ?>
          </p>
          <div class="contact__form">
            <?= do_shortcode('[contact-form-7 id="20" title="Contact"]'); ?>
            <span class="contact__span"><?= __('Tous les champs sont obligatoires *','po'); ?></span>
          </div>
        </section>
      </div>
      <?php include('footer.php'); ?>

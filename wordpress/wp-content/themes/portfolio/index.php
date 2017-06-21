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
              <div class="works__bloc">
                <figure class="works__figure">
                  <img class="works__img" src="./images/mariam.png" width="600" height="400" alt="Projet Mariam-Faso">
                </figure>
                <section class="works__infos">
                  <h4 class="works__title" aria-level="4" role="heading">Mariam-Faso</h4>
                  <span class="works__text">Site réalisé pour l'ASBL Mariam-Faso</span>
                </section>
                <a class="works__link-projects" href="projet.html" title="Vers le projet : Mariam-Faso"><span>Vers le projet</span></a>
              </div>
              <div class="works__bloc">
                <figure class="works__figure">
                  <img class="works__img" src="./images/artiste.png" width="600" height="400" alt="Projet Artiste">
                </figure>
                <section class="works__infos">
                  <h4 class="works__title" aria-level="4" role="heading">L'artiste</h4>
                  <span class="works__text">Site du peintre Nicolas De Stael</span>
                </section>
                <a class="works__link-projects" href="#" title="Vers le projet : Mariam-Faso"><span>Vers le projet</span></a>
              </div>
              <div class="works__bloc">
                <figure class="works__figure">
                  <img class="works__img" src="./images/mariam.png" width="600" height="400" alt="Projet Mariam-Faso">
                </figure>
                <section class="works__infos">
                  <h4 class="works__title" aria-level="4" role="heading">Mariam-Faso</h4>
                  <span class="works__text">Site réalisé pour l'ASBL Mariam-Faso</span>
                </section>
                <a class="works__link-projects" href="#" title="Vers le projet : Mariam-Faso"><span>Vers le projet</span></a>
              </div>
            </div>
            <div class="works__center">
              <a class="works__link" href="#" title="Vers la page de mes projets">Voir tous mes projets</a>
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
            <span class="contact__span">Tous les champs sont obligatoires *</span>
          </div>
        </section>
      </div>
      <?php include('footer.php'); ?>

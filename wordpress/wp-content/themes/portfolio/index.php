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
            Si tu es arrivé jusqu’ici, c’est que je t’intéresse et que tu commences déjà à me plaire.
            Besoin d’informations supplémentaires sur mes projets, sur un sujet en particulier, contacte-moi !
          </p>
          <form class="contact__form" action="index.html" method="post">
            <div class="contact__form-container">
              <div class="contact__form-bloc">
                <div class="contact__bloc">
                  <label class="contact__form-label" for="name">Votre nom :</label>
                  <input class="contact__form-input" type="text" name="name" id="name" placeholder="Beaumecker" required>
                </div>
                <div class="contact__bloc">
                  <label class="contact__form-label" for="firstname">Votre prénom :</label>
                  <input class="contact__form-input" type="text" name="firstname" id="firstname" placeholder="Anthony" required>
                </div>
                <div class="contact__bloc">
                  <label class="contact__form-label" for="mail">Votre mail :</label>
                  <input class="contact__form-input" type="mail" name="mail" id="mail" placeholder="anthonybeaumecker@gmail.com" required>
                </div>
              </div>
              <div class="contact__form-bloc">
                <div class="contact__bloc">
                  <label class="contact__form-label" for="textarea">Votre message :</label>
                  <textarea class="contact__form-textarea" name="textarea" id="textarea" rows="16" cols="80" placeholder="Laissez votre message ici&hellip;" required></textarea>
                </div>
              </div>
            </div>
            <button class="contact__button" type="button" name="button">Envoyez un message</button>
            <span class="contact__span">Tous les champs sont obligatoires *</span>
          </form>
        </section>
      </div>
      <?php include('footer.php'); ?>

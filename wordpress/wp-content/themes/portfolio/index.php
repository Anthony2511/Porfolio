<?php
/*
Template Name: Page d’accueil
*/
; ?>

<?php include('head.php'); ?>

<body class="home">
  <div class="background">
    <h1 class="hidden" aria-level="1" role="heading">Anthony Beaumecker</h1>
    <?php include('navigation.php'); ?>
    <?php include('header-home.php'); ?>
      <div class="wrap" id="page">
        <section class="about">
          <figure class="about__figure">
            <img class="about__img" src="./images/me.png" width="466" height="829" alt="C'est moi">
          </figure>
          <section class="about__bloc">
            <h3 class="title" aria-level="3" role="heading">Qui suis-je ?</h3>
            <p class="about__text">
              Salut, moi c’est <strong>Anthony</strong> comme tu as pu le voir un peu plus haut ( enfin j’espère ).
              J’ai <strong>22 ans</strong>, beaucoup de choses me passione dans le vie dont la course à pied que je
              pratique assez régulièrement, mais le <strong>web design</strong> en occupe la majeur partie.
            </p>
            <p class="about__text">
              Je maîtrise les langages de base comme <strong>HTML5</strong> &amp; <strong>CSS3</strong>. J’utilise la méthodologie <strong>BEM</strong>
              combiné avec <strong class="coupe">SASS</strong> <strong>STYLUS</strong> depuis peu. Bon c’est bien beau, mais niveau <strong>back-end</strong> ?
              J’intègre des sites avec le <strong>CMS Wordpress</strong> et d’autres projets en <strong>PHP</strong> avec bientôt son framework <strong>Laravel</strong>.
              La plupart du temps je code sur l’éditeur de texte <strong>Atom</strong>, qui est mon éditeur coup de coeur.
            </p>
            <p class="about__text">
              Envie d’en savoir plus sur mon parcours ? Mon <a class="underline" href="#" title="Vers mon CV">CV</a> n’attend plus que toi !
            </p>
            <a class="about__link" href="#" title="Vers mon cv">Voir mon cv</a>
          </section>
        </section>
      </div>
        <div class="works">
          <section class="works__width">
            <h3 class="title color" aria-level="3" role="heading">Mes dernières réalisations</h3>
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
          <h3 class="title" aria-level="3" role="heading">Me contacter</h3>
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

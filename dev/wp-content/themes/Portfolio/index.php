<?php
/*
      Template Name: Homepage
*/
if ( is_home() ) :
	get_header();
elseif ( is_404() ) :
	get_header( '404' );
else :
	get_header('home');
endif;
?>
    <div class="container__propos" id="propos" >
        <h2 aria-level="2" class="container__title"><?php the_field('portfolio_section-one');?></h2>
        <img src="<?php echo get_template_directory_uri() .'/img/perso.png';?>" alt="Ma photo de profil" class="container__profil" width="880" height="2835"/>
        <div class="container__presentation">
            <p class="container__presentation__text">
                <?php the_field('portfolio_section-one_paragraphe-one');?>
            </p>
            <p class="container__presentation__text">
                <?php the_field('portfolio_section-one_paragraphe-two');?>
            </p>
        </div>
    </div>
    <div class="container__cv" data-midnight="orange">
        <a href="img/CV.pdf" class="container__cv__link">
            <p class="container__cv__text">
                <?php _e('Voir mon CV','b');?>
            </p>
        </a>
    </div>
    <div class="container__realisations" id="realisations" data-midnight="orange">
        <h2 aria-level="2" class="container__title"><?php the_field('portfolio_section-two');?></h2>
        <div class="container__projets">
            <div class="container__projets__content">
                <a href="article.html" class="container__projets__link">
                    <img src="img/baobab.jpg" class="container__projets__image" width="2250" height="1500" alt="Un gestionnaire de bibliothèque"/>
                    <div class="container__projets__hov">
                        <div class="container__projets__title">
                            <p class="container__projets__text-one">
                                Le projet du site de Baobab
                            </p>
                            <a href="article.html" class="container__projets__text-two">Voir le projet</a>
                        </div>
                        <div class="container__projets__color"></div>
                    </div>
                </a>
            </div>
            <div class="container__projets__content">
                <a href="article.html" class="container__projets__link">
                    <img src="img/artiste.jpg" class="container__projets__image" width="1920" height="1080" alt="Un site sur Nicolas De Stael"/>
                    <div class="container__projets__hov">
                        <div class="container__projets__title">
                            <p class="container__projets__text-one">
                                Un site sur Nicolas De Stael
                            </p>
                            <a href="article.html" class="container__projets__text-two">Voir le projet</a>
                        </div>
                        <div class="container__projets__color"></div>
                    </div>
                </a>
            </div>
            <div class="container__projets__content">
                <a href="article.html" class="container__projets__link">
                    <img src="img/biblio.jpg" class="container__projets__image" width="2360" height="1598" alt="Un gestionnaire de bibliothèque"/>
                    <div class="container__projets__hov">
                        <div class="container__projets__title">
                            <p class="container__projets__text-one">
                                Un gestionnaire de bibliothèque
                            </p>
                            <a href="article.html" class="container__projets__text-two">Voir le projet</a>
                        </div>
                        <div class="container__projets__color"></div>
                    </div>
                </a>
            </div>
        </div>
        <a href="<?php the_field('portfolio_link-projet');?>" class="container__view"><?php _e('Voir tous mes projets','b');?></a>
    </div>
    <div class="container__contact" id="contact" data-midnight="orange">
        <h2 aria-level="2" class="container__contact__title">Me contacter</h2>
        <form class="container__form" action="" method="post">
            <fieldset>
                <ul class="container__list">
                    <li class="container__detail">
                        <label for="name" class="container__detail__label">Nom &nbsp;</label>
                        <input  class="container__detail__text" id="name" autocomplete="on" name="name" type="text" placeholder="Anthony">
                    </li>
                    <li class="container__detail">
                        <label for="email" class="container__detail__label">Mail &nbsp;</label>
                        <input  class="container__detail__text" id="email" autocomplete="on" name="email" type="email" placeholder="dupont@gmail.com">
                    </li>
                    <li class="container__detail">
                        <label for="message" class="container__detail__label">Message &nbsp;</label>
                        <textarea class="container__detail__text" id="message" name="message" rows="15" cols="50" placeholder="Votre message"></textarea>
                    </li>
                    <li class="container__detail">
                        <input id="send" type="submit" value="Envoyer" class="container__detail__text container__detail__text--button">
                    </li>
                </ul>
            </fieldset>
        </form>
    </div>
<?php
get_footer();

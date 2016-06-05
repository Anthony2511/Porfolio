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

if(is_page()){
    query_posts([
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
}
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
        <a href="<?php echo get_template_directory_uri() .'/img/CV.pdf';?>" class="container__cv__link">
            <p class="container__cv__text">
                <?php _e('Voir mon CV','b');?>
            </p>
        </a>
    </div>
    <div class="container__realisations" id="realisations" data-midnight="orange">
        <h2 aria-level="2" class="container__title"><?php the_field('portfolio_section-two');?></h2>
        <div class="container__projets">
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="container__projets__content">
                <a href="<?php the_permalink();?>" class="container__projets__link">
                    <img src="<?php the_field('article_site');?>" class="container__projets__image" width="2250" height="1500" alt="Un gestionnaire de bibliothèque"/>
                    <div class="container__projets__hov">
                        <div class="container__projets__title">
                            <p class="container__projets__text-one">
                                <?php the_title();?>
                            </p>
                            <a href="<?php the_permalink();?>" class="container__projets__text-two"><?php _e('Voir le projet','b');?></a>
                        </div>
                        <div class="container__projets__color"></div>
                    </div>
                </a>
            </div>
			<?php endwhile; endif; ?>
        </div>
        <a href="<?php the_permalink(32);?>" class="container__view"><?php _e('Voir tous mes projets','b');?></a>
    </div>
    <div class="container__contact" id="contact" data-midnight="orange">
        <h2 aria-level="2" class="container__contact__title"><?php the_field('portfolio_section-three');?></h2>
        <form class="container__form" action="" method="post">
            <fieldset>
                <ul class="container__list">
                    <li class="container__detail">
                        <label for="name" class="container__detail__label"><?php the_field('portfolio_section-three');?></label>
                        <input  class="container__detail__text" id="name" autocomplete="on" name="name" type="text" placeholder="Anthony">
                    </li>
                    <li class="container__detail">
                        <label for="email" class="container__detail__label"><?php the_field('portfolio_label-email');?></label>
                        <input  class="container__detail__text" id="email" autocomplete="on" name="email" type="email" placeholder="dupont@gmail.com">
                    </li>
                    <li class="container__detail">
                        <label for="message" class="container__detail__label"><?php the_field('portfolio_label-message');?></label>
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

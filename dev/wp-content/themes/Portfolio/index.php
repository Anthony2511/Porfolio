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
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post'
    ]);
}
?>
    <section class="container__propos" id="propos" >
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
    </section>
    <div class="container__cv" data-midnight="orange">
        <a href="<?php echo get_template_directory_uri() .'/img/CV.pdf';?>" class="container__cv__link">
            <p class="container__cv__text">
                <?php _e('Voir mon CV','b');?>
            </p>
        </a>
    </div>
    <section class="container__realisations" id="realisations" data-midnight="orange">
        <h2 aria-level="2" class="container__title"><?php the_field('portfolio_section-two');?></h2>
        <div class="container__projets">
			<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="container__projets__content">
                <a href="<?php the_permalink();?>" class="container__projets__link">
                    <img src="<?php the_field('article_site');?>" class="container__projets__image" alt="" width="510" height="291"/>
                    <div class="container__projets__hov">
                        <div class="container__projets__title">
                            <span class="container__projets__text-one"></span>
                        </div>
                        <div class="container__projets__color"></div>
                    </div>
                </a>
            </div>
			<?php endwhile; endif; ?>
        </div>
		<div class="container__view">
			<a href="<?php the_permalink(32);?>" class="container__view-link"><?php _e('Voir tous mes projets','b');?></a>
		</div>
    </section>
    <section class="container__contact" id="contact" data-midnight="orange">
        <h2 aria-level="2" class="container__contact__title"><?php _e('Me contacter','b');?></h2>
		<div class="container__form">
				<?php echo do_shortcode( '[contact-form-7 id="88" title="Me contacter"]' ); ?>
		</div>
    </section>
<?php
get_footer();
?>

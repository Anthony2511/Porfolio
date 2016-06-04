<?php
get_header();
?>
    <section class="error404">
        <h2 class="error404__title">Oups&nbsp;</h2>
        <p class="error404__description">
            La page que vous demandez n'est pas ou n'est plus disponible
        </p>
        <p class="error404__return">
            Vous pouvez retourner à <a href="<?php echo home_url('/');?>" rel="home">la page d'accueil</a>
        </p>
    </section>
<?php
get_footer();
?>

<?php
/*
Template Name: Single Projets
*/
; ?>

<?php include('head.php'); ?>

<body class="single-projet">
  <div class="background">
    <h1 class="hidden" aria-level="1" role="heading"><?php the_title(); ?></h1>
    <?php include('navigation.php'); ?>
    <?php include('header.php'); ?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
      <div class="wrap">
        <div class="projet__infos-bloc">
          <section class="projet__infos">
            <h3 class="title" aria-level="3" role="heading"><?= __('Présentation','po'); ?></h3>
            <p class="projet__infos-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Sed consectetur dolor sit amet porta porta. Aliquam mollis mollis pellentesque.
              Nullam odio lacus, varius nec augue sed, lacinia semper metus.
              Phasellus sit amet tempus ligula, eu mattis mi. Vivamus et sapien felis.
              Sed eget rutrum ex, a iaculis mi. Praesent in diam non nulla suscipit porta eget vitae lectus.
            </p>
          </section>
          <section class="projet__infos">
            <h3 class="title" aria-level="3" role="heading"><?= __('Technologies','po'); ?></h3>
            <p class="projet__infos-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Sed consectetur dolor sit amet porta porta. Aliquam mollis mollis pellentesque.
              Nullam odio lacus, varius nec augue sed, lacinia semper metus.
              Phasellus sit amet tempus ligula, eu mattis mi. Vivamus et sapien felis.
              Sed eget rutrum ex, a iaculis mi. Praesent in diam non nulla suscipit porta eget vitae lectus.
            </p>
          </section>
        </div>
      </div>
        <?php endwhile; endif; ?>
      </div>
      <?php include('footer.php'); ?>

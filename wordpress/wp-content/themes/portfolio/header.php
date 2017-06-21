<header class="header">
  <div class="container">
    <section class="container__bloc">
       <?php if (is_single()): ?>
         <section class="container__width">
           <h2 class="container__title" aria-level="2" role="heading"><?php the_title(); ?></h2>
           <span class="container__date"><strong><?= __('Réalisation :','po'); ?> </strong><?= get_field('single-projet__date'); ?></span>
           <p class="container__text">
             <?= get_field('single-projet__synospis'); ?>
           </p>
         </section>
         <div class="container__links">
           <a class="container__link container__link--site" href="<?= get_field('single-projet__link-site'); ?>" title="Vers le site"><?= __('Vers le site','po'); ?></a>
           <a class="container__link container__link--repo" href="<?= get_field('single-projet__link-repo'); ?>" title="Vers le repo github"><?= __('Vers le repo','po'); ?></a>
         </div>
      <?php endif; ?>
      <?php if (!is_single()) : ?>
        <h2 class="title color projet" aria-level="2" role="heading"><?= __('Tous mes projets','po'); ?></h2>
      <?php endif; ?>
    </section>
    <?php if (is_single()): ?>

    <?php endif; ?>
  </div>
</header>

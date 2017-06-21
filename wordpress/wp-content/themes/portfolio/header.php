<header class="projet-header projets">
  <div class="wrap">
    <section class="projet-header__bloc">
       <?php if (is_single()): ?>
         <h2 class="projet-header__title" aria-level="2" role="heading">Mariam Faso</h2>
         <span class="projet-header__date"><strong><?= __('Réalisation :','po'); ?> </strong>Mai 2017</span>
         <p class="projet-header__text">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Sed consectetur dolor sit amet porta porta. Aliquam mollis mollis pellentesque.
           Nullam odio lacus, varius nec augue sed, lacinia semper metus.
           Phasellus sit amet tempus ligula, eu mattis mi. Vivamus et sapien felis.
           Sed eget rutrum ex, a iaculis mi. Praesent in diam non nulla suscipit porta eget vitae lectus.
         </p>
      <?php endif; ?>
      <?php if (!is_single()) : ?>
        <h2 class="title color projet" aria-level="2" role="heading"><?= __('Tous mes projets','po'); ?></h2>
      <?php endif; ?>
    </section>
    <?php if (is_single()): ?>
      <div class="projet-header__links">
        <a class="projet-header__link projet-header__link--site" href="http://mariam-faso.beaumecker.be/" title="Vers le site"><?= __('Vers le site','po'); ?></a>
        <a class="projet-header__link projet-header__link--repo" href="https://github.com/Anthony2511/Mariam-Faso" title="Vers le repo github"><?= __('Vers le repo','po'); ?></a>
      </div>
    <?php endif; ?>
  </div>
</header>

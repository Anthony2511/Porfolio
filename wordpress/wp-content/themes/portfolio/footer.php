<footer class="footer">
  <section class="footer__width">
    <h3 class="title color title__footer"><?= __('Me suivre', 'po'); ?></h3>
      <a class="footer__link footer__link--facebook" href="<?= get_field('footer__facebook'); ?>" title="Vers ma page Facebook"><span><?= __('Facebook','po'); ?></span></a>
      <a class="footer__link footer__link--github" href="<?= get_field('footer__github'); ?>" title="Vers ma page Github"><span><?= __('Github','po'); ?></span></a>
      <a class="footer__link footer__link--pinterest" href="<?= get_field('footer__pinterest'); ?>" title="Vers ma page Pinterest"><span><?= __('Pinterest','po'); ?></span></a>
      <span class="footer__copyright">&copy; <?= __('2016-2017 - Anthony Beaumecker','po'); ?></span>
  </section>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="<?= $scripts . 'nav.js'; ?>"></script>
  <script src="<?= $scripts . 'no-js.js'; ?>"></script>
</footer>
</div>
</body>
</html>

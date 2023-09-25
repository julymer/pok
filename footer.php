<?php wp_footer(); ?>

<footer class="footer">
  <div class="main_container footer__content">
    <div>
      <a href="http://localhost/pok/politique-de-confidentialite/">Politique de confidentialité</a>
      <a href="#nous-contacter">Recrutement</a>
      <p class="footer__content_alcool"><?php the_field('home__footer_description') ?></p>
    </div>
    <img class="logoPok" src="<?php the_field('logo') ?>" alt="logo">
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/custom.js"></script>
</body>
</html>
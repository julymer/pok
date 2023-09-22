<?php wp_footer(); ?>

<footer class="footer">
  <div class="main_container footer__content">
    <div>
      <p>Mentions légales</p>
      <a href="#nous-contacter">Recrutement</a>
    </div>
    <img src="<?php the_field('home__footer_image') ?>" alt="logo">
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });

  </script>
</body>
</html>
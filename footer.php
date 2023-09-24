<?php wp_footer(); ?>

<footer class="footer">
  <div class="main_container footer__content">
    <div>
      <p>Mentions légales</p>
      <a href="#nous-contacter">Recrutement</a>
      <p class="footer__content_alcool"><?php the_field('home__footer_description') ?></p>
    </div>
    <img class="logoPok" src="<?php the_field('home__footer_image') ?>" alt="logo">
  </div>
</footer>

<script>
  $(function() {
    $('.popup-image').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
        }
    });
  });
</script>

<script>
  $(function() {
    $('.popup-carte').magnificPopup({
      type: 'image'
    });
  });
</script>

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
  <script>
    $(function() {
      $('.popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
      });
    });
  </script>

<script>
// FOOTER : BOUTON DE RETOUR EN HAUT //

document.addEventListener('DOMContentLoaded', function() {
    var boutonRetour = document.getElementById('retourHaut');

    window.onscroll = function() {
        if (document.documentElement.scrollTop > 100) {
            boutonRetour.style.display = 'block';
        } else {
            boutonRetour.style.display = 'none';
        }
    };

    boutonRetour.addEventListener('click', function() {
        document.documentElement.scrollTop = 0;
    });
});

</script>
</body>
</html>
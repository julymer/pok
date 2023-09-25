/**********Pop up images intro************/  

  $(function() {
    $('.popup-image').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
        }
    });
  });

/**********Pop up carte de Trinivel************/  

  $(function() {
    $('.popup-carte').magnificPopup({
      type: 'image'
    });
  });

/**********Swiper équipe************/  

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

/**********Pop up video************/  

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

/**********Bouton de retour en haut************/  

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

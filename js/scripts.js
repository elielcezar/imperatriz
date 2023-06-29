(function ($) {
  $(document).ready(function () {
    const w = window.innerWidth;
    const h = window.innerHeight;
    const mobile = w < 1300;
    const desktop = h < w;
    const menuMobile = document.querySelector('.menu-mobile .mainMenu');

    /*window.onresize = function(){ 
      const newW = window.innerWidth;
      if(newW != w){
        location.reload(); 
      }      
    };   */

    /*--- stick menu -----------------------------------------*/
    const mainHeader = document.querySelector('header');
    const cloneHeader = mainHeader.cloneNode(true);
    cloneHeader.id = 'stick-header';
    $(cloneHeader).insertAfter(mainHeader);

    if (!mobile) {
      $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
          $('#stick-header').addClass('show');
        } else {
          $('#stick-header').removeClass('show');
        }
      });
    } else {
      $('header#stick-header').addClass('show');
    }

    /* ACCORDION ------------------------------------------------------------------------------*/
    $('p.accordion').click(function () {
      $p = $(this).parent();
      $container = $(this).parents('.fornecedor');
      if ($p.hasClass('active')) {
        $p.removeClass('active');
        $container.removeClass('active');
      } else {
        $('.fornecedor').removeClass('active');
        $p.addClass('active');
        $container.addClass('active');
      }
      $('.item.active').not($p).removeClass('active');
    });

    /* CARROSSEL */
    $('.carrossel').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      dots: true,
      infinite: true,
      arrows: false,
      adaptiveHeight: true,
      fade: false,
      autoplaySpeed: 4000,
      responsive: [
        {
          breakpoint: 769,
          settings: {
            //sdots: false,
          },
        },
      ],
    });

    $('.footer-1 .patrocinadores').slick({
      slidesToShow: 6,
      dots: false,
      infinite: false,
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            infinite: true,
            arrows: false,
            adaptiveHeight: true,
            fade: false,
            autoplaySpeed: 3000,
          },
        },
      ],
    });

    $('.footer-2 .patrocinadores').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      dots: false,
      infinite: true,
      arrows: true,
      autoplay: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            infinite: true,
            arrows: false,
            adaptiveHeight: true,
            fade: false,
            autoplaySpeed: 3000,
          },
        },
      ],
    });

    /*$('.depoimentos').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      dots: false,
      infinite: true,
      arrows: true,
    });*/

    /* fancybox */
    /*$('[data-fancybox="gallery"]').fancybox({
      buttons: ['close'],
      loop: false,
      protect: true,
    });*/

    /*document.addEventListener( 'wpcf7submit', function( event ) {
      console.log('teste');
      location = 'https://www.elospace.com.br/contato-enviado-com-sucesso/';
    }, false );*/

    if (mobile) {
      $('.menu-menu-secundario-container')
        .appendTo('.menu-menu-principal-container')
        .show();

      /* botão do menu */
      $('.menuBtn').click(function () {
        $('.menuBtn').toggleClass('act');
        if ($('.menuBtn').hasClass('act')) {
          $('.mainMenu').addClass('act');
        } else {
          $('.mainMenu').removeClass('act');
        }
      });
    } else {
      /* botão do menu */
      $('.menuBtn').click(function () {
        $(this).toggleClass('act');
        if ($(this).hasClass('act')) {
          $('.menu-menu-secundario-container').addClass('act');
        } else {
          $('.menu-menu-secundario-container').removeClass('act');
        }
      });
    }

    $('.menu-mobile li#menu-item-295 a').click(function () {
      $('.menuBtn').removeClass('act');
      $('.mainMenu').removeClass('act');
    });

    /*--- STICKY - FIXED SIDEBAR -------------------------------------------*/
    function fixedSidebar() {
      var sectionOffset = $('#main-wrapper').offset().top;

      var rightHeight = $('#main-wrapper').outerHeight();
      var leftHeight = $('#sidebar').outerHeight() + 50;
      var margin = rightHeight - leftHeight - 50;
      var removeFixedOffset = sectionOffset + rightHeight - leftHeight;

      $(window).on('scroll', function () {
        if ($(this).scrollTop() > sectionOffset) {
          $('#sidebar').addClass('fixed');
        } else {
          $('#sidebar').removeClass('fixed');
        }
        if ($(this).scrollTop() > removeFixedOffset) {
          $('#sidebar').removeClass('fixed');
          $('#sidebar').css('margin-top', margin + 'px');
        } else {
          $('#sidebar').css('margin-top', '0px');
        }
      });
    }

    setTimeout(fixedSidebar, 500);
  });
})(jQuery);

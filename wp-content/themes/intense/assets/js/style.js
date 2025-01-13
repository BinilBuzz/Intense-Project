(function ($) {

  $(".slick-features").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: "30px",
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: false,
          centerPadding: "30px",
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".block-slider").slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });

  //initialize tooltip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  // returntotop
  $(window).scroll(function () {
      if ($(this).scrollTop() >= 200) { $('#return-to-top').show(200); }
      else { $('#return-to-top').hide(200); }
  });
  $('#return-to-top').click(function () {
      $('body,html').animate({ scrollTop: 0 }, 1000);
  });

  // sticking the navbar
  $(function () {
      var header = $("header");
      $(window).scroll(function () {
          var scroll = $(window).scrollTop();
          if (scroll >= 20) {
              header.addClass("scrolled");
          } else {
              header.removeClass("scrolled");
          }
      });
  });

  //responsive navbar
  $('#burger-menu').click(function () {
      $('nav .nav-items-wrapper').addClass('show')
  })
  $('#close-menu').click(function () {
      $('nav .nav-items-wrapper').removeClass('show')
  })
  $('.menu-toggler .search').on('click', function () {
      $(this).find('form').slideToggle(200);
  })
  $("#home-search").click(function () {
      $('header .menu').addClass('search-on')
      $('header .menu .search').addClass('extended')
      $('.search input').focus()
  })
  $("#search-close").click(function () {
      $('header .menu .search').removeClass('extended')
      $('header .menu').removeClass('search-on');
  })

  jQuery("#bgndVideo").YTPlayer({
      containment: "self",
      autoPlay: true,
      showControls: false,
      mute: true,
      startAt: 0,
      opacity: 1,
      loop: true,
      showYTLogo: false,
      abundance: 0,
      addRaster: false,
      realfullscreen: true,
      showAnnotations: false,
      abundance: 0.2
  });
  $('.play-btn').hide()
  $('.pause-btn').click(function () {
      $('#bgndVideo').YTPPause();
      $('.pause-btn').hide();
      $('.play-btn').show();
  })
  $('.play-btn').click(function () {
      $('#bgndVideo').YTPPlay();
      $('.pause-btn').show();
      $('.play-btn').hide();
  })

  //expandable text
  $('.see-more-btn').click(function () {
      $('.expandable-text').toggleClass("expanded")
      if ($('.expandable-text').hasClass("expanded")) {
          $('.see-more-btn').text('Show less')
      } else {
          $('.see-more-btn').text('See more')
      }
      $('html, body').animate({
          scrollTop: $(".expandable-text").offset().top - 200
      }, 1000);
  })
})(jQuery);

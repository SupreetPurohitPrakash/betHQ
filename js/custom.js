jQuery(document).ready(function ($) {
  $('.tabtoggle-nav>li').click(function () {
    var dataTarget = $(this).attr('data-target'),
      parentDiv = $(this).parents('.tabtoggle'),
      navItems = parentDiv.find('.tabtoggle-nav>li'),
      items = parentDiv.find('.tabtoggle-item');

    navItems.removeClass('active');
    items.removeClass('active');
    $(this).addClass('active');
    parentDiv.find('.tabtoggle-item[data-target="' + dataTarget + '"]').addClass('active');
  });

  $('.navigation-toggle').click(function () {
    $('.navigation').toggleClass('active');
  });

  $('#resultSlides').carousel({
    pause: true,
    interval: false,
  });

  $('.lateart-slider').slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});
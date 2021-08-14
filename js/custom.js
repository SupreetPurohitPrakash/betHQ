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
    if ($('.raceresults-card .slider').length) {
      $('.raceresults-card .slider').slick('refresh');
    }
  });

  $('.navigation-toggle').click(function () {
    $('.navigation').toggleClass('active');
  });

  if ($('#resultSlides')[0]) {
    $('#resultSlides').carousel({
      pause: true,
      interval: false,
    });
  }

  if ($('.lateart-slider')[0]) {
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
  }

  if ($('.raceresults-card .slider')[0]) {
    $('.raceresults-card .slider').each(function () {
      const sliderItem = $(this),
        sliderPrev = $(this).parents('.raceresults-card').find('.slick-prev'),
        sliderNext = $(this).parents('.raceresults-card').find('.slick-next');

      console.log(sliderItem);

      sliderItem.slick({
        dots: false,
        arrows: true,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 2,
        responsive: [{
            breakpoint: 991,
            settings: {
              slidesToShow: 4
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 3
            }
          }
        ],
        prevArrow: sliderPrev,
        nextArrow: sliderNext
      });
    })
  }

  if ($('.table-datatable')[0]) {
    $('.table-datatable').DataTable({
      "paging": false,
      "info": false,
      "searching": false,
      columnDefs: [{
        orderable: false,
        targets: [3, 4]
      }]
    });
  }

  $('.sidebar-toggle').click(function () {
    if ($(this).hasClass('open')) {
      $('.sidebar').slideUp();
      $(this).removeClass('open');
    } else {
      $('.sidebar').slideDown();
      $(this).addClass('open');
    }
  });

  $('.content-reveal-btn').click(function () {
    const $this = $(this),
      contentReveal = $(this).parents('.content-reveal'),
      hiddenContent = contentReveal.find('p.hidden');

    if (contentReveal.hasClass('active')) {
      hiddenContent.slideUp(function () {
        contentReveal.removeClass('active');
        $this.text('Full Read');
      });
    } else {
      hiddenContent.slideDown(function () {
        contentReveal.addClass('active');
        $this.text('Hide Read');
      });
    }
  });

  $('.glossarybrowse-list li').click(function () {
    const dataTarget = $(this).data('target'),
      targetTerm = $('.termdefine[data-id="' + dataTarget + '"]'),
      activeTerm = $('.termdefine.active'),
      activeList = $('.glossarybrowse-list li.active'),
      $this = $(this);

    console.log(targetTerm);
    console.log('Target Term Length: ', targetTerm.length);

    if ($this.hasClass('active') || targetTerm.length == 0) {
      return;
    }

    activeList.removeClass('active');
    $this.addClass('active');

    activeTerm.slideUp(function () {
      activeTerm.removeClass('active')
    });

    targetTerm.slideDown(function () {
      targetTerm.addClass('active')
    })
  });

  $('.accord-title').click(function () {
    const parentItem = $(this).parents('.accord-item'),
      bodyItem = parentItem.find('.accord-body'),
      activeItem = $(this).parents('.accord').find('.accord-item.active'),
      activeBody = activeItem.find('.accord-body');

    if (parentItem.hasClass('active')) {
      bodyItem.slideUp(function () {
        parentItem.removeClass('active');
      })
    } else {
      activeBody.slideUp(function () {
        activeItem.removeClass('active');
      });

      bodyItem.slideDown(function () {
        parentItem.addClass('active');
      });
    }
  });
});
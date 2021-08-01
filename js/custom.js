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
});
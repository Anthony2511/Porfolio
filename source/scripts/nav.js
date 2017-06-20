(function($){
    $('.nav__menu').click(function (e) {
        e.preventDefault();
        $(this).next().toggleClass('open');
        $(this).toggleClass('unfolded');
    })

    $('.nav__button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    })

    if ($('body').hasClass('home')) {
      var heightHeader = $('.header').outerHeight(),
          heightNav = $('.nav').outerHeight();

      $(window).scroll(function () {
        var scroll = $(window).scrollTop(),
            width = $(window).width();
        if (scroll + heightNav >= heightHeader && width >= 1024) {
          $('body').addClass('menu-fixed');
        }else if (scroll + heightNav < heightHeader && width >= 1024) {
          $('body').removeClass('menu-fixed');
        }
      });
    }
})(jQuery);

(function($){

    $('.nav__button').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('menu-unfolded');
        $('body').toggleClass('with-menu');
    })

      var heightHeader = $('.header').outerHeight(),
          heightNav = $('.nav').outerHeight();
          console.log(heightHeader);

      $(window).scroll(function () {
        var scroll = $(window).scrollTop(),
            width = $(window).width();
        if (scroll + heightNav >= heightHeader) {
          $('body').addClass('menu-fixed');
        }else if (scroll + heightNav < heightHeader) {
          $('body').removeClass('menu-fixed');
        }
      });
})(jQuery);

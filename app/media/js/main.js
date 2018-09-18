$(document).ready(function () {
    'use strict';

    var $flashMessages = $('#landings-flash-messages').find('.message'),
        mobileNav = '#mobileNav';

    if ($flashMessages.length) {
        $flashMessages.each(function (i) {
            var $msg = $(this);

            new PNotify({
                title: $msg.data('title'),
                text: $msg.text(),
                icon: $msg.data('icon'),
                type: $msg.data('style'),
                delay: 4000
            });
        });
    }

    $('.slider-1').bxSlider({
        slideWidth: 1140,
        slideHeight: 800,
        maxSlides: 1,
        minSlides: 1,
        slideMargin: 0,
        auto: true,
        autoDelay: 3000,
        easing: 'ease-in-out',
        mode: 'fade'
    });

    $('body').on("click", '#mobileMenuLink a', function (e) {
        e.preventDefault();

        if ($(mobileNav).hasClass("menu-open")) {
            $(mobileNav).animate({"height": "0"}, 200);
        }
        else {
            $(mobileNav).animate({"height": 142}, 200);
        }

        $(mobileNav).toggleClass("menu-open");
    });
});

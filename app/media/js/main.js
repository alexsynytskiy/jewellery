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

    windowSize();
    $(window).resize(function () {
        windowSize();
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

/**
 * window with gradient size preparing
 */
function windowSize() {
    var height = $(document).height(),
        value = '100%';

    if (height < $(window).height()) {
        value = 'calc(100vh - 195px)';
    }

    $('.thumbnail-layout-autocolumns #projectThumbs > .wrapper').css({
        'min-height': value
    });
}

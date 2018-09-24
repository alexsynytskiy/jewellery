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

    $("#yui_3_17_2_1_1537363311129_129").AutoLightbox();

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
    }).on("click", '#yui_3_17_2_1_1537363311129_129 a', function (e) {
        e.preventDefault();
    });
});

/**
 * window with gradient size preparing
 */
function windowSize() {
    if ($(window).width() > 750) {
        var height = $('#yui_3_17_2_1_1537367486882_130').height() + $('#header').height() + $('#footer').height(),
            exceptHeight = $('#header').height() + $('#footer').height() + 23,
            value = '100%';

        if (height < $(window).height()) {
            value = 'calc(100vh - ' + exceptHeight + 'px)';
        }

        $('.thumbnail-layout-autocolumns #projectThumbs > .wrapper').css({
            'min-height': value
        });
    }
}

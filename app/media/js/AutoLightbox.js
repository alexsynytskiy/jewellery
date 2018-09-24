(function ($) {
    $.fn.AutoLightbox = function (options) {
        var setting = $.extend({
            width: 560,
            height: 340,
            dimBackground: true
        }, options);

        if ($(window).width() < 720) {
            setting = $.extend({
                width: 320,
                height: 240,
                dimBackground: true
            }, options);
        }

        return this.each(function () {
            var lightBox = document.createElement("div");
            var closeBox = document.createElement("span");
            $(closeBox).html("&times;").addClass("close-light-box");

            $(closeBox).css({
                'position': 'absolute',
                'width': '32px',
                'height': '32px',
                'right': '5px',
                'top': '5px',
                'textAlign': 'center',
                'lineHeight': '32px',
                'cursor': 'pointer',
                'fontSize': '26px',
                'color': 'rgba(0, 0, 0, 0.8)',
                'z-index': '999'
            });

            var galleryPhoto = $(this).find('img');

            $(galleryPhoto).bind('click', function () {
                var singlePhoto = $(this).clone().css({
                    'width': setting.width,
                    'height': setting.height,
                    'objectFit': 'cover'
                });

                $(lightBox).css({
                    'width': setting.width,
                    'height': setting.height,
                    'position': 'fixed',
                    'top': '50%',
                    'marginTop': -(setting.height / 2),
                    'left': '50%',
                    'marginLeft': -(setting.width / 2),
                    'zIndex': '999',
                    'display': 'none'

                });
                $(lightBox).html(singlePhoto).appendTo("body").fadeIn();
                $(lightBox).addClass("light-box").prepend(closeBox);

                if (setting.dimBackground === true) {
                    var dimmy = document.createElement("div");
                    $(dimmy).css({
                        'width': '100%',
                        'height': '100vh',
                        'background': 'rgba(0, 0, 0, 0.5)',
                        'zIndex': '2',
                        'position': 'fixed',
                        'top': '0',
                        'left': '0'
                    }).appendTo("body").fadeIn("slow");
                }

                $(closeBox).click(function () {
                    $(lightBox).remove();
                    if (setting.dimBackground === true) {
                        $(dimmy).remove();
                    }
                });

            });
        });
    };

})(jQuery);
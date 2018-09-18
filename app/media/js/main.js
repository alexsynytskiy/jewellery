$(document).ready(function () {
    'use strict';

    var $flashMessages = $('#landings-flash-messages').find('.message'),
        sidebarClass = '.sidebar-right-fixed';

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
});
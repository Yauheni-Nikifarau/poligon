(function ($) {
    'use strict';

    $(document).ready(function () {
        const tabs = $('#forms-tabs');
        tabs.on('click', 'button', function () {
            const tab = $(this);
            tabs.find('button').removeClass('active');
            tab.addClass('active');
            $('form').hide()
            $('#' +tab.attr('form') + '-form').show();
        })
    });

})(jQuery);

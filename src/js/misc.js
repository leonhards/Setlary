/* global jQuery */
(function($) {
    // responsive iframe backup strategy. check _media.scss p iframe
    $('p:has(iframe)').css({
        position: 'relative',
        'padding-bottom': '56.25%',
        height: '0',
        overflow: 'hidden',
    });
})(jQuery);
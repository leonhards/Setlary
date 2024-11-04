/**
 * Handles the Admin Javascript.
 */
( function ($) {
    $(document).on('click', '.nav-tab-wrapper a.devAl', function() {
        $('section').hide();
        $('section').eq($(this).index()).show();
        return false;
    });
})(jQuery);
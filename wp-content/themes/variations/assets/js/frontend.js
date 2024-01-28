; (function ($) {
    $(function () {

        /**
         * Toggle Sub Menu
         */
        if ($(window).width() <= 767) {
            $('.wp-block-navigation-submenu__toggle, .wp-block-navigation-item.has-child > a').on('click', function (e) {

                e.preventDefault();
                $(this).parent().children('ul').slideToggle('fast');
            });
        }

    });
})(jQuery);
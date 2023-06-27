$(document).ready(function () {
    $(window).scroll(function () {

        $('.divprevention-texte').each(function (i) {
            var bottom_of_element = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            if (bottom_of_window > bottom_of_element) {

                $(this).animate({ 'opacity': '1' }, 1000);
                $('.divprevention-img-right').animate({ 'opacity': '1', 'margin': 'auto' }, 1000);
                $('.divprevention-img-left').animate({ 'opacity': '1', 'margin': 'auto' }, 1000);

            }

        });

    });

}); 
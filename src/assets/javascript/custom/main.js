//https://github.com/flesler/jquery.scrollTo
// sets defaults
jQuery(document).ready(function($) {
    $.extend($.scrollTo.defaults, {
        axis: 'y',
        duration: 700,
        easing: 'swing',
        margin: true,
    });
    $(".go-to-buy-section").on("click", function() {
        $.scrollTo("#buy-section");
    });
});

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
        $.scrollTo("#buy");
    });
});
jQuery(function() {
    _exitPop.init("parts/frontpop.html");
});

function displayTestimonials(number, text) {
    var el = $('#testimonials').find(".testimonial"),
        testimonials = el.length;
    if (testimonials > number) {
        el.slice(number).hide();
        el.eq(number).before("<div class=\"show-all-testimonials\"><p><a href=\"#\">" + text + "</a></p></div>");
        $("#testimonials").on("click", ".show-all-testimonials", function(e) {
            e.preventDefault();
            var $this = $(this);
            $(this).closest("#testimonials").find(".testimonial").fadeIn(function() {
                $this.hide();
            });
        });
        console.log("enough");
    } else {
        console.log("too many");
    }
}
jQuery(document).ready(function($) {
    displayTestimonials(3, "Read more testimonials [+]")
});

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

function displayTestimonials(number, text) {
    var el = $('#testimonials').find(".testimonial"),
        testimonials = el.length;
    if (testimonials > number) {
        el.slice(number).hide();
        el.eq(number).before("<div class=\"row\"><div class=\"small-12 columns\"><div class=\"show-all-testimonials\"><p><a href=\"#\">" + text + "</a></p></div></div></div>");
        $("#testimonials").on("click", ".show-all-testimonials", function(e) {
            e.preventDefault();
            var $this = $(this);
            $(this).closest("#testimonials").find(".testimonial").fadeIn(function() {
                $this.hide();
            });
        });
    }
}
jQuery(document).ready(function($) {
    _exitPop.init("parts/frontpop.html");
    displayTestimonials(3, "Read more testimonials [+]");
    initCart("XPI2", "https://secure.xpisupplements.com/secure-checkout/", "product.dev");
});

jQuery(document).ready(function($) {
    $('.add-to-cart').on('click', function(event) {
        event.preventDefault();
        $this = $(this);
        $this.html('<i class="fa fa-spinner fa-spin"></i>');
        setTimeout(function(){
            $this.closest("form").submit();
        }, 500);
    });
});
$('.off-canvas-list').on('click', 'li.mobile', function(){
    $('.off-canvas-wrap').removeClass('move-left');
    console.log('done');
});
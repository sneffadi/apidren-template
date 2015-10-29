jQuery(document).ready(function($) {
    var cart = $(".top-bar-section").find(".cart"),
        seePricing = $(".top-bar-section").find(".go-to-buy-section"),
        cartItems = 1;
    if (cartItems > 0) {
        seePricing.hide().closest("li").removeClass('has-form');
        cart.append(" (" + cartItems + ")");
        cart.fadeIn();
    };
    cart.closest("li").hover(function() {
        $(this).find(".order-summary").toggleClass('show-summary');
        $(this).toggleClass('relative');
    });
});

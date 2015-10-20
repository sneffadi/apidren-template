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
    // $("#faq").find(".q-a").on("click", function() {
    //     var el = $(this),
    //         showHide = el.find(".show-hide");
    //     el.find('.a').slideToggle(222);
    //     if (showHide.text() == showHide.data("text-swap")) {
    //         showHide.text(showHide.data("text-original"));
    //     } else {
    //         showHide.data("text-original", showHide.text());
    //         showHide.text(showHide.data("text-swap"));
    //     }
    // });
    // $("#faq").find(".show-hide-all").on("click",function(){
    //     var showHideAll = $(this),
    //         showHide = $(this).closest("#faq").find(".show-hide");
    //     if (showHideAll.text() == showHideAll.data("text-swap")) {
    //         showHideAll.text(showHideAll.data("text-original"));
    //         showHide.text(showHide.data("$("#faq").find(".a").slideUp(2text-original"));
    //         22);
    //     } else {
    //         showHideAll.data("text-original", showHideAll.text());
    //         showHideAll.text(showHideAll.data("text-swap"));
    //         $("#faq").find(".a").slideDown(222);
    //     }
    // });
    $("#faq").find(".show-hide-all").text($("#faq").find(".show-hide-all").data("text-original"));
    $("#faq").find(".show-hide").text($("#faq").find(".show-hide").data("text-original"));
    $("#faq").find(".q-a").on("click", function() {
        var el = $(this).find(".show-hide");
        if (el.text() == el.data("text-swap")) {
            el.text(el.data("text-original"));
            $(this).find(".a").slideUp();
        } else {
            el.text(el.data("text-swap"));
            $(this).find(".a").slideDown();
        }
    });
    $("#faq").find(".show-hide-all").on("click", function() {
        var el = $(this),
            sh = el.closest("#faq").find(".show-hide");
        if (el.text() == el.data("text-swap")) {
            el.text(el.data("text-original"));
            el.closest("#faq").find(".a").slideUp(222);
            sh.text(sh.data("text-original"));
        } else {
            el.text(el.data("text-swap"));
            el.closest("#faq").find(".a").slideDown(222);
            sh.text(sh.data("text-swap"));
        }
    });
});

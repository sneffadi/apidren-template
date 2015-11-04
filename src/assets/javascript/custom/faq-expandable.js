jQuery(document).ready(function($) {
    $("#faq.expandable").find(".q").append("<span class=\"show-hide\"></span>");
    $("#faq.expandable").find(".show-hide").data("text-swap", '<i class="fa fa-minus-square-o"></i>').data("text-original", '<i class="fa fa-plus-square-o"></i>');
    var original = $("#faq.expandable").find(".show-hide").data("text-original"),
        swap = $("#faq.expandable").find(".show-hide").data("text-swap");
    $("#faq.expandable").find(".show-hide-all").html($("#faq").find(".show-hide-all").data("text-original"));
    $("#faq.expandable").find(".show-hide").html(original);
    $("#faq.expandable").find(".q-a").on("click", function() {
        var el = $(this).find(".show-hide");
        if (el.html() == el.data("text-swap")) {
            el.html(el.data("text-original"));
            $(this).find(".a").slideUp();
        } else {
            el.html(el.data("text-swap"));
            $(this).find(".a").slideDown();
        }
    });
    $("#faq.expandable").find(".show-hide-all").on("click", function() {
        var el = $(this),
            sh = el.closest("#faq").find(".show-hide");
        if (el.html() == el.data("text-swap")) {
            el.html(el.data("text-original"));
            el.closest("#faq").find(".a").slideUp(222);
            sh.html(sh.data("text-original"));
        } else {
            el.html(el.data("text-swap"));
            el.closest("#faq").find(".a").slideDown(222);
            sh.html(sh.data("text-swap"));
        }
    });
});

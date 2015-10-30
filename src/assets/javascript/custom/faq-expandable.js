jQuery(document).ready(function($) {
    $("#faq.expandable").find(".q").append("<span class=\"show-hide\"></span>");
    $("#faq.expandable").find(".show-hide").data("text-swap", "[-]").data("text-original", "[+]");
    var original = $("#faq.expandable").find(".show-hide").data("text-original"),
        swap = $("#faq.expandable").find(".show-hide").data("text-swap");
    $("#faq.expandable").find(".show-hide-all").text($("#faq").find(".show-hide-all").data("text-original"));
    $("#faq.expandable").find(".show-hide").text(original);
    $("#faq.expandable").find(".q-a").on("click", function() {
        var el = $(this).find(".show-hide");
        if (el.text() == el.data("text-swap")) {
            el.text(el.data("text-original"));
            $(this).find(".a").slideUp();
        } else {
            el.text(el.data("text-swap"));
            $(this).find(".a").slideDown();
        }
    });
    $("#faq.expandable").find(".show-hide-all").on("click", function() {
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

//https://github.com/flesler/jquery.scrollTo
// sets defaults
$.extend($.scrollTo.defaults, {
    axis: 'y',
    duration: 700,
    easing: 'swing',
    margin: true,
});
$(".go-to-buy-section").on("click", function() {
    $.scrollTo("#buy-section");
});
$("#faq").find(".q").on("click",function(){
    $(this).next().slideToggle(400);
    $(this).toggleClass('open');
});


// $("#faq").find(".text-swap").on("click", function() {
//   var el = $(this);
//   if (el.text() == el.data("text-swap")) {
//     el.text(el.data("text-original"));
//     el.closest('#faq').find('.a').slideDown(400);
//   } else {
//     el.data("text-original", el.text());
//     el.text(el.data("text-swap"));
//     el.closest('#faq').find('.a').slideUp(400);
//   }
//   el.closest('#faq').find('.q').toggleClass('open');
// });

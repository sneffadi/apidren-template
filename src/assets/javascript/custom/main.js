//https://github.com/flesler/jquery.scrollTo
// sets defaults
// jQuery(document).ready(function($) {
//     $.extend($.scrollTo.defaults, {
//         axis: 'y',
//         duration: 700,
//         easing: 'swing',
//         margin: true,
//     });
//     $(".go-to-buy-section").on("click", function() {
//         $.scrollTo("#buy-section");
//     });
// });
$(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    }); /* ! https://github.com/robflaherty/jquery-scrolldepth | v0.4.1 Copyright (c) 2014 Rob Flaherty (@robflaherty) Licensed under the MIT and GPL licenses. */ ;
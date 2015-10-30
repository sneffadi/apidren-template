var myCart;

function initCart(merchantId, cartUrl, domain) {
    var app = {
        'data': {},
        'views': {},
        'functions': {}
    };
    myCart = app;
    app.data.merchantId = merchantId;
    app.data.cartUrl = cartUrl;
    app.data.domain = '.' + domain;
    app.data.cartCookieName = 'UltraCartShoppingCartID';
    app.data.cartId = Cookies.get(app.data.cartCookieName) || '';
    app.data.restUrl = 'rest_proxy.php?_url=/rest/cart';
    app.functions.parseHttpParameters = function() {
        var e = {};
        var t = window.location.search.substring(1);
        var n = t.split("&");
        for (var r = 0; r < n.length; r++) {
            var i = n[r].split("=");
            var s = i[0].toLowerCase();
            var o = decodeURIComponent(i[1]);
            if (!e.hasOwnProperty(s)) e[s] = [];
            e[s].push(o);
        }
        return e;
    };
    app.functions.getCart = function() {
        var cartRestUrl = app.data.restUrl;
        if (app.data.cartId.length !== 0) cartRestUrl = cartRestUrl + '/' + app.data.cartId;
        $.ajax({
            'url': cartRestUrl,
            'headers': {
                'X-UC-Merchant-Id': app.data.merchantId,
                'cache-control': 'no-cache'
            },
            'dataType': 'json'
        }).done(function(response) {
            app.data.cart = response;
            if (app.data.cartId.length === 0) {
                Cookies.set(app.data.cartCookieName, app.data.cart.cartId, {
                    'expires': 7,
                    'path': '/',
                    'domain': app.data.domain
                });
                app.data.cartId = app.data.cart.cartId;
            }
            var coupon = app.functions.parseHttpParameters().coupon || ''; //value of coupon
            if (coupon.length > 0) {
                app.functions.addCoupon(coupon[0]);
            }
            app.views.renderCart();
            var cartEl = $(".top-bar-section").find(".cart"),
                seePricing = $(".top-bar-section").find(".go-to-buy-section"),
                cartItems = app.data.cart.items.length;
            if (cartItems > 0) {
                seePricing.hide().closest("li").removeClass('has-form');
                cartEl.append(" (" + cartItems + ")");
                cartEl.fadeIn();
                cartEl.closest("li").hover(function() {
                $(this).find(".order-summary").toggleClass('show-summary');
                $(this).toggleClass('relative');
            });
            };

        });
    };
    app.functions.addItem = function(itemId, quantity, callback, el) {
        app.data.cart.items.push({
            'itemId': itemId,
            'quantity': quantity || 1
        });
        $.ajax({
            'url': app.data.restUrl + '/' + app.data.cartId,
            'method': 'PUT',
            'headers': {
                'cache-control': 'no-cache'
            },
            'contentType': 'application/json; charset=UTF-8',
            'data': JSON.stringify(app.data.cart),
            'dataType': 'json'
        }).done(function(response) {
            app.data.cart = response;
            app.views.renderCart();
            app.views.renderLightboxCart(itemId, el);
            callback();
        }).fail(function(jqxhr, status, err) {
            alert("There was a problem adding " + itemId + " to the cart. Please refresh the page and try again or call customer service to palce your order.");
        });
    };
    app.functions.removeItem = function(position, el, callback) {
        app.data.cart.items.splice(position, 1);
        $.ajax({
            'url': app.data.restUrl + '/' + app.data.cartId,
            'method': 'PUT',
            'headers': {
                'cache-control': 'no-cache'
            },
            'beforeSend': function() {
                el.closest('.cart-row').prepend('<div class="overlay"></div>');
                el.css('color', 'transparent');
                el.append('<div class="spin"></spin>');
            },
            'contentType': 'application/json; charset=UTF-8',
            'data': JSON.stringify(app.data.cart),
            'dataType': 'json'
        }).done(function(response) {
            app.data.cart = response;
            callback();
            app.views.renderCart();
        });
    };
    app.functions.addCoupon = function(couponCode) {
        var couponArray = [];
        for (var i = 0 in app.data.cart.coupons) {
            couponArray.push(app.data.cart.coupons[i].couponCode);
        }
        if (couponArray.indexOf(couponCode) < 0) {
            app.data.cart.coupons.unshift({
                'couponCode': couponCode
            });
        }
        $.ajax({
            'url': app.data.restUrl + '/' + app.data.cartId,
            'method': 'PUT',
            'headers': {
                'cache-control': 'no-cache'
            },
            'contentType': 'application/json; charset=UTF-8',
            'data': JSON.stringify(app.data.cart),
            'dataType': 'json'
        }).done(function(response) {
            app.data.cart = response;
            app.views.renderCart();
        });
    };
    app.views.renderCart = function() {
        if (app.data.cart.subtotalWithDiscount > 0) $('.cart-status, .cart-count').text(app.data.cart.subtotalWithDiscountLocalizedFormatted);
        else $('.cart-status, .cart-count').text('EMPTY');
        var itemCount = app.data.cart.items.length || 0;
        for (var i = 0 in itemCount) {
            if (app.data.cart.items[i].itemId.match(/Guar|guar/) !== null) itemCount = itemCount - 1;
        }
        var itemHTML = '<h3>Your Cart</h3>';
        for (var i = 0 in app.data.cart.items) {
            if (app.data.cart.items[i].itemId.match(/Guar|guar/) !== null) {
                itemHTML += '';
            } else {
                itemHTML += '<div class="cart-row">';
                itemHTML += '<p>' + '<a href="' + app.data.cart.items[i].viewUrl + '">' + app.data.cart.items[i].description + '</a>' + '</p>';
                itemHTML += '<p>$' + app.data.cart.items[i].unitCost + '</p>';
                itemHTML += '<p>' + '<a href="#" class="removeItem" data-position="' + app.data.cart.items[i].position + '">Remove</a>' + '</p>';
                itemHTML += '</div>';
            }
        }
        itemHTML += '<div class="cart-row">';
        itemHTML += '<h4>Sub total</h4> <p>' + app.data.cart.subtotalWithDiscountLocalizedFormatted + '</p>';
        itemHTML += '<a href="' + app.data.cartUrl + '" class="button">Proceed To Checkout</a>';
        itemHTML += '</div>';
        $('#cart-contents').html(itemHTML);
        if (itemCount > 0) $('.cart-icon').append('<span class="item-count">' + itemCount + '</span>');
        else $('.item-count').hide();
    };
    $(document).ready(function() {
        app.functions.getCart();
    });
}

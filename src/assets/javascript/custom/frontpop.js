/*=================================================================
=            https://github.com/carlsednaoui/ouibounce            =
=================================================================*/
function ouibounce(el, custom_config) {
  "use strict";
  var config = custom_config || {},
    aggressive = config.aggressive || false,
    sensitivity = setDefault(config.sensitivity, 20),
    timer = setDefault(config.timer, 1000),
    delay = setDefault(config.delay, 0),
    callback = config.callback ||
  function() {}, cookieExpire = setDefaultCookieExpire(config.cookieExpire) || '', cookieDomain = config.cookieDomain ? ';domain=' + config.cookieDomain : '', cookieName = config.cookieName ? config.cookieName : 'viewedOuibounceModal', sitewide = config.sitewide === true ? ';path=/' : '', _delayTimer = null, _html = document.documentElement;

  function setDefault(_property, _default) {
    return typeof _property === 'undefined' ? _default : _property;
  }

  function setDefaultCookieExpire(days) {
    // transform days to milliseconds
    var ms = days * 24 * 60 * 60 * 1000;
    var date = new Date();
    date.setTime(date.getTime() + ms);
    return "; expires=" + date.toUTCString();
  }
  setTimeout(attachOuiBounce, timer);

  function attachOuiBounce() {
    if (isDisabled()) {
      return;
    }
    _html.addEventListener('mouseleave', handleMouseleave);
    _html.addEventListener('mouseenter', handleMouseenter);
    _html.addEventListener('keydown', handleKeydown);
  }

  function handleMouseleave(e) {
    if (e.clientY > sensitivity) {
      return;
    }
    _delayTimer = setTimeout(fire, delay);
  }

  function handleMouseenter() {
    if (_delayTimer) {
      clearTimeout(_delayTimer);
      _delayTimer = null;
    }
  }
  var disableKeydown = false;

  function handleKeydown(e) {
    if (disableKeydown) {
      return;
    } else if (!e.metaKey || e.keyCode !== 76) {
      return;
    }
    disableKeydown = true;
    _delayTimer = setTimeout(fire, delay);
  }

  function checkCookieValue(cookieName, value) {
    return parseCookies()[cookieName] === value;
  }

  function parseCookies() {
    // cookies are separated by '; '
    var cookies = document.cookie.split('; ');
    var ret = {};
    for (var i = cookies.length - 1; i >= 0; i--) {
      var el = cookies[i].split('=');
      ret[el[0]] = el[1];
    }
    return ret;
  }

  function isDisabled() {
    return checkCookieValue(cookieName, 'true') && !aggressive;
  }
  // You can use ouibounce without passing an element
  // https://github.com/carlsednaoui/ouibounce/issues/30

  function fire() {
    if (isDisabled()) {
      return;
    }
    if (el) {
      el.style.display = 'block';
    }
    callback();
    disable();
  }

  function disable(custom_options) {
    var options = custom_options || {};
    // you can pass a specific cookie expiration when using the OuiBounce API
    // ex: _ouiBounce.disable({ cookieExpire: 5 });
    if (typeof options.cookieExpire !== 'undefined') {
      cookieExpire = setDefaultCookieExpire(options.cookieExpire);
    }
    // you can pass use sitewide cookies too
    // ex: _ouiBounce.disable({ cookieExpire: 5, sitewide: true });
    if (options.sitewide === true) {
      sitewide = ';path=/';
    }
    // you can pass a domain string when the cookie should be read subdomain-wise
    // ex: _ouiBounce.disable({ cookieDomain: '.example.com' });
    if (typeof options.cookieDomain !== 'undefined') {
      cookieDomain = ';domain=' + options.cookieDomain;
    }
    if (typeof options.cookieName !== 'undefined') {
      cookieName = options.cookieName;
    }
    document.cookie = cookieName + '=true' + cookieExpire + cookieDomain + sitewide;
    // remove listeners
    _html.removeEventListener('mouseleave', handleMouseleave);
    _html.removeEventListener('mouseenter', handleMouseenter);
    _html.removeEventListener('keydown', handleKeydown);
  }
  return {
    fire: fire,
    disable: disable,
    isDisabled: isDisabled
  };
}
/*==============================================================
=            https://github.com/js-cookie/js-cookie            =
==============================================================*/
(function(factory) {
  if (typeof define === 'function' && define.amd) {
    define(factory);
  } else if (typeof exports === 'object') {
    module.exports = factory();
  } else {
    var _OldCookies = window.Cookies;
    var api = window.Cookies = factory();
    api.noConflict = function() {
      window.Cookies = _OldCookies;
      return api;
    };
  }
}(function() {
  function extend() {
    var i = 0;
    var result = {};
    for (; i < arguments.length; i++) {
      var attributes = arguments[i];
      for (var key in attributes) {
        result[key] = attributes[key];
      }
    }
    return result;
  }

  function init(converter) {
    function api(key, value, attributes) {
      var result;
      // Write
      if (arguments.length > 1) {
        attributes = extend({
          path: '/'
        }, api.defaults, attributes);
        if (typeof attributes.expires === 'number') {
          var expires = new Date();
          expires.setMilliseconds(expires.getMilliseconds() + attributes.expires * 864e+5);
          attributes.expires = expires;
        }
        try {
          result = JSON.stringify(value);
          if (/^[\{\[]/.test(result)) {
            value = result;
          }
        } catch (e) {}
        value = encodeURIComponent(String(value));
        value = value.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);
        key = encodeURIComponent(String(key));
        key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent);
        key = key.replace(/[\(\)]/g, escape);
        return (document.cookie = [
        key, '=', value, attributes.expires && '; expires=' + attributes.expires.toUTCString(), // use expires attribute, max-age is not supported by IE
        attributes.path && '; path=' + attributes.path, attributes.domain && '; domain=' + attributes.domain, attributes.secure ? '; secure' : ''].join(''));
      }
      // Read
      if (!key) {
        result = {};
      }
      // To prevent the for loop in the first place assign an empty array
      // in case there are no cookies at all. Also prevents odd result when
      // calling "get()"
      var cookies = document.cookie ? document.cookie.split('; ') : [];
      var rdecode = /(%[0-9A-Z]{2})+/g;
      var i = 0;
      for (; i < cookies.length; i++) {
        var parts = cookies[i].split('=');
        var name = parts[0].replace(rdecode, decodeURIComponent);
        var cookie = parts.slice(1).join('=');
        if (cookie.charAt(0) === '"') {
          cookie = cookie.slice(1, -1);
        }
        try {
          cookie = converter && converter(cookie, name) || cookie.replace(rdecode, decodeURIComponent);
          if (this.json) {
            try {
              cookie = JSON.parse(cookie);
            } catch (e) {}
          }
          if (key === name) {
            result = cookie;
            break;
          }
          if (!key) {
            result[name] = cookie;
          }
        } catch (e) {}
      }
      return result;
    }
    api.get = api.set = api;
    api.getJSON = function() {
      return api.apply({
        json: true
      }, [].slice.call(arguments));
    };
    api.defaults = {};
    api.remove = function(key, attributes) {
      api(key, '', extend(attributes, {
        expires: -1
      }));
    };
    api.withConverter = init;
    return api;
  }
  return init();
}));


/*=================================
=             Object            =
=================================*/
// possibly make coupon code, colors, html file location variables passed to
_exitPop = {
  "init": function(url) {
    var utm_source = this.getParameterByName('utm_source');
    if (Cookies.get("exitPopShown") == null && utm_source != "emailteam") {
    jQuery("body").append("<div id=\"exitPop\"></div>");
    jQuery.ajax({
      url: url,
      type: 'GET',
      success: function(data) {
        jQuery("#exitPop").html(data);
      }
    });
    this.activateEP();
    }
  },
  "activateEP": function() {
    var $that = this;
    ouibounce(document.getElementById('exitPop'), {
      aggressive: true,
      timer: 0,
      cookieExpire: 10,
      cookieDomain: window.location.hostname,
      cookieName: 'exitPopShown',
      sitewide: true,
      callback: function() {
        $that.showEP();
      }
    });
  },
  "showEP": function(coupon, url) {
    var ep = jQuery('#exitPop');
    jQuery('body').on('click', '.close,.modal-footer,#exitPop-modal', function() {
      ep.hide();
    });
    jQuery('body').on('click', '.modal', function(e) {
      e.stopPropagation();
    });
  },
  "getParameterByName": function (name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
      results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
  }
};

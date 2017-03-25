$(function() {
    var a = $('img[alt^="cover"]'),
        b = a.attr("src"),
        c = a.attr("width") / a.attr("height"),
        d = $("#layout-root");
    if (!b || !d.attr("class").match(/layout--note|layout--draft/)) return void a.not('[alt^="cover!"]').parents(".e2-text-picture").detach();
    a.parents(".e2-text-picture").detach();
    var e = $.map(a.attr("alt").split(" ").slice(1), function(a) {
            return "cover__color--" + a
        }).join(" "),
        f = 300,
        g = $('<div class="cover__fotorama ' + e + '"></div>').insertBefore(d.addClass("cover")).fotorama({
            width: "100%",
            ratio: c || 16 / 9,
            maxheight: "90%",
            minheight: f,
            fit: "cover",
            allowfullscreen: !1,
            nav: !1,
            arrows: !1,
            click: !1,
            swipe: !1,
            trackpad: !1,
            spinner: {
                zIndex: -1
            }
        }),
        h = g.data("fotorama"),
        i = $("<div></div>");
    $(".js-cover").each(function() {
        $(this).appendTo(i)
    }), $("*[lead]").each(function() {
        $(this).wrapInner('<span class="text-bg"><span class="text-bg__inner"></span></span>').appendTo($(".js-cover-lead", i))
    }), h.load([{
        img: b,
        html: '<div class="layout layout--cover cover__layout ' + e + ' fotorama__select"><div class="layout__floor cover__floor">' + i.html() + "</div></div>"
    }]);
    var j, k = $(window),
        l = $(".fotorama__stage", g),
        m = navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i),
        n = 5,
        o = 0;
    k.on("resize orientationchange", function() {
        var a = 0;
        $(".js-cover").each(function() {
            a += $(this).innerHeight()
        }), a > f && (f = a, h.setOptions({
            minheight: f
        })), m || (o = g.height(), k.scroll())
    }), m || k.on("scroll", function() {
        var a = Math.min(Math.max(k.scrollTop(), 0), o);
        a !== j && (j = a, l.css({
            transform: "translateY(" + Math.round(a / n) + "px)"
        }))
    }), k.resize()
}

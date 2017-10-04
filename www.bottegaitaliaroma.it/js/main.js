! function() {
    for (var o, e = function() {}, n = ["assert", "clear", "count", "debug", "dir", "dirxml", "error", "exception", "group", "groupCollapsed", "groupEnd", "info", "log", "markTimeline", "profile", "profileEnd", "table", "time", "timeEnd", "timeStamp", "trace", "warn"], a = n.length, i = window.console = window.console || {}; a--;) o = n[a], i[o] || (i[o] = e)
}(), console.log("Jader is ready"), $(document).ready(function() {
     $(".nav li a").each(function() {
        $(this).attr("href") == window.location.pathname && $(this).addClass("current")
    })
}), $(".thumbnail").magnificPopup({
    type: "image",
    gallery: {
        enabled: !0,
        preload: [0, 2]
    }
});

$('.social-share a').click(function(e){
    e.preventDefault();

    window.open($(this).attr('href'), $(this).data('title'), 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');

});

$('.open-popup-link').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});

iFrameResize({log:false, heightCalculationMethod: 'bodyScroll'}, '#team-iframe')
iFrameResize({log:false, heightCalculationMethod: 'bodyScroll'}, '#quoteframe')
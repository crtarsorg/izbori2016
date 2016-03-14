function stickyFooter() {
    if ($("body").outerHeight() < $(window).height()) {
        $("footer").addClass("sticky-footer");
    } else {
        $("footer").removeClass("sticky-footer");
    }
}

$(document).ready(function() {
    stickyFooter();
});

$(window).resize(function() {
    stickyFooter();
});
function stickyFooter() {
    if ($("body").outerHeight() < $(window).height()) {
        console.log("test");
        $("footer").addClass("sticky-footer");
    });
}

 console.log("test");

$(document).ready(function()
    stickyFooter();
}
$(document).ready(function () {

    var slides = $(".slide-portfolio");
    var prev = $(".left-nav-portfolio");
    var next = $(".right-nav-portfolio");

    next.css('z-index', 9999);

    slides.each(function (index) {
        $(this).attr("data-index", index);

        if (index == 0) {
            $(this).addClass("active");
        } else {
            $(this).addClass("inactive");
        }

    });

    var activeFound = false;
    var activeElement = false;

    next.on("click", function () {
        slides.each(function (index) {

            if ($(this).hasClass("active")) {
                $(this).addClass("portfolio-animate-section");
                $(this).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                    function (e) {

                        return true;

                    });

                activeFound = true;
                activeElement = $(this);
            } else {
                if (activeFound === true) {
                    activeFound = false;
                    $(this).addClass("portfolio-animate-sides");
                    $(this).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',
                        function (e) {

                            return true;

                        });


                    $(this).addClass("active").removeClass("inactive", "portfolio-animate-sides");
                    activeElement.addClass("inactive").removeClass("active", "portfolio-animate-section");
                }
            }
        });
        // $(".inactive").removeClass("portfolio-animate-section");
        // $(".inactive").removeClass("portfolio-animate-sides");
    });

});
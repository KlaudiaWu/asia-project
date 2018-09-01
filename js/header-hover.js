$(document).ready(function () {

    $(".header-wrap").hover(function () {
        $(".header-hover.container").css("box-shadow", "rgba(11, 17, 69, 0.8) 0px 80vh 100vh 10vh inset");
        $(".header-wrap").animate({
            opacity: 1
        }, {
            duration: 500,
            easing: "linear",
            step: function () {
                $(this).on('mouseleave', function () {
                    $(this).stop();
                });
            }
        });

    }, function () {
        $(".header-hover.container").css("box-shadow", "none");
        $(".header-wrap").css("opacity", "0");
    });

});
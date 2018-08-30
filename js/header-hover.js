$(document).ready(function(){

$(".header-wrap").hover(function(){
    $(".header-hover.container").css("box-shadow", "rgba(11, 17, 69, 0.8) 0px 80vh 100vh 10vh inset");
    $(".header-hover a").removeClass("header-hidden");
    $(".header-hover a").removeClass("header-visible");
}, function(){
    $(".header-hover.container").css("box-shadow", "none");
    $(".header-hover a").removeClass("header-visible");
    $(".header-hover a").addClass("header-hidden");
});

});
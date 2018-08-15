$(document).ready(function () {

    var slides = $(".slide-portfolio");
    var current_index = 0;
    var last_index = slides.length - 1; //ilosc slajdow

    var transitionEventSet = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend';

    var prev = $(".left-nav-portfolio");
    var next = $(".right-nav-portfolio");
    var inTransit = false;

    function setup() {
        var width_text = "";
        var width_image = "";
        slides.each(function (index) {
            var that = $(this);
            var text = that.find(".portfolio_text");
            var image = that.find(".portfolio-image");
            if (index == 0) {
                that.addClass("active stay_relative");
                width_text = text.width();
                width_image = image.width();
                firstElem = that;
            } else {
                that.addClass("inactive");
            }
            
            text.width(width_text);
            image.width(width_image);
        });

        next.on("click", nextSlide);
    }

    setup();

    function getNextElement(that, index) {
        if (index === last_index) { // ostatni element
            return firstElem;
        } else {
            return that.next();
        }
    }

    function nextSlide() {
        $.each(slides, function (index, value) {
            if (index === current_index) {
                var that = $(this);
                var nextElement = getNextElement(that, index);
                
                that.addClass("portfolio-animate-section");
                nextElement.addClass("active").removeClass("inactive");

                that.one(transitionEventSet, function (e) {
                    that.addClass("inactive").removeClass("active portfolio-animate-section stay_relative");
                    nextElement.addClass("stay_relative");
                });
            }
        });

        current_index++;
        if(current_index > last_index) {
            current_index = 0;
        }


        
        //nextElement.css( "box-shadow", "0px 0px 13px 2px rgba(0,0,0,0.51)" );

    }
});
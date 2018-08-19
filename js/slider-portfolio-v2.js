$(document).ready(function () {

    var slides = $(".slide-portfolio");
    var currentIndex = 0;
    var lastIndex = slides.length - 1; //ilosc slajdow

    var firstElem = false;
    var lastElem = false;

    var isRunning = false;

    var transitionEventSet = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend';

    var prev = $(".left-nav-portfolio");
    var next = $(".right-nav-portfolio");

    function setup() {
        var widthText = "";
        var widthImage = "";
        slides.each(function (index) {
            var that = $(this);
            var text = that.find(".portfolio-text");
            var image = that.find(".portfolio-image");
            if (index == 0) {
                that.addClass("active stay-relative");
                widthText = text.width();
                widthImage = image.width();
                firstElem = that;
            }
            else {
                that.addClass("inactive");
            }

            if (index === lastIndex) {
                lastElem = that;
            }
            
            text.width(widthText);
            image.width(widthImage);
        });

        prev.on("click", prevSlide);
        next.on("click", nextSlide);
    }

    setup();

    function getNextElement(that, index) {
        if (index === lastIndex) { // ostatni element
            return firstElem;
        } else {
            return that.next();
        }
    }

    function getPrevElement(that, index) {
        if (index === 0) {
            return lastElem;
        }
        else {
            return that.prev();
        }

    }

    function nextSlide() {
        doSlide(+1);
    }

    function prevSlide() {
        doSlide(-1);
    }

    function doSlide(direction) {
        if(isRunning) return;

        isRunning = true;
        $.each(slides, function (index, value) {
            if (index === currentIndex) {
                var that = $(this);
                var proced = false;

                if(direction > 0) {
                    proced = getNextElement(that, index);
                }
                else {
                    proced = getPrevElement(that, index);
                }

                that.css("z-index", "100");
                proced.css("z-index", "101");

                that.addClass("portfolio-animate-section");
                proced.addClass("active shadowed-border").removeClass("inactive");
    
                proced.one(transitionEventSet, function (e) {
                    that.addClass("inactive").removeClass("active portfolio-animate-section stay-relative");
                    proced.addClass("stay-relative").removeClass("shadowed-border");
                        
                    that.css("z-index", "");
                    proced.css("z-index", "");
                    isRunning = false;
                });
            }
        });

        currentIndex += direction;
        if(currentIndex > lastIndex) {
            currentIndex = 0;
        }
        else if (currentIndex < 0) {
            currentIndex = lastIndex;
        }

    }
});
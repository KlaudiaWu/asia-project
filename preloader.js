function countPercent(ready, all) {
    return Math.floor(ready / all * 100);
}

function animate(percent, preloader) {
    $('.loading-count').html(percent + "%");
    if(percent%5===0) {   
        $('#drzewko'+ percent/5).css("display", "block");
        if (percent == 100) {
            $("#preloader").css("display", "none");
        }
    } 
}

var all = 0;
var ready = 0;

function che_e(element) {
    if(element.tagName == 'IMG') {
        if(element.complete) {
            ready++;
            animate(countPercent(ready, all), null);
        }
        else {
            $(element).on('load', function() {
                ready++;
                animate(countPercent(ready, all), null);
            });
        }
        return;
    }

    if ($(element).on()) {
        ready++;
        animate(countPercent(ready, all), null);
    }
    else {
        set_e(element);
    }
}

function set_e(element) {
    che_e(element);
}

document.onreadystatechange = function (e) {
    if (document.readyState == "interactive") {
        var allElements = $("#whole-page *");
        var preloader = $('#preloader');
        var pageElements = $("#whole-page");
        var readyElements = 0;

        all = allElements.length;


        for (var i = 0; i < allElements.length; i++) {
            che_e(allElements[i]);
        }


    }

    console.log(all);

};


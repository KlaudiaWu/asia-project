$(document).ready(function() {

    var spot = $('#testSpot');

    $('header').mousemove(function(e) {
        var x = e.pageX - this.offsetLeft;
        var y = e.pageY - this.offsetTop;

        spot.html('Desktop - X: ' + x + ' Y: ' + y);

        superMain(e, x, y);
    });

    window.addEventListener('deviceorientation', handleOrientation);

    function handleOrientation(e) {
        var x = e.gamma;
        var y = e.beta;

        var width = $(window).width();
        var height = $(window).height();
        var pieceW = width / 180;
        var pieceH = height / 180;

        x = x + 90;
        y = y + 90;

        if(x < 0) {
            x = 0;
        }
        if(x > 180) {
            x = 180;
        }

        if(y < 0) {
            y = 0;
        }
        if(y > 180) {
            y = 180;
        }

        x = x * pieceW;
        y = y * pieceH;

        spot.html('Device - ' + width + ' X: ' + x + ' Y: ' + y);

        superMain(e, x, y, 10);
    };

    function superMain(e, x, y, s){
        if(!s) {
            s = 1;
        }
        var wx = $(window).width();
        var wy = $(window).height();
        
        var newx = x - wx/2;
        var newy = y - wy/2;
        
        $('.paralax div').each(function(){
            var speed = $(this).data('speed') * s;
            if($(this).data('revert')) speed *= -1;
            
            var $this = $(this);
            var offset = $this.offset();
            var width = $this.width();
            var height = $this.height();
            
            var centerX = offset.left + width / 2;
            var centerY = offset.top + height / 2;

            var calcx = "calc(50% - ("+newx*speed+"px))";
            var calcy = "calc(60% - ("+newy*speed*0.3+"px))";

            $(this).css('background-position-x', calcx);
            $(this).css('background-position-y', calcy);

        });
        
    }

});
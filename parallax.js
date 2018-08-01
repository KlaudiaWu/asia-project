$(document).ready(function() {

    $('header').mousemove(function(e){
        
        var wx = $(window).width();
        var wy = $(window).height();
        
        var x = e.pageX - this.offsetLeft;
        var y = e.pageY - this.offsetTop;
        
        var newx = x - wx/2;
        var newy = y - wy/2;
        
        $('.paralax div').each(function(){
            var speed = $(this).attr('data-speed');
            if($(this).attr('data-revert')) speed *= -1;
            
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

            // $(this).children('.follow').css({
            //     'top': calcy,
            //     'right': calcx
            // });
            // $(this).css('background-position',((('center' - newx*speed))+"px"));
            // $(this).css('background-position-y',((("center" - newy*speed*0.5))+"px"));
        });
        
    });

});
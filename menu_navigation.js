
function openMenu() {
    document.getElementById("menu_navigation").style.width = "25vw";
    document.getElementById("overlay").backgroundColor = "rgba(0,0,0,0.4)";
}

function closeMenu() {
    document.getElementById("menu_navigation").style.width = "0";
    document.getElementById("overlay").backgroundColor = "transparent";
}

//enabling smooth scroll
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
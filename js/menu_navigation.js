
function openMenu() {
    if (window.matchMedia("(orientation: portrait) and (max-width: 600px)").matches) {
        document.getElementById("menu-navigation").style.width = "100vw";
    } else if (window.matchMedia("(orientation: portrait) and (min-width: 600px) and (max-width: 1280px)").matches) {
        document.getElementById("menu-navigation").style.width = "50vw";
    } else if (window.matchMedia("(orientation: landscape) and (max-width: 1280px)").matches) {
        document.getElementById("menu-navigation").style.width = "70vw";    
    } else {
        document.getElementById("menu-navigation").style.width = "25vw";
    }
}

function closeMenu() {
    document.getElementById("menu-navigation").style.width = "0";
}

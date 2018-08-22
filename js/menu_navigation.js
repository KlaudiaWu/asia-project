
function openMenu() {
    if (window.matchMedia("(max-width: 600px)").matches) {
        document.getElementById("menu-navigation").style.width = "100vw";
    } else if (window.matchMedia("(min-width: 600px) and (max-width: 1280px)").matches) {
        document.getElementById("menu-navigation").style.width = "50vw";
    } else {
        document.getElementById("menu-navigation").style.width = "25vw";
    }
}

function closeMenu() {
    document.getElementById("menu-navigation").style.width = "0";
}

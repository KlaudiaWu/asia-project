<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>Asia Engel - Grafika</title> 

    <meta charset="UTF-8">
    <meta name="Description" lang="pl-PL" content="Opracowuję i realizuję kampanie reklamowe oraz elementy identyfikacji wizualnej. Projektuję wszystkie potrzebne materiały graficzne, ale także wymyślam koncepcje, hasła, piszę teksty, umieszczam reklamy w sieci, współpracuję z informatykami, drukarniami, przedstawicielami działów marketingu.">
    <meta name="Description" lang="en_US" content="I specialize in designing and implementing publicity campaigns and all elements of corporate identity including graphic materials, unique concepts, texts and slogans. ">
    <meta name="keywords" content="Joanna Engel, Asia Engel, Grafika, Design">
    <meta name="author" content="Joanna Engel, Klaudia Wójciak">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lato:300,400,700" rel="stylesheet">
    <link href="../css/reset.css" type="text/css" rel="stylesheet">
    <link href="../css/portfolio/dove.css" type="text/css" rel="stylesheet">

    <link href="../css/smartphones-portrait.css" rel="stylesheet" media="(orientation: portrait) and (max-width: 600px)">
    <link href="../css/tablets-portrait.css" rel="stylesheet" media="(orientation: portrait) and (min-width: 600px)">
    <link href="../css/small-laptops.css" rel="stylesheet" media="(min-width: 1280px) and (max-width: 1600px)">
    <link href="../css/smartphones-tablets-landscape.css" rel="stylesheet" media="(orientation: landscape) and (max-width: 1280px)">

    <link href="../preloader/preloader.css" type="text/css" rel="stylesheet">

    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>

</head>

<body>
    <?php 
        include_once "../preloader/preloader.html";
    ?>
    <div id="whole-page">
    <nav class="side-navigation nav-elem" id="menu-navigation">
        <div  class="side-navigation container">
            <a href="javascript:void(0)" class="close-button" onclick="closeMenu()">&times;</a>
            <a href="../index.html#dlaczego-ja-anchor" >Dlaczego ja?</a>
            <a href="../index.html#video-anchor">Video</a>
            <a href="../index.html#portfolio-anchor">Portfolio</a>
            <a href="../index.html#zakres-prac-anchor">Zakres Prac</a>
        </div>
    </nav>
    <header class="portfolio" id="up">
        <div class="top-bar portfolio">
            <a><img class="en" src="../img/portfolio-reebok/en-grafit.svg" alt="English"></a>
            <a href="../index.html"><h1 class="logo"><img class="logo" src="../img/portfolio-reebok/logo-grafit.svg" alt="Asia Engel - Grafika"></h1></a>
            <a><img class="menu" onclick="openMenu()" src="../img/portfolio-reebok/menu-grafit.svg" alt="Menu"></a>
        </div>
        <div class="big-image" ><img src="../img/portfolio-dove/dove-header.jpg" ></div>
    </header>

    <nav>
        <div class="top-bar portfolio project-navigation">
            <a href="../portfolio/reebok.html"  class="project-prev container"><img class="project-prev arrow" src="../img/arrow_black.svg" alt="Natępny projekt"></a>
            <div class="project-text container">
                <h3>Dove</h3>
                <p>Materiały promujące nowe linie produktów.</p>
            </div>
            <div>
                <a href="../portfolio/radox.html" class="project-next container">
                    <img class="project-next arrow" src="../img/arrow_black.svg" alt="Natępny projekt">
                    <span>Radox</span>
                </a>
            </div>
        </div>
    </nav>

    <section class="dove-section introduction">
        <h2 class="display-none">Materiały prezentujące nową linię produktów</h2>
        <div class="dove-container introduction">
            <img class="introduction dove-images image-shadow" src="../img/portfolio-dove/dove-prezentacja.jpg" alt="Materiał prezentujący nową linię produktów Dove">
            <img class="introduction dove-images image-shadow" src="../img/portfolio-dove/dove-go-fresh.jpg" alt="Materiał prezentujący nową linię produktów Dove">
        </div>
        <div class="dove-container introduction">
            <img class="introduction dove-images image-shadow" src="../img/portfolio-dove/dove-natural-touch.jpg" alt="Materiał prezentujący nową linię produktów Dove">
            <img class="introduction dove-images image-shadow" src="../img/portfolio-dove/dove-inspiracja.jpg" alt="Materiał prezentujący nową linię produktów Dove">
        </div>
    </section>
    <section class="dove-section press">
        <h2 class="display-none">Materiały prasowe Dove</h2>
        <div class="dove-container">
            <img class="dove-images press" src="../img/portfolio-dove/dove-materialy-prasowe.jpg" alt="Materiały prasowe Dove">
        </div>
    </section>
    <section class="dove-section">
        <h2 class="display-none">Komunikaty prasowe</h2>
        <div class="dove-container release">
            <img class="dove-images press image-shadow" src="../img/portfolio-dove/dove-komunikat-prasowy1.jpg" alt="Komunikat prasowy Dove">
            <img class="dove-images press image-shadow" src="../img/portfolio-dove/dove-komunikat-prasowy2.jpg" alt="Komunikat prasowy Dove">
            <img class="dove-images press image-shadow" src="../img/portfolio-dove/dove-komunikat-prasowy3.jpg" alt="Komunikat prasowy Dove">
        </div>
    </section>

    <nav>
        <div class="navigation-bottom">
            <a href="../index.html#video-anchor">VIDEO</a>
            <a href="../index.html#portfolio-anchor">PORTFOLIO</a>
            <a href="../index.html#zakres-prac-anchor">ZAKRES PRAC</a>
            <a href="../index.html#dlaczego-ja-anchor">DLACZEGO JA?</a>
        </div>        
        <div class="up">
            <img class="up-arrow" src="../img/arrow_black.svg" alt="Do góry">
            <a class="up-text" href="#up">Do góry!</a>
        </div>
        <div class="contact-bottom container">
            <a class="email-adress" href="mailto:asiaengel@gmail.com">ASIAENGEL@GMAIL.COM</a>
            <a class="telephone" href="tel:+48516649098">(+48) 516 649 098</a>
        </div>
    </nav>
</div>

    <script src="../js/menu_navigation.js"></script>
    <script src="../js/smooth-scroll-anchors.js"></script>
</body>
</html>
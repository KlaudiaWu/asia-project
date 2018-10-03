<?php
    require_once "../translate.php";
    $t = new Translator(basename(__FILE__));
    $t->useGrafitIcon();
?>

<!DOCTYPE html>
<html lang="<?php echo $t->getLanguage(); ?>">
<head>
    <title>Asia Engel - Grafika</title> 

    <meta charset="UTF-8">
    <meta name="Description" lang="pl-PL" content="Opracowuję i realizuję kampanie reklamowe oraz elementy identyfikacji wizualnej. Projektuję wszystkie potrzebne materiały graficzne, ale także wymyślam koncepcje, hasła, piszę teksty, umieszczam reklamy w sieci, współpracuję z informatykami, drukarniami, przedstawicielami działów marketingu.">
    <meta name="Description" lang="en_US" content="I specialize in designing and implementing publicity campaigns and all elements of corporate identity including graphic materials, unique concepts, texts and slogans. ">
    <meta name="keywords" content="Joanna Engel, Asia Engel, Grafika, Design">
    <meta name="author" content="Joanna Engel, Klaudia Wójciak">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../preloader/preloader.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lato:300,400,700" rel="stylesheet">
    <link href="../css/reset.css" type="text/css" rel="stylesheet">
    <link href="../css/portfolio/lato-mindfulness.css" type="text/css" rel="stylesheet">

    <link href="../css/smartphones-portrait.css" rel="stylesheet" media="(orientation: portrait) and (max-width: 600px)">
    <link href="../css/tablets-portrait.css" rel="stylesheet" media="(orientation: portrait) and (min-width: 600px)">
    <link href="../css/small-laptops.css" rel="stylesheet" media="(min-width: 1280px) and (max-width: 1600px)">
    <link href="../css/smartphones-tablets-landscape.css" rel="stylesheet" media="(orientation: landscape) and (max-width: 1280px)">

    <script src="../preloader.js"></script>
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
        <div class="side-navigation container">
            <a href="javascript:void(0)" class="close-button" onclick="closeMenu()">&times;</a>
            <a href="../index.php#dlaczego-ja-anchor"><?php $t->__("Dlaczego ja?")?></a>
            <a href="../index.php#video-anchor"><?php $t->__("Video")?></a>
            <a href="../index.php#portfolio-anchor"><?php $t->__("Portfolio")?></a>
            <a href="../index.php#zakres-prac-anchor"><?php $t->__("Zakres Prac")?></a>
        </div>
    </nav>
    <header class="portfolio" id="up">
        <div class="top-bar portfolio">
            <?php
                    $data = $t->getData();
            ?>
            <a href="../portfolio/lato-mindfulness.php<?php echo $data['url']?>">
                <img class="<?php echo $data['class']?>" src="<?php echo $data['icon']?>" alt="English">
            </a>
            <a href="../index.php"><h1 class="logo"><img class="logo" src="../img/portfolio-reebok/logo-grafit.svg" alt="Asia Engel - Grafika"></h1></a>
            <a><img class="menu" onclick="openMenu()" src="../img/portfolio-reebok/menu-grafit.svg" alt="Menu"></a>
        </div>
        <div class="big-image" ><img src="../img/portfolio-lato-mindfulness/lato-mindfulness-header.jpg" alt="Lato Mindfulness"></div>
    </header>

    <nav>
        <div class="top-bar portfolio project-navigation">
            <a href="../portfolio/lierac.php" class="project-prev container">
                <img class="project-prev arrow" src="../img/arrow_black.svg" alt="<?php $t->__("Poprzedni projekt")?>">
                <span><?php $t->__("Lierac")?></span>
            </a>
            <div class="project-text container">
                <h3><?php $t->__("Lato Mindfulness")?></h3>
                <p><?php $t->__("Letnia kampania promocyjna programu Strefa Mindfulness.")?></p>
            </div>
            <div>
                <a href="../portfolio/reebok.php"  class="project-next container">
                    <img class="project-next arrow" src="../img/arrow_black.svg" alt="<?php $t->__("Natępny projekt")?>">
                    <span><?php $t->__("Reebok")?></span>
                </a>
            </div>
        </div>
    </nav>

    <section class="mindfulness-section">
        <div class="mindfulness-container">
            <iframe width="75%" height="100%" src="https://www.youtube.com/embed/4hN0OtCSe1w?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <span class="number-on-video">2</span>
        </div>
        <div class="mindfulness-container secound">
            <div>
                <div class="table-of-content">
                    <p><span class="pointer">1</span> <?php $t->__("Header strony internetowej")?></p>
                    <p><span class="pointer">2</span> <?php $t->__("Video do promocji na kanale YT i FB")?></p>
                    <p><span class="pointer">3</span> <?php $t->__("Baner w sidebarze")?></p>
                    <p><span class="pointer">4</span> <?php $t->__("Mailing")?></p>
                </div>
                <img src="../img/portfolio-lato-mindfulness/lato-mindfulness-smartphone.jpg" alt="<?php $t->__("Baner w sidebarze")?>">
            </div>
            <div>
                <img class="mindfulness-image" src="../img/portfolio-lato-mindfulness/lato-mindfulness-tablet.jpg" alt="<?php $t->__("Baner w sidebarze")?>">
            </div>
        </div>
    </section>
    
    <nav>
        <div class="navigation-bottom tablet-hidden mobile-hidden">
            <a href="../index.php#video-anchor"><?php $t->__("VIDEO")?></a>
            <a href="../index.php#portfolio-anchor"><?php $t->__("PORTFOLIO")?></a>
            <a href="../index.php#zakres-prac-anchor"><?php $t->__("ZAKRES PRAC")?></a>
            <a href="../index.php#dlaczego-ja-anchor"><?php $t->__("DLACZEGO JA?")?></a>
        </div>        
        <div class="up">
            <img class="up-arrow" src="../img/arrow_black.svg" alt="<?php $t->__("Do góry")?>">
            <a class="up-text" href="#up"><?php $t->__("Do góry!")?></a>
        </div>
        <div class="contact-bottom container tablet-hidden mobile-hidden">
            <a class="email-adress" href="mailto:asiaengel@gmail.com">ASIAENGEL@GMAIL.COM</a>
            <a class="telephone" href="tel:+48516649098">(+48) 516 649 098</a>
        </div>
    </nav>
    </div>

    <script src="../js/menu_navigation.js"></script>
    <script src="../js/smooth-scroll-anchors.js"></script>
</body>
</html>
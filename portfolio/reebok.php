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
    <link href="../css/portfolio/reebok.css" type="text/css" rel="stylesheet">

    <link href="../css/smartphones-portrait.css" rel="stylesheet" media="(orientation: portrait) and (max-width: 600px)">
    <link href="../css/tablets-portrait.css" rel="stylesheet" media="(orientation: portrait) and (min-width: 600px)">
    <link href="../css/small-laptops.css" rel="stylesheet" media="(min-width: 1280px) and (max-width: 1600px)">
    <link href="../css/smartphones-tablets-landscape.css" rel="stylesheet" media="(orientation: landscape) and (max-width: 1280px)">

    <script src="../preloader.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
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
            <a href="../portfolio/reebok.php<?php echo $data['url']?>">
                <img class="<?php echo $data['class']?>" src="<?php echo $data['icon']?>" alt="English">
            </a>
            <a href="../index.php">
            <h1 class="logo">
                <img class="logo" src="../img/portfolio-reebok/logo-grafit.svg" alt="<?php $t->__("Asia Engel - Grafika")?>">
            </h1>
            </a>
            <a>
                <img class="menu" onclick="openMenu()" src="../img/portfolio-reebok/menu-grafit.svg" alt="Menu">
            </a>
        </div>
        <div class="big-image">
            <img src="../img/portfolio-reebok/reebok-header.jpg" alt="Reebok">
        </div>
    </header>

    <nav>
        <div class="top-bar portfolio project-navigation">
            <a href="../portfolio/lato-mindfulness.php" class="project-prev container">
                <img class="project-prev arrow" src="../img/arrow_black.svg" alt="<?php $t->__("Poprzedni projekt")?>">
                <span><?php $t->__("Lato Mindfulness")?></span>
            </a>
            <div class="project-text container">
                <h3><?php $t->__("Reebok")?></h3>
                <p><?php $t->__("Materiały promocyjne dla kampaniii Be more human. Biegownik Warszawski, PUMP.")?></p>
            </div>
            <div>
                <a href="../portfolio/dove.php" class="project-next container">
                    <img class="project-next arrow" src="../img/arrow_black.svg" alt="<?php $t->__("Natępny projekt")?>">
                    <span><?php $t->__("Dove")?></span>
                </a>
            </div>
        </div>
    </nav>

    <section class="section-portfolio">
        <h3 class="display-none"><?php $t->__("Reebok - materiałły promocyjne")?></h3>
        <div class="project-pictures container">
            <div class="project-pictures row-grid">
                <img class="project-pictures image" src="../img/portfolio-reebok/reebok-poster.jpg" alt="<?php $t->__("Plakat Reebok")?>">
            </div>
            <div class="project-pictures column-grid">
                <img class="project-pictures image first-in-column" src="../img/portfolio-reebok/reebok-invitation.jpg" alt="<?php $t->__("Zaproszenie Reebok")?>">
                <img class="project-pictures image secound-in-column" src="../img/portfolio-reebok/reebok-forum-logo.jpg" alt="<?php $t->__("Logo Reebok Forum")?>">
            </div>
        </div>
        <div class="project-pictures container">
            <div class="project-pictures column-grid">
                <img class="project-pictures image first-in-column image-shadow" src="../img/portfolio-reebok/reebok-forum-invitation.jpg" alt="<?php $t->__("Zaproszenie Reebok")?>">
                <img class="project-pictures image secound-in-column" src="../img/portfolio-reebok/reebok-be-more-human.jpg" alt="<?php $t->__("Logo Be More Human")?>">
            </div>
            <div class="project-pictures row-grid">
                <img class="project-pictures image first-in-column image-shadow" src="../img/portfolio-reebok/reebok-forum-questionnaire.jpg" alt="<?php $t->__("Plakat Reebok")?>">
            </div>
        </div>
        <div class="project-pictures container biegownik">
            <div class="project-pictures row-grid biegownik banner">
                <img class="project-pictures image biegownik banner" src="../img/portfolio-reebok/reebok-biegownik-poster.jpg" alt="<?php $t->__("Plakat Reebok Biegownik Warszawski")?>">
            </div>
            <div class="project-pictures row-grid biegownik">
                <img class="project-pictures image biegownik" src="../img/portfolio-reebok/reebok-biegownik-map1.jpg" alt="<?php $t->__("Biegownik Warszawski Mapa 1")?>">
                <img class="project-pictures image biegownik" src="../img/portfolio-reebok/reebok-biegownik-map2.jpg" alt="<?php $t->__("Biegownik Warszawski Mapa 2")?>">
                <img class="project-pictures image biegownik" src="../img/portfolio-reebok/reebok-biegownik-map3.jpg" alt="<?php $t->__("Biegownik Warszawski Mapa 3")?>">
                <img class="project-pictures image biegownik" src="../img/portfolio-reebok/reebok-biegownik-map4.jpg" alt="<?php $t->__("Biegownik Warszawski Mapa 4")?>">
            </div>
        </div>
        <div class="project-pictures container">
            <div class="project-pictures row-grid gorilas-run">
                <img class="project-pictures image gorilas-run" src="../img/portfolio-reebok/reebok-gorilasrun-poster.jpg" alt="<?php $t->__("Plakat Reebok Gorilas Run")?>">
            </div>
            <div class="project-pictures column-grid gorilas-run">
                <div class="project-pictures row-grid gorilas-run-popup">
                    <img class="project-pictures image first-in-column gorilas-run" src="../img/portfolio-reebok/reebok-gorilasrun-sticker_2.jpg"
                        alt="Naklejka Reebok Gorilas Run">
                    <img class="project-pictures image secound-in-column" src="../img/portfolio-reebok/reebok-forum-logo2.jpg" alt="<?php $t->__("Logo Reebok Forum")?>">
                </div>
                <div class="project-pictures column-grid gorilas-run-popup">
                    <img class="project-pictures image popup-store" src="../img/portfolio-reebok/reebok-popupstore-poster.jpg" alt="<?php $t->__("Plakat na otwarcie Reebok Pop Up Store")?>">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="pump-banner container">
            <img class="pump-banner" src="../img/portfolio-reebok/reebok-pump-banner.jpg" alt="<?php $t->__("Reebok baner Pump Crew")?>">
        </div>
    </section>
    <section class="section-portfolio">
        <div class="project-pictures row-grid pump container">
            <img class="project-pictures image pump first image-shadow" src="../img/portfolio-reebok/reebok-pump-prize.jpg" alt="<?php $t->__("Reklama PumpCrew")?>">
            <img class="project-pictures image pump image-shadow" src="../img/portfolio-reebok/reebok-pump-facebook.jpg" alt="<?php $t->__("Przycisk Facebook Reebok Pump")?>">
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
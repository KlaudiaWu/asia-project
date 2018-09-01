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


    

    <link href="preloader/preloader.css" type="text/css" rel="stylesheet">
    
    <link href="css/reset.css" type="text/css" rel="stylesheet">
    <link href="css/main.css" type="text/css" rel="stylesheet">
    <link href="css/smartphones-portrait.css" rel="stylesheet" media="(orientation: portrait) and (max-width: 600px)">
    <link href="css/tablets-portrait.css" rel="stylesheet" media="(orientation: portrait) and (min-width: 600px)">
    <link href="css/small-laptops.css" rel="stylesheet" media="(min-width: 1280px) and (max-width: 1700px)">
    <link href="css/smartphones-tablets-landscape.css" rel="stylesheet" media="(orientation: landscape) and (max-width: 1280px)">


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>

    <script src="preloader.js"></script>

</head>

<body>
<?php 
 include_once "preloader/preloader.html";
?>
    
    <div id="whole-page">
        <img src="img/drzewa_pierwszy_plan.png" style="display: none;">
        <img src="img/drzewa_tlo.png" style="display: none;">
        <nav class="side-navigation nav-elem" id="menu-navigation">
            <div class="side-navigation container">
                <a class="close-button" href="javascript:void(0)" onclick="closeMenu()">&times;</a>
                <a href="#dlaczego-ja-anchor">Dlaczego ja?</a>
                <a href="#video-anchor">Video</a>
                <a href="#portfolio-anchor">Portfolio</a>
                <a href="#zakres-prac-anchor">Zakres Prac</a>
            </div>
        </nav>

        <header id="do-gory">
            <h1 class="display-none">Joanna Engel - Grafika</h1>
            <div class="paralax">
                <div class="trees-background" data-speed="0.015" data-revert="true"></div>
                <div class="trees" data-speed="0.025">
                    <div class="header-hover container">
                            <div class="header-wrap">
                                <a href="#dlaczego-ja-anchor">
                                    <img class="header-hover image" src="img/wiewiorka-biala.svg" alt="Kim jestem?">
                                    <h2 class="header-hover description">kim jestem?</h2>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="top-bar home">
                <a href="index.html">
                    <img class="logo" src="img/logo.svg" alt="Asia Engel - Grafika">
                </a>
                <a>
                    <img class="en" src="img/en.svg" alt="English">
                </a>
                <a>
                    <img class="menu" onclick="openMenu()" src="img/menu.svg" alt="Menu">
                </a>
            </div>
        </header>

        <section id="dlaczego-ja-anchor" class="dlaczego-ja">

            <h2 class="display-none">Dlaczego ja?</h2>
            <div class="dlaczego-ja-container">
                <div class="dlaczego-ja-wrapper">
                    <div class="dlaczego-ja-pierwsze">
                        <h3>Mam nietypowe hobby. Uwielbiam czytać w myślach Klientów!</h3>
                        <p>Nie jestem wróżką, choć niektórzy posądzają mnie o tajemne moce. Mam za to dużo empatii!</p>
                    </div>
                    <img class="dlaczego-ja-images" src="img/czytam_w_myslach_klientow.png" alt="Czytam w myślach klientów">
                    <img class="dlaczego-ja-images desktop-hidden" src="img/cenie_prywatnosc.png" alt="Cenię prywatność klienta">
                    <p class="dlaczego-ja-paragraph">Nie, nie wyczuwam mrocznych tajemnic ani rzeczy, które NAPRAWDĘ ktoś chciałby ukryć</p>
                    <img class="mobile-hidden tablet-hidden dlaczego-ja-images" src="img/cenie_prywatnosc.png" alt="Cenię prywatność klienta">
                </div>
                <div class="dlaczego-ja-wrapper">
                    <img class="dlaczego-ja-images tablet-hidden" src="img/wczuwam_sie_w_klienta.png" alt="Wczuwam się w klienta">
                    <p class="dlaczego-ja-paragraph">Staram się odgadnąć, o jakim projekcie marzysz i jaki będzie Ci potrzebny. Wczuwam się w Twoje położenie
                        i aktualne potrzeby. Uważnie słucham i oglądam wszystko, co chcesz mi pokazać.</p>
                    <img class="dlaczego-ja-images desktop-hidden" src="img/wczuwam_sie_w_klienta.png" alt="Wczuwam się w klienta">
                    <img class="dlaczego-ja-images tablet-hidden" src="img/rozmawiam_z_klientem.png" alt="Wykonam projekt, o którym marzysz">
                    <img class="dlaczego-ja-images desktop-hidden" src="img/jestem_cierpliwa.png" alt="Cierpliwie słucham klienta">
                    <p class="dlaczego-ja-paragraph">A jeśli nie masz sprecyzowanego pomysłu, potrafię zadać właściwe pytania, które uporządkują priorytety
                        i wyklarują spójny obraz.</p>
                </div>
                <div class="dlaczego-ja-wrapper">
                    <img class="dlaczego-ja-images tablet-hidden" src="img/jestem_cierpliwa.png" alt="Cierpliwie słucham klienta">
                    <p class="dlaczego-ja-paragraph">Jestem cierpliwa. Pracuję po to, żebyś mógł powiedzieć: Jest super. Właśnie o coś takiego mi chodziło</p>
                    <img class="dlaczego-ja-images" src="img/zadowolony_klient.png" alt="Zależy mi na zadowoleniu klienta">
                    <img class="dlaczego-ja-images dlaczego-ja-last-image desktop-hidden" class="mobile-hidden" src="img/sluze_pomoca.png" alt="Traktuję pracę jak służbę drugiemu człowiekowi">
                    <p class="dlaczego-ja-paragraph dlaczego-ja-last-paragraph">Mam jeszcze kilka "tajemnych mocy". Dotrzymuję terminów. Z pokorą przyjmuję krytykę. Staram się traktować
                        pracę jak służbę drugiemy człowiekowi</p>
                    <img class="dlaczego-ja-images tablet-hidden" class="mobile-hidden" src="img/sluze_pomoca.png" alt="Traktuję pracę jak służbę drugiemu człowiekowi">
                </div>
            </div>

        </section>

        <section id="video-anchor" class="video">
            <h2>Video</h2>
            <div class="video-container">
                <div class="video-arrows left" onclick="plusDivs(-1)">
                    <img src="img/lewa-biel.svg" alt="Poprzednie video">
                </div>
                <div class="mySlides video-iframe">
                    <iframe class="iframe-inner" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/xfrl2xzwljY?rel=0&amp;controls=1&amp;showinfo=0"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h3 class="video-description">Kampania PositiveLife.pl</h3>
                </div>
                <div class="mySlides video-iframe">
                    <iframe class="iframe-inner" width="100%" height="100%" src="https://www.youtube.com/embed/JE8MfC96PYY?rel=0&amp;showinfo=0"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h3 class="video-description">Kampania ZrelaksowanaMama.pl</h3>
                </div>
                <div class="video-arrows right" onclick="plusDivs(+1)">
                    <img src="img/prawa-biel.svg" alt="Następne video">
                </div>
            </div>
        </section>

        <section id="portfolio-anchor" class="portfolio">

            <h2>Portfolio</h2>

            <div class="left-nav-portfolio">
                <img src="img/lewa-grafit.svg" alt="Poprzedni projekt">
            </div>
            <div class="right-nav-portfolio">
                <img src="img/prawa-grafit.svg" alt="Następny projekt">
            </div>
            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Public Relation</h3>
                        <p>Projekt wizerunkkowej strony internetowe dla charyzmatycznej agentki PR.</p>
                        <button>zobacz</button>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img class="public-relation" src="img/portfolio-public-relation.jpg" alt="Projekt - Public Relation">
                </div>
            </section>

            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Reebok</h3>
                        <p>Materiały promocyjne dla kampaniii Be more human. Biegownik Warszawski, PUMP.</p>
                        <a class="portfolio-link" href="portfolio/reebok.php">
                            <button>zobacz</button>
                        </a>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img src="img/portfolio-reebok.jpg" alt="Reebok - Biegownik">
                </div>
            </section>

            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Dove</h3>
                        <p>Materiały promujące nowe linie produktów. Prezentacje, zaproszenia, materiały prasowe, płyty CD.</p>
                        <a class="portfolio-link" href="portfolio/dove.html">
                            <button>zobacz</button>
                        </a>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img src="img/portfolio-dove.jpg" alt="Materiały promujące Dove">
                </div>
            </section>

            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Radox</h3>
                        <p>Materiały promujące wejście marki na polski rynek.</p>
                        <a class="portfolio-link" href="portfolio/radox.html">
                            <button>zobacz</button>
                        </a>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img src="img/portfolio-radox.jpg" alt="Materiały promujące Radox">
                </div>
            </section>

            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Miasto Dzieci</h3>
                        <p>Rebranding portalu. Materiały promocyjne. Elementy identyfikacji wizualnej.</p>
                        <a class="portfolio-link" href="portfolio/miasto-dzieci.html">
                            <button>zobacz</button>
                        </a>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img src="img/portfolio-miasto-dzieci.jpg" alt="Rebranding Miasto Dzieci">
                </div>
            </section>

            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Lierac</h3>
                        <p>Materiały związane z promocją nowych linii produktów: Magnificence, Liftissime, Prescription.</p>
                        <a class="portfolio-link" href="portfolio/lierac.html">
                            <button>zobacz</button>
                        </a>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img src="img/portfolio-lierac.jpg" alt="Materiały promujące Lierac">
                </div>
            </section>

            <section class="slide-portfolio">
                <div class="portfolio-text">
                    <div>
                        <h3>Lato Mindfulness</h3>
                        <p>Wakacyjna kampania promocyjna programu Strefa Mindfulness. Reklamy video na FB, mailing, banery,
                            YT, strona internetowa</p>
                        <a href="portfolio/lato-mindfulness.html">
                            <button>zobacz</button>
                        </a>
                    </div>
                </div>
                <div class="portfolio-image">
                    <img src="img/portfolio-lato-mindfulness.jpg" alt="Kampania Lato Mindfulness">
                </div>
            </section>

        </section>

        <footer id="zakres-prac-anchor">

            <h2 class="display-none mobile-visible">Zakres prac</h2>

            <div class="zakres-prac-image container">
                <img class="zakres-prac-image inner" src="img/joanna_engel.jpg" alt="Joanna Engel - Kontakt">
            </div>
            <div class="zakres-prac-text container">
                <div class="zakres-prac-text paragraph-container">
                    <p class="zakres-prac-text paragraph">Opracowuję i realizuję kampanie reklamowe oraz elementy identyfikacji wizualnej. Projektuję wszystkie
                        potrzebne materiały graficzne, ale także wymyślam koncepcje, hasła, piszę teksty, umieszczam reklamy
                        w sieci, współpracuje z programistami, drukarniami, przedstawicielami działów marketingu.</p>
                    <p class="zakres-prac-text paragraph">Posługuję się biegle większością programów pakietu Adobe, sprawnie działąm w Wordpressie i systemach
                        mailingowych, w czym pomaga mi znajomość HTMLa i CSS.</p>
                </div>
                <a href="mailto:asiaengel@gmail.com" class="daj-znac-banner">Daj znać, jeśli mogę Ci pomóc
                    <img src="img/arrow_white.svg" alt="Daj znać">
                </a>
                <h4 itemprop="telephone">
                    <a class="telephone-number" href="tel:+48516649098">
                        <span class="prefix">(+48)</span> 516 649 098</a>
                </h4>
            </div>

        </footer>

        <nav>
            <div class="navigation-bottom mobile-hidden tablet-hidden">
                <a href="#video-anchor">VIDEO</a>
                <a href="#portfolio-anchor">PORTFOLIO</a>
                <a href="#zakres-prac-anchor">ZAKRES PRAC</a>
                <a href="#dlaczego-ja-anchor">DLACZEGO JA?</a>
            </div>
            <div class="up">
                <img class="up-arrow" src="img/arrow_black.svg" alt="Do góry">
                <a class="up-text" href="#do-gory">Do góry!</a>
            </div>
            <div class="contact-bottom container mobile-hidden tablet-hidden">
                <a class="email-adress" href="mailto:asiaengel@gmail.com">ASIAENGEL@GMAIL.COM</a>
                <a class="telephone" href="tel:+48516649098">(+48) 516 649 098</a>
            </div>
        </nav>
    </div>

    <script src="js/header-hover.js"></script>
    <script src="js/menu_navigation.js"></script>
    <script src="js/smooth-scroll-anchors.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/slider-video.js"></script>
    <script src="js/slider-portfolio-v2.js"></script>
</body>

</html>
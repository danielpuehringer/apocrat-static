<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 08.11.2020
 * Time: 18:18
 */

?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>APOCRAT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!--<link rel="manifest" href="site.webmanifest">-->
    <link rel="apple-touch-icon" href="favicon-icon.png">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <meta name="theme-color" content="#003B4D">
    <!-- Place favicon.ico in the root directory -->

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="stylesheet" href="/dist/css/main.css?v2">
    <link href="https://www.APOCRAT.at" rel="canonical">

    <meta name="description" content="APOCRAT - intelligenter Schutz für Ihre Daten und Privatsphäre">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="relative">
    <div class="py-4 z-10 absolute left-0 right-0 top-0 js-navbar--index-exception">
        <div class="container text-white">
            <div class="flex justify-between">
                <a class="z-50" href="/"><img class="" src="./logo/APOCRAT-weiss.svg" style="width: 150px;"/></a>
                <ul class="absolute md:static hidden md:flex left-0 right-0 top-0 bottom-0 bg-blue-700 md:bg-opacity-0 z-10 p-12 md:p-0 flex-col md:flex-row text-center js-navbar--toggle"><!-- note: md:bg-transparent did not work, so the workaround md:bg-opacity-0 was used -->
                    <li class="inline-block mt-12 md:mt-0">
                        <a class="text-xl md:text-base text-white mx-1 md:mx-4 hover:underline hover:text-grey-500" href="/privatpersonen">Für Privatpersonen</a>
                    </li>
                    <li class="inline-block mt-8 md:mt-0">
                        <a class="text-xl md:text-base text-white mx-1 md:mx-4 hover:underline hover:text-grey-500" href="/ueber-uns">Über uns</a>
                    </li>
                </ul>
                <button class="md:hidden mr-2" onclick="openNavbar();">
                    <img class="" src="./icon/menu.svg" />
                </button>
                <button class="hidden js-navbar--toggle" onclick="closeNavbar();">
                    <img class="absolute right-3 top-3 z-10" src="./icon/close.svg" />
                </button>
            </div>
        </div>
    </div>


    <div class="slideshow-container--fullscreen">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild_processed.jpg'); background-repeat: no-repeat;background-position: bottom;background-size: cover;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Schützen, was wichtig ist</h1>
                        <div class="mb-4 text-xl">
                            APOCRAT sichert deine vernetzten Geräte vor unerlaubtem Zugriff wie z.B. einem Hackerangriff.<br/>
                            Offene Kameras, mithörende Babyphone und manipulierte Türschlösser sind dadurch Geschichte.
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: Ende 2021</div>
                        <!--<a class="btn btn-primary border-2 mx-auto mt-6" href="#bookmark">Mehr erfahren</a>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild2_processed.jpg'); background-repeat: no-repeat;background-position: top;background-size: cover; background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Hoheit über deine Daten</h1>
                        <div class="mb-4 text-xl">
                            APOCRAT nutzt nur jene Daten, die für die Funktionsweise nötig sind.<br/>
                            Weitere Daten werden nur nach explizitem Einverständnis genutzt.
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: Ende 2021</div>
                        <!--<a class="btn btn-primary border-2 mx-auto mt-6" href="#bookmark">Mehr erfahren</a>-->
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild3_processed.jpg'); background-repeat: no-repeat;background-position: bottom;background-size: cover; background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Daten teilen, Vergütung erhalten</h1>
                        <div class="mb-4 text-xl">
                            Daten Teilen ist kein Muss. Entschließt du jedoch, Daten mit APOCRAT zu teilen, so wirst du dafür vergütet.<br/>
                            Deine Daten sind wertvoll und von diesem Wert sollst du auch profitieren!
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: Ende 2021</div>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="mySlides fade">
            <div class="hero--fullpage px-2 md:px-0" style="background: url('./img/Bilder_Webseite/processed/headerbild4_processed.jpg'); background-repeat: no-repeat;background-position: center;background-size: cover; background-color: rgba(0,0,0,0.5);background-blend-mode: multiply;">
                <div class="hero--fullpage__content mx-auto">
                    <div class="container">
                        <h1 class="mb-6">Dein Recht auf Privacy</h1>
                        <div class="mb-4 text-xl">
                            Diverse vernetzte Geräte sammeln Metriken über dein Nutzungsverhalten und geben diese ohne dein Wissen weiter.<br/>
                            Dadurch wird ein Verhaltensprofil von dir erstellt. Es wird Zeit, diesem Handeln ein Ende zu setzen.
                        </div>
                        <div class="font-bold mb-4 text-xl">Launch: Ende 2021</div>
                        <!--<a class="btn btn-primary border-2 mx-auto mt-6" href="#bookmark">Mehr erfahren</a>-->
                    </div>
                </div>
            </div>
        </div>


        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>



    <div class="content-block">
        <div class="container text-center text-gray-900">
            <h2 class="text-underline text-underline--center" id="bookmark">Schutz für deine IoT-Geräte</h2>
            <p class="mb-6">
                APOCRAT ist eine AI-basierte Plug-and-Play-"Firewall", die vernetzte Geräte (IoT-Geräte) einerseits davor schützt, von
                außen übernommen zu werden (z.B. durch Hacker) und andererseits davor bewahrt, dass Nutzerdaten ohne deine explizite Zustimmung an
                Dritte weitergegeben werden. Dadurch schützt APOCRAT vor Datendiebstahl, dem Eindringen in deine Privatsphäre und gibt die
                Hoheit über die Nutzerdaten dorthin zurück, wo sie hingehört: zu dir.
            </p>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="text-yellow font-bold text-3xl md:text-4xl mb-2">270.000</div>
                    <div class="w-64 mx-auto">Angriffe auf vernetzte Geräte <br/>pro Tag</div>
                </div>
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="text-yellow font-bold text-3xl md:text-4xl mb-2">&gt;10 Mio.</div>
                    <div class="w-64 mx-auto">Haushalte in Österreich & Deutschland nutzen vernetzte Geräte</div>
                </div>
                <div class="w-full md:w-1/3 mt-8 md:mt-0">
                    <div class="text-yellow font-bold text-3xl md:text-4xl mb-2">&gt;90%</div>
                    <div class="w-64 mx-auto">der vernetzten Geräte kommunizieren unverschlüsselt</div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-block bg-gray-100 py-8">
        <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 md:mr-8">
                <img loading="lazy" src="img/Bilder_Webseite/processed/PN878U1_processed.jpg" alt="" />
            </div>
            <div class="w-full md:w-2/3">
                <h2 class="text-underline mt-4 md:mt-0 md:max-w-xs">Intelligente Firewall für dein Heimnetzwerk</h2>
                <p class="mb-6">
                    Vernetzte Geräte für mehr Komfort im Alltag sind längst zur Selbstverständlichkeit geworden. Allerdings besitzen gerade diese Geräte oft grobe Sicherheitslücken.
                </p>
                <p class="font-bold mb-6">
                    APOCRAT schützt deine Geräte und ermöglicht dir Komfort ohne Abstriche.
                </p>
                <ul class="list-disc pl-4">
                    <li>Geräte-Erkennung - APOCRAT erkennt deine Geräte automatisch</li>
                    <li>Anomalie-Erkennung - unerwünschtes Verhalten wird erkannt und blockiert</li>
                    <li>Datenschutz - sorgt dafür, dass deine privaten Daten auch privat bleiben</li>
                    <li>Smartphone App - zur einfachen Steuerung und Indiviualisierung von APOCRAT</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content-block bg-blue-300 text-white py-8" style="margin-top: 0;">
        <div class="container">
            <h2 class="text-underline text-underline--center text-center text-white">So funktioniert´s</h2>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/usb-cable.png" />
                    <span class="font-bold">Anstecken</span>
                    <p>APOCRAT Box per Kabel mit dem Router verbinden & einschalten</p>
                </div>
                <div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/wifi.png" />
                    <span class="font-bold">Scannen</span>
                    <p>APOCRAT erkennt die vernetzen Geräte im Heimnetzwerk und deren normales Verhalten</p>
                </div>
                <div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/shield.png" />
                    <span class="font-bold">Schützen</span>
                    <p>APOCRAT unterbindet unerlaubten Zugriff & stellt Datenschutz sicher</p>
                </div>
                <!--<div class="w-full md:w-1/3 text-center mt-12 md:mt-0 px-4">
                    <img class="mx-auto mb-4" width="80px" src="./icon/euro.png" />
                    <span class="font-bold text-yellow">Vergütung</span>
                    <p class="text-yellow">Wertschätzung für freiwillig zur Verfügung gestellte Daten in Form von Vergütungen</p>
                </div>-->
            </div>
        </div>
    </div>

    <div class="content-block container">
        <h2 class="text-underline text-underline--center text-center">Hoheit über deine Daten</h2>
        <p class="text-center">
            APOCRAT schützt dich und dein zu Hause vor Datendiebstahl. Dabei werden nur Daten verwendet, die zwingend für die Funktionsweise benötigt werden.
            APOCRAT funktioniert also uneingeschränkt ohne das Teilen von Metriken (Nutzerstatistiken).
        </p>
        <p class="mt-4 text-center">
            Zusammengefasst heißt das...
        </p>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 mt-12">
                <img loading="lazy" class="" src="./img/Bilder_Webseite/processed/Gruppe-29_processed.jpg" alt="Ohne APOCRAT" />
            </div>
            <div class="w-full md:w-1/2 mt-12">
                <img loading="lazy" class="" src="./img/Bilder_Webseite/processed/Gruppe-30_processed.png" alt="Mit APOCRAT" />
            </div>
        </div>
    </div>

    <div class="content-block bg-gray-100 py-8">
        <div class="container flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 md:mr-8">
                <img loading="lazy" src="img/Bilder_Webseite/processed/woman-using-smartphone-in-bed-3060643_processed.jpg" alt="Women in bed using smartphone" />
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-underline mt-4 md:mt-0">Dein Nutzen: Komfort bei höchster Sicherheit & Datenschutz</h2>
                <p>
                    Du hast Angst um deine Daten und möchtest deine Geräte einem Hacker nicht schutzlos ausliefern? Verzichte nicht auf den Nutzen deiner vernetzten Geräte.

                </p>
                <p class="mt-4">
                    <strong>Wir sorgen dafür, dass du dich nicht mehr Sorgen musst.</strong>
                </p>
                <ul class="mt-4 list-disc pl-4">
                    <li>Statistiken über die Sicherheit von vernetzten Geräten</li>
                    <li>Hoheit über die eigenen Daten</li>
                    <li>Schutz vor Viren und Malware</li>
                    <li>Privatsphäre im eigenen Haushalt zurückerlangen</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="my-8 container">
        <h2 class="text-underline text-underline--center text-center">Mit freundlicher Unterstützung von</h2>
        <div class="my-8">
            <a href="https://www.accent.at/" target="_blank" rel="noopener"><img loading="lazy" src="img/Bilder_Webseite/processed/Gruppe23.png" alt="CPI, EFRE, Niederösterreich & Accent Logo" /></a>
        </div>
    </div>

<?php include 'includes/footer.inc'; ?>
<script src="/dist/js/main.js"></script>
</body>
</html>


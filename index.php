<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Mit einem Team erfahrener Reinigungskräfte'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? 'und modernster Ausrüstung'));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__top">
                        <img class="header__logo" src="./assets/img/logo-header.png" alt="" >
                        <a class="Btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                    </div>
                    <div class="header__bottom">
                        <h1 class="header__title">Mit einem Team erfahrener <span>Reinigungskräfte</span><br /> und modernster Ausrüstung</h1>
                        <p class="header__dscr">kümmern wir uns um Ihre Außen- und Innenflächen. </p>
                        <a class="Btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <!-- Раздел страницы-->
         <section class="ourAdvantages">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="ourAdvantages__box">
                            <div class="ourAdvantages__left">
                                <h2 class="ourAdvantages__title">Beratung erhalten Sie von uns kostenfrei.</h2>
                                <p class="ourAdvantages__dscr">Wir als Full-Service Gebäudereinigung stehen Ihnen mit unserem breiten Leistungsspektrum mit Rat und Tat zur Seite. Unser Team verfügt über ausgezeichnete Fachkenntnisse und Equipment um Ihre Wünsche mit Bravour zu erfüllen.</p>
                                <a class="Btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                            <div class="ourAdvantages__right">
                                <div class="ourAdvantages__inner">
                                    <div class="ourAdvantages__inner-wrapper">
                                        <h3 class="ourAdvantages__name">Info</h3>
                                        <p class="ourAdvantages__mini-dscr">Unser modernes Unternehmen hat sich auf die Vielfältigkeit der Reinigung spezialisiert….</p>
                                    </div>
                                </div>
                                <div class="ourAdvantages__inner">
                                    <div class="ourAdvantages__inner-wrapper">
                                        <h3 class="ourAdvantages__name">Team</h3>
                                        <p class="ourAdvantages__mini-dscr">Mit einem Team erfahrener Reinigungskräfte und modernster Ausrüstung kümmern wir uns um Ihre Außen- und Innenflächen…</p>
                                    </div>
                                </div>
                                <div class="ourAdvantages__inner">
                                    <div class="ourAdvantages__inner-wrapper">
                                        <h3 class="ourAdvantages__name">Beratung</h3>
                                        <p class="ourAdvantages__mini-dscr">Eine umfangreiche Beratung erhalten Sie von uns kostenfrei….</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="services__title">Dienstleistungen</h2>
                        <div class="services__box">
                            <div class="services__inner">
                                <div class="services__left">
                                    <img class="services__img" src="assets/img/1cleaning-service-during-work-PPTAZG5.jpg" alt="" >
                                </div>
                                <div class="services__right">
                                    <h3 class="services__name">Grundreinigung</h3>
                                    <p class="services__dscr">Vieles lässt sich reinigen, aber leider ist nicht jede Verunreinigung im Rahmen der regelmäßigen Unterhaltsreinigung zu entfernen.</p>
                                    <p class="services__dscr">Daher ist es notwendig, dass eine Intensivreinigung von Zeit zu Zeit durchgeführt wird, um das ursprüngliche Aussehen zu erhalten.</p>
                                </div>
                            </div>
                            <div class="services__inner">
                                <div class="services__left">
                                    <img class="services__img" src="assets/img/22Depositphotos_6638219_original-580x390.jpg" alt="" >
                                </div>
                                <div class="services__right">
                                    <h3 class="services__name">Fensterreinigung/ Fassadenreinigung /Glasreinigung</h3>
                                    <p class="services__dscr">Die Fassaden und die Fenster sind das Außenschmuck Ihres Unternehmens.</p>
                                    <p class="services__dscr">”Eine saubere Außenansicht vermittelt Qualität und Sorgfalt” Eine professionelle Fenster Reinigung sorgt für einen hohen Werteerhalt, je nach Objekt und Anforderung kommen unterschiedliche Geräte und Verfahren zum Einsatz.</p>
                                </div>
                            </div>
                            <div class="services__inner">
                                <div class="services__left">
                                    <img class="services__img" src="assets/img/33Depositphotos_108216430_original-580x390.jpg" alt="" >
                                </div>
                                <div class="services__right">
                                    <h3 class="services__name">Sonderreinigung</h3>
                                    <p class="services__dscr">Praxis und Krankenhausreinigung.</p>
                                    <p class="services__dscr">Bei medizinischen Räumlichkeiten wie Arztpraxen etc. ist ein spezieller Schutz notwendig, um die Patienten und andere vor gefährlichen Krankheitskeimen zu bewahren. Hier gehen wir gezielt und auch mit viel Vorsicht an die Arbeit. </p>
                                </div>
                            </div>
                            <div class="services__inner">
                                <div class="services__left">
                                    <img class="services__img" src="assets/img/4Depositphotos_25931445_original-580x390.jpg" alt="" >
                                </div>
                                <div class="services__right">
                                    <h3 class="services__name">Weitere Leistungen</h3>
                                    <p class="services__dscr">Unterhaltsreinigung, Bauend-, sowie Bauschlussreinigung, Kindergarten- & Kindestageinrichtungen, Praxis- & Krankenhausrreinigung, Büro-, Fitnessstudio- & Hotelreinigung, etc.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="user">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="user__title">Unser Kunde</h2>
                        <div class="user__box">
                            <div class="user__inner">
                                <p class="user__dscr">Schnell Gründlich und zuverlässig. Sehr freundlich und sehr kompetent.</p>
                                <div class="user__inner-wrapper">
                                    <h3 class="user__name">Carmen Schrader</h3>
                                    <p class="user__dol">Hausputz</p>
                                </div>
                            </div>
                            <div class="user__inner">
                                <p class="user__dscr">Ein Toller Handwerker, der Kritik annimmt und sie direkt umsetzt. Zuverlässig und arbeitet sehr strikt und sauber.</p>
                                <div class="user__inner-wrapper">
                                    <h3 class="user__name">Steffen Dörnbrak</h3>
                                    <p class="user__dol">Büro putzen</p>
                                </div>
                            </div>
                            <div class="user__inner">
                                <p class="user__dscr">Einwandfreie Dienstleistung! Gewissenhaft und zuverlässig</p>
                                <div class="user__inner-wrapper">
                                    <h3 class="user__name">EDILTEC Bayern GmbH</h3>
                                    <p class="user__dol">Schlafzimmerreinigung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quality">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="quality__box">
                            <h2 class="quality__title">Wir streben als Unternehmen nach höchster Servicequalität
                                <span>Die Zufriedenheit unserer Kunden liegt uns am Herzen.</span>
                            </h2>
                            <div class="quality__inner">
                                <div class="quality__number">12К</div>
                                <div class="quality__name">Zufriedene Kunden</div>
                            </div>
                            <div class="quality__inner">
                                <div class="quality__number">+20</div>
                                <div class="quality__name">Verschiedene Dienstleistungen</div>
                            </div>
                            <div class="quality__inner">
                                <div class="quality__number">+130</div>
                                <div class="quality__name">Reinigungsexperte</div>
                            </div>
                            <div class="quality__inner">
                                <div class="quality__number">+10</div>
                                <div class="quality__name">Langjährige Erfahrung</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="forms__wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 container">
                            <h2 class="forms__title">Kontaktieren Sie uns:</h2>
                            <div class="forms__box">
                                <form id="jq_form" class="mb-5 mt-3">
                                    <div class="my-0">
                                        <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                        <div id="jq_name" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text">
                                    </div>
                                    <div class="my-4">
                                        <textarea rows="3" class="form-control" name="jq_text" placeholder="Nachricht"></textarea>
                                        <div id="jq_text" style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                    </div>
                                    <div>
                                        <input class="btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button" type="submit" id="jq_submit" value="Senden">
                                    </div>
                                    <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde
                                        gesendet.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="footer__top">
                        <img class="footer__logo" src="./assets/img/logo-header.png" alt="" >
                        <a class="Btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                    </div>
                    <div class="footer__bottom">
                        © 2022
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
</body>

</html>
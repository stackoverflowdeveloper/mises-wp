<?php /* Template Name: wsparcie */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
    <title>Wsparcie</title>
</head>

<body>
    <nav class="navbar support__navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <!-- <a class="navbar-item" href="">
                <img src="" alt="">
            </a> -->

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
            <a href="#wsparcie"class="nav-item is-tab is-hidden-mobile is-active">Wesprzyj nas</a>
            <a href="#jedenprocent" class="nav-item is-tab is-hidden-mobile">Przekaż 1 % podatku</a>
            <a href="#jakjeszcze" class="nav-item is-tab is-hidden-mobile">Jak jeszcze nas wspierać</a>
            <a href="#programsponsorski" class="nav-item is-tab is-hidden-mobile">Program sponsorski</a>
            <a href="#kontakt" class="nav-item is-tab is-hidden-mobile">Kontakt</a>
            <a href="#mecenasi" class="nav-item is-tab is-hidden-mobile">Mecenasi i Darczyncy</a>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-item is-tab is-hidden-mobile">Strona Instytutu Misesa</a>
        </div>
    </nav>
    <div class='mises support'>
        <header>

        </header>

        <section class="hero support__hero">
            <img src="<?php echo get_template_directory_uri(); ?>/img/support__logo.png" alt="" srcset="">
            <div class="hero-body support__hero-body">
                <div class="support__hero-wrapper">
                    <h1 class="title support__hero-title">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </h1>
                    <p class="support__hero-text">Fugiat possimus voluptatum est eius inventore facere? Molestias quasi, at eos aliquam reprehenderit tempora
                        voluptate!
                    </p>
                </div>
            </div>
            <a class="support__hero-scroll" href="#"></a>
        </section>
        <div class="container support__form">
            <a class="support__form-anchor" href="#"></a>
            <h2 id="wsparcie" class="title support__heading">Wesprzyj nas</h2>
            <div class="support__form-wrapper">

                <div class="columns">
                    <div class="column">
                        <h4 class="subtitle">Wybierz kwotę:</h4>
                        <div class="columns">
                            <div class="column support__form-price">
                                10 zl
                            </div>
                            <div class="column support__form-price">
                                20 zl
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column support__form-price">
                                50 zl
                            </div>
                            <div class="column support__form-price">
                                100 zl
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column support__form-price">
                                200 zl
                            </div>
                            <div class="column support__form-price">
                                inna kwota
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">

                            </div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Wpisz kwotę">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <h4 class="subtitle">Wypelnij poniższy formularz, aby przekazać darowiznę:</h4>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Imię">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Nazwisko">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Miejscowość">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Kod pocztowy">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Adres">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="email" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Telefon">
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <div class="select">
                                            <select>
                                                <option>Wybierz projekt</option>
                                                <option>Projekt 1</option>
                                                <option>Projekt 2</option>
                                                <option>Projekt 3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox"> I agree to the
                                        <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox"> I agree to the
                                        <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox"> I agree to the
                                        <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <h4 class="subtitle">Wybierz metodę platnosci:</h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__dotpay.png" alt="" srcset="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__paypal.png" alt="" srcset="">
                        </div>

                    </div>

                </div>
                <div class="columns support__form-data">
                    <div class="column is-half">
                        <h4 class="subtitle support__form-account">Fundacja Instytut Ludwiga von Misesa </h4>
                        <p class="support__form-details">Pl. Strzelecki 20, 50-224 Wrocław</p>
                        <p class="support__form-details">Nr konta:
                            <strong>19 2130 0004 2001</strong>
                        </p>
                    </div>
                    <div class="column is-half">
                        <div class="columns">
                            <div class="column is-two-thirds support__form-divider">
                                <h4 class="subtitle support__form-account">Z kont zagranicznych:</h4>
                                <p class="support__form-details">IBAN: PL 35 1500 1777 1217 7010 9404 0000</p>
                                <p class="support__form-details">SWIFT/BIC: WBKPPLPP</p>
                            </div>
                            <div class="column is-one-third">
                                <p class="support__form-details">KRS: 0000174572</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="support__divider"></div>
            </div>
        </div>
        <div class="container support__info">
            <div class="support__info-banner">
                <h2 id="jedenprocent" class="title support__info-title">Przekaż 1% podatku</h2>
                <p class="support__info-text">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod Edukacja
                    ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod >Edukacja
                    ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
            </div>
            <div class="columns support__info-tax">
                <div class="column support__info-column">
                    <h2 id="programsponsorski" class="title support__info-heading">Program do rozliczania PIT</h2>
                    <p class="support__info-italic">Aby przekazać Instytutowi Misesa 1% podatku, wystarczy użyć programu PIT:</p>
                    <div class="support__info-wrapper">
                        <h3 class="title support__info-blue">ROZLICZ PIT za darmo</h3>
                        <h4 class="title support__info-dark">Przekaż 1% podatku na naszą organizację</h4>
                        <div class="support__info-action">
                            <a class="button is-large support__info-btn">Wypenij PIT</a>
                        </div>
                    </div>
                </div>
                <div class="column support__info-column">
                    <h2 class="title support__info-heading">Dane do zeznania PIT</h2>
                    <p class="support__info-italic">Albo ręcznie w rocznym zeznaniu podatkowym PIT-28, PIT-36, PIT- 36L, PIT-37 lub PIT-38 w rubryce wn Albo
                        ręcznie w rocznym zeznaniu podatkowym PIT-28, PIT-36, PIT- 36L, PIT-37 lub PIT-38 w rubryce wn Albo
                        ręcznie w rocznym zeznaniu podatkowym PIT-28, PIT-36, PIT- 36L, PIT-37 lub PIT-38 w rubryce wn
                    </p>
                    <img class="support__info-foto" src="<?php echo get_template_directory_uri(); ?>/img/support__tax.jpg" alt="" srcset="">
                </div>
            </div>
            <p class="support__info-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod Edukacja
                ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod >Edukacja ekonomiczna
                to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
            <div class="support__divider"></div>
        </div>
        <div class="container support__pay">
            <h2 id="jakjeszcze" class="title support__heading">Jak jeszcze nas wspierać?</h2>
            <div class="columns">
                <div class="column">
                    <h4 class="subtitle">FaniMani</h4>
                    <p class="support__info-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod Edukacja
                        ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod >Edukacja</p>
                    <div class="columns">
                        <div class="column support__pay-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__fani.png" alt="" srcset="">
                        </div>
                        <div class="column support__pay-wrapper">
                            <a class="button is-medium support__info-btn">Wypenij PIT</a>
                        </div>
                    </div>
                </div>
                <div class="column support__pay-divider">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__info-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod Edukacja
                        ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod >Edukacja</p>
                    <div class="columns">
                        <div class="column support__pay-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__bitcoin.png" alt="" srcset="">
                        </div>
                        <div class="column support__pay-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__qr.png" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="support__divider"></div>
        </div>
        <div class="container support__sponsor">
            <h2 class="title support__heading">Program sponsorski</h2>
            <div class="columns">
                <div class="column support__sponsor-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__sponsor.png" alt="" srcset="">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__sponsor-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
                </div>
                <div class="column support__sponsor-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__sponsor.png" alt="" srcset="">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__sponsor-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
                </div>
                <div class="column support__sponsor-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__sponsor.png" alt="" srcset="">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__sponsor-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
                </div>
            </div>
            <div class="columns">
                <div class="column support__sponsor-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__sponsor.png" alt="" srcset="">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__sponsor-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
                </div>
                <div class="column support__sponsor-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__sponsor.png" alt="" srcset="">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__sponsor-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
                </div>
                <div class="column support__sponsor-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__sponsor.png" alt="" srcset="">
                    <h4 class="subtitle">Bitcoin</h4>
                    <p class="support__sponsor-italic">Edukacja ekonomiczna to droga do wolności, dobrobytu, pokojowych relacji między ludźmi. Twój 1% pod</p>
                </div>
            </div>
            <div class="support__divider"></div>
        </div>
        <div class="container support__contact">
            <h2 id="kontakt" class="title support__heading">Kontakt</h2>
            <div class="columns">
                <div class="column">
                    <h4 class="subtitle">Dodatkowych informacji udziela Karol Szczerbiński, szef fundraisingu:</h4>
                    <div class="columns">
                        <div class="column is-one-third">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__contact.jpg" alt="" srcset="">
                        </div>
                        <div class="column is-two-thirds">
                            <h2 class="title support__heading">Karol Szczerbinski</h2>
                            <span class="support__contact-phone"></span>
                            <p class="support__contact-text">
                                123 456 789
                            </p>
                            <span class="support__contact-mail"></span>
                            <p class="support__contact-text">
                                lorem@ipsum.pl
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column support__contact-divider">
                    <h4 class="subtitle">Fundacja Instytut Edukacji Ekonomicznej im. Ludwiga von Misesa</h4>
                    <span class="support__contact-pin"></span>
                    <h5 class="subtitle support__contact-subtitle">Adres</h5>
                    <p class="support__contact-italic">pl. Strzelecki 20
                        <br> 50-224 Wrocław</p>
                    <span class="support__contact-folder"></span>
                    <h5 class="subtitle support__contact-subtitle">Dane Fundacji</h5>
                    <p class="support__contact-italic">KRS 0000174572, NIP 894 277 56 04
                        <br>KRS 0000174572, NIP 894 277 56 04
                        <br>KRS 0000174572, NIP 894 277 56 04
                        <br>KRS 0000174572, NIP 894 277 56 04
                        <br>KRS 0000174572, NIP 894 277 56 04
                        <br>
                    </p>

                </div>
            </div>
            <div class="support__divider"></div>
        </div>
        <div class="container support__elite">
            <h2 id="mecenasi" class="title support__heading">Mecenasi i darczyncy</h2>
            <h4 class="subtitle">Elitarny klub Austriakow</h4>
            <div class="columns">
                <div class="column">
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                </div>
                <div class="column">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/support__elite-opoka.png" alt="" srcset="">
                </div>
                <div class="column">
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                </div>
                <div class="column">
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                </div>
                <div class="column">
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                    <p class="support__elite-italic">
                        Pan Jan Kowalski
                    </p>
                </div>
                <div class="column">

                </div>
            </div>
            <h4 class="subtitle">Mecenasi i darczyncy</h4>
            <div class="columns">
                <div class="column support__elite-year">
                    2017
                </div>
                <div class="column support__elite-year">
                    2016
                </div>
                <div class="column support__elite-year">
                    2015
                </div>
                <div class="column support__elite-year">
                    2014
                </div>
                <div class="column support__elite-year">
                    2013
                </div>
                <div class="column support__elite-year">
                    2012
                </div>
                <div class="column support__elite-year">
                    2011
                </div>
                <div class="column support__elite-year">
                    2010
                </div>
                <div class="column support__elite-year">
                    2009
                </div>
                <div class="column support__elite-year">
                    2008
                </div>
                <div class="column support__elite-year">
                    2007
                </div>
            </div>
            <div class="columns support__elite-space">
                <div class="column is-1 support__elite-carousel">
                    <img class="support__elite-left" src="<?php echo get_template_directory_uri(); ?>/img/support__arrow-left.png" alt="" srcset="">
                </div>
                <div class="column">
                    <p class="support__elite-main">Mecenasi Diamentowi</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                </div>
                <div class="column">
                    <p class="support__elite-main">Mecenasi Diamentowi</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                </div>
                <div class="column">
                    <p class="support__elite-main">Mecenasi Diamentowi</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                </div>
                <div class="column">
                    <p class="support__elite-main">Mecenasi Diamentowi</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                </div>
                <div class="column">
                    <p class="support__elite-main">Mecenasi Diamentowi</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                    <p class="support__elite-italic">Jan Kowalski</p>
                </div>
                <div class="column is-1 support__elite-carousel">
                    <img class="support__elite-right" src="<?php echo get_template_directory_uri(); ?>/img/support__arrow-right.png" alt="" srcset="">
                </div>
            </div>
            <div class="columns support__elite-space">
                <div class="column is-1 support__elite-carousel">
                    <img class="support__elite-left" src="<?php echo get_template_directory_uri(); ?>/img/support__arrow-left.png" alt="" srcset="">
                </div>
                <div class="columns">
                    <div class="column is-one-third">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/support__elite-member.jpg" alt="" srcset="">
                    </div>
                    <div class="column is-two-thirds">
                        <p class="support__elite-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt optio porro, deserunt quasi sint
                            amet. Delectus repellat dicta repellendus, inventore molestias mollitia labore deleniti, eos
                            quos voluptate nulla, est sunt!</p>
                        <p class="support__elite-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt optio porro, deserunt quasi sint
                            amet. Delectus repellat dicta repellendus, inventore molestias mollitia labore deleniti, eos
                            quos voluptate nulla, est sunt!</p>
                        <p class="support__elite-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt optio porro, deserunt quasi sint
                            amet. Delectus repellat dicta repellendus, inventore molestias mollitia labore deleniti, eos
                            quos voluptate nulla, est sunt!</p>
                        <p class="support__elite-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt optio porro, deserunt quasi sint
                            amet. Delectus repellat dicta repellendus, inventore molestias mollitia labore deleniti, eos
                            quos voluptate nulla, est sunt!</p>
                        <p class="support__elite-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt optio porro, deserunt quasi sint
                            amet. Delectus repellat dicta repellendus, inventore molestias mollitia labore deleniti, eos
                            quos voluptate nulla, est sunt!</p>
                        <p class="support__elite-reccomendation">
                            <strong class="support__elite-relevant">Pawel Sawicz</strong>, przedsiebiora, konsultant biznesowy</p>
                    </div>
                </div>
                <div class="column is-1 support__elite-carousel">
                    <img class="support__elite-right" src="<?php echo get_template_directory_uri(); ?>/img/support__arrow-right.png" alt="" srcset="">
                </div>
            </div>
            <div class="support__elite-wrapper">
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet support__elite-active"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
                <div class="support__elite-bullet"></div>
            </div>
        </div>
    </div>
    <footer class="footer support__footer">
            <div class="support__footer-wrapper">
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="#wsparcie" class="navbar-item support__footer-item">
                            Wesprzyj nas
                        </a>
                        <a href="#jedenprocent" class="navbar-item support__footer-item">
                            Przekaż 1% podatku
                        </a>
                        <a href="#jakjeszcze"class="navbar-item support__footer-item">
                            Jak jeszcze nas wspierać
                        </a>
                        <a href="#kontakt" class="navbar-item support__footer-item">
                            Kontakt
                        </a>
                        <a href="#mecenasi"class="navbar-item support__footer-item">
                            Mecenasi i Darczyńcy
                        </a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-item support__footer-item">
                            Strona Instytutu Misesa
                        </a>
                    </div>

                    <div class="navbar-end">
                        <a class="navbar-item support__footer-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/support__footer-opcja.png" alt="" srcset="">
                        </a>
                    </div>
                </div>
                <div class="columns support__footer-space">
                    <div class="column ">
                        <p class="support__footer-info">Polityka <a href="#" class="support__footer-link">LINK</a> prywatności</p>
                        <p class="support__footer-info">Polityka <a href="#" class="support__footer-link">LINK</a> prywatności</p>
                    </div>
                    <div class="column is-2">
                        <p class="has-text-right support__footer-info">Projekt <a href="#" class="support__footer-link">LINK</a></p>
                        <p class="has-text-right support__footer-info">Wykonanie <a href="#" class="support__footer-link">LINK</a></p>
                    </div>
                </div>
            </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src='<?php echo get_template_directory_uri(); ?>/js/script.js'></script>
</body>

</html>
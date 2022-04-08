@extends('main')

@section('content')
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Menü</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Vissza az elejére</a></li>
            <li class="sidebar-nav-item"><a href="#about">Rólam</a></li>
            <li class="sidebar-nav-item"><a href="#services">Kompetenciáim</a></li>
            <li class="sidebar-nav-item"><a href="#portfolio">Portfólió</a></li>
        </ul>
    </nav>
    <!-- Header-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">Drab Tamás</h1>
            <h3 class="mb-5"><em>Backend ● Portfólió ● Skvad</em></h3>
            <a class="btn btn-primary btn-xl" href="#about">Rólam</a>
        </div>
    </header>
    <!-- About-->
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4">
                    <img style="max-width: 100%" src="https://icon-library.com/images/blank-person-icon/blank-person-icon-13.jpg">
                </div>
                <div class="col-lg-8">
                    <h2 class="mb-5">Rólam</h2>
                    <ul class="about-info gx-md-0 gx-4">
                        <li class="d-flex"><span>Név:</span> <span>Drab Tamás</span></li>
                        <li class="d-flex"><span>Születési dátum:</span> <span>1990. december 14.</span></li>
                        <li class="d-flex"><span>Város:</span> <span>Budapest</span></li>
                        <li class="d-flex"><span>Email:</span> <span>tamas.drab@gmail.com</span></li>
                        <li class="d-flex"><span>Telefonszám: </span> <span>+36 30 459 6139</span></li>
                    </ul>
                    <p class="text-start mt-4">
                        2008 óta foglalkozom PHP és az ezt kiegészítő frontend fejlesztésekkel, előtte grafikai irányban
                        képeztem magam.
                    </p>
                    <p class="text-start">
                        Szeretek kirándulni, sportolni (2006 óta a magyar floorball OB1 játékosa), az időm kreatívan,
                        mindig valami újat alkotva tölteni.
                    </p>
                    <a class="btn btn-dark btn-xl mt-5" href="#services">Kompetenciáim</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="mt-0">Kompetenciáim</h2>
                <h3 class="text-secondary mb-5">Az elmúlt 2-3 évet figyelembe véve</h3>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                    <h4><strong>Backend</strong></h4>
                    <p class="text-faded">
                        Az elmúlt években dedikált PHP fejlesztőként dolgoztam a legtöbbet, lehetőség szerint a Laravel
                        ökoszisztémáján belül (kiegészítve WordPress, Joomla és egyéb natív fejlesztésekkel).
                    </p>
                    <p class="text-faded mb-0">
                        Projektjeim túlnyomó része közepes terhelésű monolit jellegű fejlesztés volt, kiegészítve néhány
                        microservice szolgáltatással.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                    <h4><strong>Frontend</strong></h4>
                    <p class="text-faded mb-0">
                        2017-ig full stack fejlesztőként dolgoztam, így nem illetődöm meg jól rendszerezett projektek
                        HTML / (S)CSS / JS (jQuery) karbantartásától és az ezt körülvevő ökoszisztéma
                        (npm, webpack, gulp, stb.) jelenlététől. Jelenleg a Vue.js (és minimális React) irányában
                        kezdtem képezni magam, hogy 2022-es webes elvárásoknak megfelelően tudjak backend alapot
                        tervezni.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                    <h4><strong>DevOps</strong></h4>
                    <p class="text-faded mb-0">
                        Alapszinten. Nem okoz gondot egy VPS telepítése (leginkább Linux disztribúciók), elbánok egy
                        Docker környezettel és értem nagyobb rendszerek dilemmáit, de alapvetően kódolás irányú
                        fejlesztéssel foglalkoztam az elmúlt években.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-mustache"></i></span>
                    <h4><strong>Grafika</strong></h4>
                    <p class="text-faded">
                        Nem esem kétségbe Adobe termékek használatakor, bár tény, hogy teljes arculattervezésre lennének
                        jobb jelöltjeim mostanra... :)
                    </p>
                    <p class="text-faded mb-0">
                        Bár fejlesztői irányban haladtam tovább, mindig lesz egy kis hely a szívemben ennek is.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h2 class="mb-0">Fejlesztett projektjeim</h2>
                <h3 class="text-secondary mt-3 mb-5">Az elmúlt 2-3 évet figyelembe véve</h3>
            </div>
            <div class="row gx-0">
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Stationary</div>
                                <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..."/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Ice Cream</div>
                                <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice
                                    cream cone!</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-2.jpg" alt="..."/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Strawberries</div>
                                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on
                                    top!</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-3.jpg" alt="..."/>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item" href="#!">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">Workspace</div>
                                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio-4.jpg" alt="..."/>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout-->
    <section class="callout">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mx-auto mb-5">
                Érdekel <em>ennek</em> a portfólió oldalnak a kódja?
            </h2>
            <a target="_blank" class="btn btn-primary btn-xl" href="https://github.com/dmi90/dt-skvad-portfolio.git">
                Megnézem!
            </a>
        </div>
    </section>
    <!-- Call to Action-->
    <section class="content-section bg-primary text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Így készült...</h2>
            <a target="_blank" class="btn btn-xl btn-light me-1" href="https://startbootstrap.com/theme/stylish-portfolio">Stylish Portfolio Template</a>
            <a target="_blank" class="btn btn-xl btn-dark me-1" href="https://laravel.com/">Laravel</a>
            <a target="_blank" class="btn btn-xl btn-light me-1" href="https://backpackforlaravel.com/">Laravel Backpack</a>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a target="_blank" class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/tamas.drab.5"><i class="icon-social-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="tel:+36304596139"><i class="icon-phone"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="mailto:tamas.drab@gmail.com"><i class="icon-envelope"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; 2022</p>
        </div>
    </footer>
@endsection

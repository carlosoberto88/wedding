<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mildred & Carlos se casan!</title>
    <meta name="description" content="Queremos invitarte a nuestro gran día.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="Mildred & Carlos se casan">
    <meta property="og:description" content="Queremos invitarte a nuestro gran día.">
    {{-- <meta property="og:image" content="https://wedding.ramswaroop.me/img/hero-min-min-min.jpg"> --}}
    <meta property="og:type" content="website">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"> --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/2.png')}}">
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"> --}}
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">

    <script>
        // load css files from CDN if local node_modules fail
        function loadCssFromCDN(css) {
            // create new link tag
            const link = document.createElement('link');
            if (css === 'animate.css') {
                link.href = 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css';
            } else if (css === 'font-awesome.css') {
                link.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css';
            }
            link.rel = 'stylesheet';

            // add link tag to head section
            document.getElementsByTagName('head')[0].appendChild(link);
        }
    </script>

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" onerror="loadCssFromCDN('animate.css')">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        onerror="loadCssFromCDN('font-awesome.css')">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite(['resources/js/app.js'])
</head>

<body id="top">
    <a href="https://wa.me/+593995607545" class="whatsapp-icon" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>
    <section class="hero">
        <section class="navigation">
            <header>
                <div class="header-content">
                    {{-- <div class="logo"><a href="#"><img src="img/2-red.png" alt="Logo"></a></div> --}}
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="#intro">Nuestro Compromiso</a></li>
                                <li><a href="#events">Nupcias</a></li>
                                <li><a href="#instagram">Regalos</a></li>
                                <li><a href="#eng-pics">Fotos de compromiso</a></li>
                                <li class="hidden-sm hidden-xs"><a href="#video-bg">Un vistazo a la ciudad</a></li>
                            </ul>
                            <ul class="member-actions">
                                <li><a href="{{ route('login') }}" class="login">Login</a></li>
                                <li><a href="#map" class="login">Ubicación</a></li>
                                <li><a href="#rsvp" class="btn-white btn-small">¡Confirmar!</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <!--<h1>Ram and Antara</h1>-->
                        <img src="img/1.png " loading="lazy">
                        <!--<p class="intro">Ram & Antara are getting hitched!</p>-->
                        <!--<a href="#" class="btn btn-fill btn-large btn-margin-right">Scroll Down</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 hidden-xs"></div>
                <div class="col-sm-4 hidden-xs text-center"><a href="#rsvp"
                        class="btn btn-accent btn-large rsvp-btn rsvp-button">¡Confirmación!</a></div>
                <div class="col-sm-4 hidden-xs"></div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#invitation"><i class="fa fa-angle-down"></i></a></div>
    </section>

    <section id="invitation" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Estás invitado a nuestra boda</h3>
                    {{-- <p>The dates are 27<sup>th</sup> & 28<sup>th</sup> of November '17 and we would like you to be a
                        part of
                        it.</p> --}}
                    {{-- <div class="share-bar"></div> --}}
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="header">Nuestro Compromiso</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs"><img src="{{ asset('img/DSC07367-min-min.jpg') }}" class="wp1" loading="lazy"></div>
                <div class="col-md-6">
                    <p>
                        Nos comprometimos el 24 de noviembre de 2023 en un restaurante encantador con vistas a la
                        ciudad. Fue una sorpresa maravillosa para Mildred, que no se lo esperaba. Este momento tan
                        especial nos llenó de alegría y amor, y estamos emocionados de compartir nuestra felicidad con
                        ustedes en nuestra boda.
                    </p>
                </div>
                <div class="col-md-3 hidden-sm hidden-xs"><img src="{{ asset('img/DSC07268-min-min.jpg') }}" class="wp2" loading="lazy">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-push-2 col-xs-6 hidden-md hidden-lg"><img src="{{ asset('img/DSC07367-min-min.jpg') }}"
                        class="wp8" loading="lazy"></div>
                <div class="col-sm-4 col-sm-push-2 col-xs-6 hidden-md hidden-lg"><img src="{{ asset('img/DSC07268-min-min.jpg') }}"
                        class="wp9" loading="lazy"></div>
            </div>
        </div>
    </section>

    <section class="events section-padding" id="events">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="header">Nupcias</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <div class="wp3">
                        <p><strong>1 de Noviembre del 2024</strong></p>

                        <h5>Ceremonia <span class="time">3PM - 4PM</span></h5>
                        <p>Tres cosas hay que son permanentes: La fé, la esperanza y el amor; pero la más importante de
                            las tres es el AMOR.
                            (Corintios 13,13)
                            Acompáñanos en nuestra ceremonia religiosa y sé parte de este mágico momento
                            junto a nosotros.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <div class="wp4">
                        <p><strong></strong></p>
                        <br>
                        <h5>Recepción <span class="time">4PM - 10PM</span></h5>
                        <p>Después de decir "sí, quiero", queremos compartir risas, alegría y momentos inolvidables con
                            ustedes.

                            Prepárense para una noche de buena música, deliciosos platillos, y mucho amor. ¡No se
                            olviden de sus zapatos de baile y su mejor sonrisa!</p>
                    </div>
                </div>
            </div>
            <div class="row section-padding">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <a class="btn btn-accent btn-small" data-toggle="modal" data-target="#dc-modal">
                        <i class="fa fa-barcode"></i>&nbsp;&nbsp;Código de vestimenta
                    </a>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-xs-12 section-border section-padding">
                </div>
            </div>-->
        </div>

        <div id="dc-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span>&times;</span>
                        </button>
                        <h3 class="text-center section-padding">Código de vestimenta</h3>
                        <h5>Vestimenta formal/elegante</h5>
                        La vestimenta formal/elegante es la más adecuada para nuestra boda.
                        Inspirate con nuestro tablero de Pinterest, haz click sobre las imágenes
                        {{-- <br> --}}
                        <p>
                        <ul style="display: flex; justify-content: space-evenly; list-style-type: none; padding: 0;">
                            <li style="flex: 1; display: flex; justify-content: center;">
                                <a href="https://pin.it/5kOI0h6zt" target="_blank">
                                    <img src="img/mujeres-3.jpg" alt=""
                                        style="height: 200px; object-fit: cover;" loading="lazy">
                                </a>
                            </li>
                            <li style="flex: 1; display: flex; justify-content: center;">
                                <a href="https://pin.it/1yt3anAzU" target="_blank">
                                    <img src="img/hombres-3.jpg" alt=""
                                        style="height: 200px; object-fit: cover;" loading="lazy">
                                </a>
                            </li>
                        </ul>
                        <br>
                        <h5>Recomendaciones</h5>
                        <ul style="list-style-type: none; padding: 0;">
                            <li>
                                * Uso de tacón cuadrado, la ceremonia será sobre pasto y no queremos que te hundas.
                            </li>
                            <li>
                                * Lleva tu repelente de confianza, estaremos en una Quinta y los mosquitos a veces hacen
                                de la suya.
                            </li>
                        </ul>


                        </p>
                        <h5>Colores prohibidos</h5>
                        <ul>
                            <li>* Blanco (todas sus variaciones)</li>
                            <li>* Rosado</li>
                            <li>* Nude</li>
                        </ul>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    </section>

    <section id="instagram" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>¡Regalos!</h3>
                    <p>El mejor regalo que nos das es tu presencia, pero si quieres tener un detalle con nosotros
                        ayúdanos para nuestra luna de miel!
                    </p>
                </div>
            </div>
            <div class="row section-border wp7">
                <div class="col-md-4 col-md-offset-4">
                    <img src="img/regalo-3.png" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section id="eng-pics" class="section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="header">Fotos de compromiso</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="img/DSC07213-min-min.jpg">
                        <div class="img-wrap">
                            <div class="overlay">
                                <i class="fa fa-search"></i>
                            </div>
                            <img src="img/DSC07213-min-min.jpg" alt=""  loading="lazy"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="img/DSC07288-min-min.jpg">
                        <div class="img-wrap">
                            <div class="overlay">
                                <i class="fa fa-search"></i>
                            </div>
                            <img src="img/DSC07288-min-min.jpg" alt=""  loading="lazy"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="img/DSC07335-min-min.jpg">
                        <div class="img-wrap">
                            <div class="overlay">
                                <i class="fa fa-search"></i>
                            </div>
                            <img src="img/DSC07335-min-min.jpg" alt=""  loading="lazy"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="img/DSC07085-min-min.jpg">
                        <div class="img-wrap">
                            <div class="overlay">
                                <i class="fa fa-search"></i>
                            </div>
                            <img src="img/DSC07085-min-min.jpg" alt=""  loading="lazy"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="img/DSC07091-min-min.jpg">
                        <div class="img-wrap">
                            <div class="overlay">
                                <i class="fa fa-search"></i>
                            </div>
                            <img src="img/DSC07091-min-min.jpg" alt=""  loading="lazy"/>
                        </div>
                    </a>
                </div>
                <div class="col-md-2">
                    <a class="fancybox" rel="group" href="img/DSC07153-min-min.jpg">
                        <div class="img-wrap">
                            <div class="overlay">
                                <i class="fa fa-search"></i>
                            </div>
                            <img src="img/DSC07153-min-min.jpg" alt=""  loading="lazy"/>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row hidden-lg hidden-md hidden-xs">
                <div class="col-xs-12 section-border section-padding"></div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-md-12">
                <div class="diamond floating-logo">
                    <img src="img/sketch-logo.png" alt="Sketch Logo">
                    <div class="ring"></div>
                </div>
            </div>
        </div>-->
    </section>

    <section id="video-bg" class="hidden-sm hidden-xs">
        <div id="bgndVideo" class="player"
            data-property="{videoURL:'https://youtu.be/hjlKytMWh0Q?si=bbho6pvbeeKQo16e',containment:'#video-bg',autoPlay:true, mute:true, showControls:false, startAt:15, stopAt:60, opacity:1}">
        </div>
        <div id="video-content">
            <h5>Quito</h5>
            <p>La carita de Dios</p>
        </div>
    </section>

    <section id="map" class="section-padding">
        <div class="text-center">
            <h3>¿Cómo llegar?</h3>
            <p>¡Es más fácil de lo que crees!</p>
        </div>
        <div id="map-canvas"></div>
        <div id="map-content-wrapper" class="container pointer-events-none">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-md-offset-3 col-md-6">
                    <div class="text-center">
                        <div id="btn-show-content" class="toggle-map-content pointer-events-auto">
                            <i class="fa fa-info-circle"></i>&nbsp;&nbsp; Mostrar información
                        </div>
                    </div>
                    <div id="map-content" class="pointer-events-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Quinta Carolina</h5>
                                <p>Juan Bautista N2-32, 170804 <br> Quito, Ecuador</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Google Maps/Waze</h5>
                                <p>
                                    <a href="https://www.google.com/maps?q=-0.2971594,-78.4347028&z=15"
                                        target="_blank">Google Maps</a><br>
                                    <a href="https://waze.com/ul?ll=-0.2971594,-78.4347028&navigate=yes"
                                        target="_blank">Waze</a><br>
                                </p>
                            </div>

                        </div>
                        <div class="row text-center">
                            <div class="col-md-6" style="padding: 5px;">
                                <a class="btn btn-fill btn-small"
                                    href="https://m.uber.com/ul/?action=setPickup&dropoff[latitude]=-0.2971594&dropoff[longitude]=-78.4347028&dropoff[nickname]=Destination"><i
                                        class="fa fa-taxi"></i>&nbsp;&nbsp;Pedir Uber</a>
                            </div>
                            <div class="col-md-6" style="padding: 5px;">
                                <a class="btn btn-accent btn-small" id="btn-show-map"><i
                                        class="fa fa-map-marker"></i>&nbsp;&nbsp;Ver Mapa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rsvp text-center" id="rsvp">

        <div id="rsvp-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span>&times;</span>
                        </button>
                        <div class="section-padding">
                            <h3>Thank you!</h3>
                            <p>We are glad to see you join us on our big day.</p>
                            <div id="add-to-cal"></div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <livewire:rsvp-component />
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center content">
                    <span class="to-top-wrapper"><a href="#top" class="to-top"><i
                                class="fa fa-angle-up"></i></a></span>
                    <p>Creado por Carlos con <span class="fa fa-heart pulse2"></span> para Mildred</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>');
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('js/vendor/ouical.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgkTcQBXMSRQxrXnLvQ2zDa4dzaD5JeQw&callback=initMap"></script>
    <!-- Google Analytics -->
    {{-- <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46465113-4', 'auto');
        ga('send', 'pageview');
    </script> --}}
</body>

</html>

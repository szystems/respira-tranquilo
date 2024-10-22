<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <link rel="icon" type="image/png" href="{{ asset('proffer/proffer/assets/images/logos/favicon.ico') }}">

    <title> Respira Tranquilo(a) </title>

    <link href="{{ asset('proffer/proffer/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/odometer-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('proffer/proffer/assets/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .bg-white {
            background-color: white; /* Asegúrate de que el color de fondo sea blanco */
            min-height: 100px; /* Ajusta la altura mínima según sea necesario */
        }
    </style>

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-2">
            <nav class="navigation navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('proffer/proffer/assets/images/logos/1 RTCTEM FULL.png') }}" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-left navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            {{-- <li class="menu-item-has-children current-menu-parent">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home style 1</a></li>
                                    <li class="current-menu-item"><a href="index-2.html">Home style 2</a></li>
                                    <li><a href="index-3.html">Home style 3</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#Level3">Third level</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="team-single.html">Team single</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="event-single.html">Event single</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Causes</a>
                                <ul class="sub-menu">
                                    <li><a href="causes.html">Causes</a></li>
                                    <li><a href="case-single.html">Causes single</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog default</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="blog-fullwidth.html">Blog full width</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#Level3">Blog details</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-single.html">Blog details</a></li>
                                            <li><a href="blog-single-left-sidebar.html">Blog details left sidebar</a></li>
                                            <li><a href="blog-single-fullwidth.html">Blog details full width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-single.html">Shop single</a></li>
                                </ul>
                            </li>--}}
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#beneficios">Beneficios</a></li>
                            <li><a href="#funcionamiento">¿Cómo Funciona?</a></li>
                            <li><a href="#testimonios">Testimonios</a></li>
                            {{-- <li><a href="#punto">Puntos de Venta</a></li> --}}
                            <li><a href="#catalogo">Catálogo</a></li>
                            <li><a href="#faq">Preguntas</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <div class="cart-search-contact">

                        <div class="donate-btn">
                            <a href="#contacto" class="theme-btn-s7" style="background-color: #f1532a; color: #ffffff;"><i class="fi flaticon-like"></i> Contacto</a>
                        </div>
                    </div>

                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->

        @yield('content')

        <!-- start site-footer -->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-4 col-md-4 col-sm-6">
                            <div class="widget about-widget">
                                <div class="widget-title">
                                    <h3>
                                        <span class="hidden">About us</span>
                                        <img src="{{ asset('proffer/proffer/assets/images/logos/RTCTEM(3).png') }}" alt>
                                    </h3>
                                </div>
                                <p>Respira Tranquilo(a) con tu Estufa Mejorada</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="https://www.facebook.com/RespiraTranquiloGT" target="blank__"><i class="ti-facebook"></i></a></li>
                                        <li><a href="https://x.com/RespiraTragt" target="blank__"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="https://www.instagram.com/respiratranquilogt/" target="blank__"><i class="ti-instagram"></i></a></li>
                                        <li><a href="https://www.tiktok.com/@repiratranquilogt" target="blank__"><img src="{{ asset('proffer/proffer/assets/images/logos/tiktok.png') }}" alt="TikTok" width="15px" height="15px"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-6">
                            <div class="widget contact-widget service-link-widget">
                                <div class="widget-title">
                                    <h3>Contacto</h3>
                                </div>
                                <ul>
                                    <li><font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Oficina 650, Edificio ASCEND, 13 Calle 05-31, Zona 9, Ciudad de Guatemala</li>
                                    <li><font color="cd211d"><i class="fi flaticon-call"></i></font> <a href="tel:+50222300788">+(502) 2230-0788</a> <br><a href="tel:+50246268096">+(502) 4626-8096</a></li>
                                    <li><font color="cd211d"><i class="fi flaticon-email"></i></font> <a href="mailto:info@respiratranquilo.org">info@respiratranquilo.org</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-4 col-md-4 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#inicio">Inicio</a></li>
                                    <li><a href="#beneficios">Beneficios</a></li>
                                    <li><a href="#funcionamiento">¿Cómo Funciona?</a></li>
                                    <li><a href="#testimonios">Testimonios</a></li>
                                    {{-- <li><a href="#punto">Puntos de Venta</a></li> --}}
                                    <li><a href="#catalogo">Catálogo</a></li>
                                    <li><a href="#faq">Preguntas</a></li>
                                    <li><a href="#contacto">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>
                                        <span>Actores</span>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <img src="{{ asset('proffer/proffer/assets/images/logos/MAF.png') }}" alt>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <img src="{{ asset('proffer/proffer/assets/images/logos/ALTERNA.png') }}" alt>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <img src="{{ asset('proffer/proffer/assets/images/logos/BID.png') }}" alt>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col col-lg-12 col-md-12 col-sm-12">
                                <div class="widget about-widget">
                                    <br>
                                    <img src="{{ asset('proffer/proffer/assets/images/logos/MAF-Alterna-Llamada-BID_B.png') }}" alt>
                                </div>
                            </div>
                            {{-- <div class="col col-lg-4 col-md-4 col-sm-6 bg-white">
                                <div class="widget contact-widget service-link-widget">
                                    <img src="{{ asset('proffer/proffer/assets/images/logos/ALTERNA.png') }}" alt>
                                </div>
                            </div>
                            <div class="col col-lg-4 col-md-4 col-sm-6 bg-white">
                                <div class="widget link-widget">
                                    <img src="{{ asset('proffer/proffer/assets/images/logos/BID.png') }}" height="120%" alt>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div> <!-- end container -->
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <div class="col col-xs-12">
                            <span>
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                Derechos reservados <a href="https://www.respiratranquilo.org" class="font-weight-bold" target="_blank">www.respiratranquilo.org</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('proffer/proffer/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('proffer/proffer/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins for this template -->
    <script src="{{ asset('proffer/proffer/assets/js/jquery-plugin-collection.js') }}"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('proffer/proffer/assets/js/script.js') }}"></script>
</body>
</html>

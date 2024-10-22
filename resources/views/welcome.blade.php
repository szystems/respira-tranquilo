@extends('layouts.app')

@section('content')

    <!-- start of hero -->
    <section class="hero-slider hero-style-2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('proffer/proffer/assets/images/web/portada/1920x1029-A1.jpg') }}">
                        <div class="container" align="center">
                            <div class="img-holder">
                                <br><br><br><br><br><br>
                                <img src="{{ asset('proffer/proffer/assets/images/web/portada/A1.png') }}">
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 id="inicio">Respirá Tranquila con tu Estufa Mejorada</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>El fogón abierto quema tu dinero, una estufa mejorada te ayuda a ahorrar</p>
                            </div>
                            <div class="clearfix"></div>
                            {{-- <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#contacto" class="theme-btn-s2">Obtén más información <i class="fi flaticon-heart-1"></i></a>
                            </div>
                            <div class="video-btns">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                            </div> --}}
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('proffer/proffer/assets/images/web/portada/1920x1029-B1.jpg') }}">
                        <div class="container" align="center">
                            <div class="img-holder">
                                <br><br><br><br><br><br>
                                <img src="{{ asset('proffer/proffer/assets/images/web/portada/B1.png') }}">
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 id="inicio">Respirá Tranquilo con tu Estufa Mejorada</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>¿Sabias que el uso de fogón abierto aumenta el reisgo de enfermedades pulmonares?</p>
                            </div>
                            <div class="clearfix"></div>
                            {{-- <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#contacto" class="theme-btn-s2">Obtén más información <i class="fi flaticon-heart-1"></i></a>
                            </div>
                            <div class="video-btns">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                            </div> --}}
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('proffer/proffer/assets/images/web/portada/1920x1029-C1.jpg') }}">
                        <div class="container" align="center">
                            <div class="img-holder">
                                <br><br><br><br><br><br>
                                <img src="{{ asset('proffer/proffer/assets/images/web/portada/C1.png') }}">
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 id="inicio">Respirá Tranquilo con tu Estufa Mejorada</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Comprar una estufa mejorada es la mejor decisión que pudimos tomar</p>
                            </div>
                            <div class="clearfix"></div>
                            {{-- <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#contacto" class="theme-btn-s2">Obtén más información <i class="fi flaticon-heart-1"></i></a>
                            </div>
                            <div class="video-btns">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                            </div> --}}
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('proffer/proffer/assets/images/web/portada/1920x1029-D1.jpg') }}">
                        <div class="container" align="center">
                            <div class="img-holder">
                                <br><br><br><br><br><br>
                                <img src="{{ asset('proffer/proffer/assets/images/web/portada/D1.png') }}">
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 id="inicio">Respirá Tranquila con tu Estufa Mejorada</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>La estufa mejorada está chilera porque menos personas enfermas </p>
                            </div>
                            <div class="clearfix"></div>
                            {{-- <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#contacto" class="theme-btn-s2">Obtén más información <i class="fi flaticon-heart-1"></i></a>
                            </div>
                            <div class="video-btns">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                            </div> --}}
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="container">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            {{-- <div class="container social-container">
                <div class="social">
                    <br><br>
                    <span>Siguenos: </span>
                    <ul>
                        <li><a href="https://www.facebook.com/RespiraTranquiloGT" target="blank__"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://x.com/RespiraTragt" target="blank__"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="https://www.instagram.com/respiratranquilogt/" target="blank__"><i class="ti-instagram"></i></a></li>
                        <li><a href="https://www.tiktok.com/@repiratranquilogt" target="blank__"><img src="{{ asset('proffer/proffer/assets/images/logos/tiktok.png') }}" alt="TikTok" width="15px" height="15px"></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- end of hero slider -->



    <!-- start target-area -->
    <section class="target-area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="img-holder">
                        <img src="{{ asset('proffer/proffer/assets/images/web/470 x 563/470x563.jpg') }}" alt>
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="target-content">
                        <div class="section-title">
                            {{-- <span>#Introducción</span> --}}
                            <h2>¿Por qué cambiar a una estufa mejorada?</h2>
                        </div>
                        <div class="content">
                            <p>En Guatemala, más del 60% de los hogares en áreas rurales cocinan con fogones abiertos. Las <span>estufas mejoradas</span> son una solución sostenible que reduce el humo dentro del hogar, ahorra leña y mejora la calidad de vida. </p>
                            <p>Nuestro principal objetivo es el bienestar de las comunidades guatemaltecas. Las EM son una herramienta diseñada para mejorar la salud, la economía familiar y la sostenibilidad ambiental de las comunidades locales.</p>

                            {{-- <div class="goal-raised">
                                <div>
                                    <span>Donation goal </span>
                                    <h3>$45,000</h3>
                                </div>
                                <div>
                                    <span>Donation raised </span>
                                    <h3>$35,000</h3>
                                </div>
                            </div>
                            <a href="#" class="theme-btn-s3"><i class="fi flaticon-like"></i> Donate Now</a> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end target-area -->

    <!-- start about-section -->
    <section class="about-section">
        <div class="content-area">
            <div class="left-col">
                <div class="about-area">
                    <div class="section-title" id="beneficios">
                        <span>#Beneficios</span>
                        <h2>Beneficios de Usar una Estufa Mejorada</h2>
                    </div>
                    <div class="about-details">
                        {{-- <p>Magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather or then turned to look out.</p>
                        <div class="btns">
                            <a href="#" class="theme-btn-s4">More about us</a>
                            <a href="#" class="theme-btn-s5">Become a Volunteer Now</a>
                        </div> --}}
                        <div class="about-features">
                            <div>
                                <div class="icon" style="color: #ff8108;">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3 style="color: #f1532a;">Mejora en la salud </h3>
                                <p style="text-align: justify;">La salud de nuestras comunidades es una prioridad. Las estufas mejoradas están diseñadas para reducir el humo dentro de los hogares, lo que significa menos exposición a partículas dañinas para mujeres, niños/as en las familias.</p>
                            </div>
                            <div>
                                <div class="icon" style="color: #ff8108;">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3 style="color: #f1532a;">Versatilidad en la cocina</h3>
                                <p style="text-align: justify;">Existe un modelo de estufa mejorada para cada necesidad: para el uso diario en el hogar, para negocios, fijas y portatiles, para cocciones robustas como el nixtamal, frijol, tamales y otros. Los fabricantes guatemaltecos han diseñado diferentes tamaños de estufas mejoradas, con piezas ajustables, de distintos colores y materiales.</p>
                            </div>
                            <div>
                                <div class="icon" style="color: #ff8108;">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3 style="color: #f1532a;">Ahorro en leña</h3>
                                <p style="text-align: justify;">Las estufas mejoradas utilizan un 50% menos de leña en comparación con los fogones abiertos. </p>
                            </div>
                            <div>
                                <div class="icon" style="color: #ff8108;">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3 style="color: #f1532a;">Impacto ambiental</h3>
                                <p style="text-align: justify;">Contribuyen a reducir la deforestación, disminuyendo la demanda de leña en las comunidades rurales.</p>
                            </div>
                            <div>
                                <div class="icon" style="color: #ff8108;">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3 style="color: #f1532a;">Ahorro para la familia</h3>
                                <p style="text-align: justify;">El diseño de las estufas mejoradas incide significativamente en un ahorro de leña que incrementa el ahorro de recursos que cada familia puede destinar a satisfacer otras necesidades como educación, vestimenta y otros.</p>
                            </div>
                            <div>
                                <div class="icon" style="color: #ff8108;">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3 style="color: #f1532a;">Cuidado del medio ambiente</h3>
                                <p style="text-align: justify;">En Guatemala, la leña es la principal fuente de energía para cocinar, especialmente en áreas rurales, representando el 57% de la matriz energética, lo que contribuye a la deforestación y degradación ambiental. Una solución para mitigar este problema es el reemplazo gradual de los fogones abiertos por estufas mejoradas. </p>
                            </div>

                        </div>
                        <p  style="text-align: justify;"><strong>¿Qué es una estufa mejorada?</strong>
                            Una estufa mejorada surge de un diseño basado en una cámara de combustión creada para conservar el calor del fuego, con una estructura sellada que incluye una chimenea que expulsa la mayor parte del humo fuera de la casa. </p>
                        <hr>
                        <div class="submit-area" align="center">
                            <a href="#contacto" class="theme-btn-s7"  style="background-color: #f1532a; color: #ffffff;"><i class="fi flaticon-like"></i> Conoce más sobre los beneficios</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col data-bg-image" data-background="{{ asset('proffer/proffer/assets/images/web/845x915/A.jpg') }}">
                <div class="img-holder">
                    <!-- <img src="assets/images/about.jpg" alt> -->
                </div>
            </div>
        </div> <!-- end content-area -->
    </section>
    <!-- end about-section -->

    <!-- start partner-section-s2 -->
    <section class="partner-section-s2" style="margin-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <div class="section-title" id="financiamiento">
                        <span>#Impacto en el Cambio de Comportamiento</span>
                        <h2>Un Futuro Más Saludable y Sostenible para Guatemala</h2>
                    </div>
                    <div class="partner-details">
                        <p style="text-align: justify;">Las estufas mejoradas son mucho más que una tecnología, son un paso hacia la transformación de prácticas tradicionales, promoviendo hábitos más saludables y sostenibles en la cocina. </p>
                        <p style="text-align: justify;">Cada estufa mejorada instalada es un avance en la reducción del uso de leña, la disminución del humo dentro del hogar y la protección del medio ambiente. Las familias que adoptan este cambio no solo mejoran su calidad de vida, sino que también se convierten en agentes de cambio para sus comunidades.</p>
                        <div class="section-title">
                            <h2>Indicadores de Cambio</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <strong>Ahorro significativo:</strong> el uso de estufas mejoradas reduce a la mitad el consumo de leña, permitiendo que las familias ahorren dinero.
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Mejoras en la salud:</strong> reducción en enfermedades respiratorias causadas por la exposición al humo.
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Protección del medio ambiente:</strong> menor deforestación al reducir la demanda de leña en las comunidades rurales.
                                    </li>
                                    <li class="list-group-item" align="center">
                                        <strong>Con una estufa mejorada, cocinas de manera más eficiente, usas menos leña, ahorras tiempo y dinero, permitiéndote disfrutar más la vida familiar.</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="section-title">
                            <h2>Testimonios de Cambio Progresivo: </h2>
                        </div> --}}
                        <p></p>
                    </div>
                    <div class="submit-area">
                        <a href="#contacto" class="theme-btn-s7"  style="background-color: #f1532a; color: #ffffff;"><i class="fi flaticon-like"></i> Sé parte del cambio</a>
                    </div>
                    {{-- <div class="partner-details">
                        <p>(poder contactar al fabricante más cercano a tu localidad para una asesoría.) </p>
                    </div> --}}

                </div>

            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partner-section-s2 -->

    <!-- start partner-section-s2 -->
    <section class="partner-section-s2" style="margin-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title"s>
                        <span id="funcionamiento">#Funcionamiento</span>
                        <h2>¿Cómo funciona una estufa mejorada?</h2>
                    </div>
                    <div class="partner-details" style="text-align: justify;">
                        <p>Las estufas mejoradas están diseñadas para optimizar el uso de leña, reduciendo el consumo de combustible y disminuyendo la emisión de humo dentro del hogar. Funcionan a través de un sistema que concentra el calor en una cámara de combustión cerrada, permitiendo que los alimentos se cocinen más rápido y con menos leña.</p>
                        <p>Además, cuentan con una chimenea que expulsa el humo al exterior, mejorando la calidad del aire dentro de la vivienda y protegiendo la salud de las familias, especialmente de mujeres y niños/as. Con su diseño eficiente y práctico, estas estufas contribuyen a la conservación de los recursos naturales y ofrecen un ambiente más seguro y saludable para las familias.</p>
                    </div>
                    <div class="submit-area" align="center">
                        <a href="#contacto" class="theme-btn-s7"  style="background-color: #f1532a; color: #ffffff;"><i class="fi flaticon-like"></i> Solicita una demostración</a>

                    </div>
                    {{-- <div class="partner-details"  align="center">
                        <p>(poder contactar al fabricante más cercano a tu localidad para una asesoría.) </p>
                    </div> --}}

                </div>
                <div class="col col-md-7">
                    <div class="partners-area clearfix">
                        <div>
                            <a href="#catalogo"><img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-Q.jpg') }}" alt></a>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-A.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-B.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-C.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-D.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-E.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-F.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-G.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-H.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-I.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-J.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-K.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-L.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-M.jpg') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/web/175x175/175x175-N.jpg') }}" alt>
                        </div>


                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partner-section-s2 -->

    <!-- start testimoninals-funfact-section -->
    <section class="testimoninals-funfact-section testimonials-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3" id="testimonios">
                        <span>#Testimonios</span>
                        <h2>Historias de Éxito </h2>
                        <p>Familias que Respiran Mejor.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="testimonials-slider-s2 testimonials-slider-area">
                        <div class="grid">
                            <p class="author">
                                {{-- <div class="author-img">
                                    <img src="{{ asset('proffer/proffer/assets/images/testimonials/img-1.jpg') }}" alt>
                                </div> --}}
                                <h3>Doña María </h3>
                                <span>San Marcos</span>
                            </p>
                            <p style="text-align: justify;"><i>"Desde que tenemos la estufa mejorada, todo cambió en la casa. Ya no nos tragamos el humo y con menos leñita cocinamos rapidito. Antes pasaba comprando leña a cada rato, pero ahora hasta nos alcanza para ahorrar un poco".</i></p>
                        </div>
                        <div class="grid">
                            <p class="author">
                                {{-- <div class="author-img">
                                    <img src="{{ asset('proffer/proffer/assets/images/testimonials/img-2.jpg') }}" alt>
                                </div> --}}
                                <h3>Don Pedro</h3>
                                <span>Alta Verapaz</span>
                            </p>
                            <p style="text-align: justify;"><i>"Antes, cocinar era un relajo. El fogón hacía que todo se llenara de humo y mis patojos vivían tosiendo. Con la estufa mejorada, todo está más limpio, y lo mejor es que gasto menos en leña. ¡Una maravilla, pues!".</i></p>
                        </div>
                        <div class="grid">
                            <p class="author">
                                {{-- <div class="author-img">
                                    <img src="assets/images/testimonials/img-1.jpg" alt>
                                </div> --}}
                                <h3>Doña rosa  </h3>
                                <span>Chiquimula</span>
                            </p>
                            <p style="text-align: justify;"><i>"Antes de usar la estufa mejorada, cocinábamos con fogón abierto, eso afectaba la salud de mis hijos, también de la más güirita. Ahora, el humo ya no es un problema en mi casa, tampoco me efecta los ojos y no empeora mi tos. Respiramos mejor y gastamos menos en leña. Nunca pensé que un cambio tan pequeño pueda darnos beneficios tan grandes".</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end testimoninals-funfact-section -->

    {{-- <!-- start about-page-section -->
    <section class="about-page-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3" id="punto">
                        <span>#Puntos de Venta y Distribuidores </span>
                        <h2>¿Dónde puedes obtener una <span>Estufa</span> Mejorada?</h2>
                        <p>Magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="about-features-grid">
                        <div class="grid">
                            <h3>Chiquimula</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            <h3>Alta Verapaz</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            <h3>Quiche</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            <h3>Huehuetenango</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            <h3>San Marcos</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            <h3>San Marcos</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end about-page-section --> --}}

    {{-- <!-- start partner-section-s2 -->
    <section class="partner-section-s2" style="margin-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <div class="section-title" id="financiamiento">
                        <span>#Financiamiento</span>
                        <h2>Financiamiento y Opciones de Pago</h2>
                    </div>
                    <div class="partner-details">
                        <p>Con el apoyo de instituciones financieras locales, ofrecemos créditos accesibles para que puedas adquirir tu estufa mejorada. No necesitas un pago inicial y los plazos son flexibles para ajustarse a tus necesidades. </p>
                    </div>
                    <div class="submit-area">
                        <a href="#contacto" class="theme-btn-s7"><i class="fi flaticon-like"></i> Solicita Información sobre Crédito</a>

                    </div>

                </div>

            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partner-section-s2 --> --}}

    <!-- start testimoninals-funfact-section -->
    <section class="testimoninals-funfact-section testimonials-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3" id="catalogo">
                        <span>#Catálogo</span>
                        <h2>Catálogo de Estufas Mejoradas </h2>
                        {{-- <p>Familias que Respiran Mejor.</p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                            <li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                            <li data-target="#myCarousel" data-slide-to="9"></li>
                            <li data-target="#myCarousel" data-slide-to="10"></li>
                            <li data-target="#myCarousel" data-slide-to="11"></li>
                            <li data-target="#myCarousel" data-slide-to="12"></li>
                            <li data-target="#myCarousel" data-slide-to="13"></li>
                            <li data-target="#myCarousel" data-slide-to="14"></li>
                            <li data-target="#myCarousel" data-slide-to="15"></li>
                            <li data-target="#myCarousel" data-slide-to="16"></li>
                            <li data-target="#myCarousel" data-slide-to="17"></li>
                        </ol>

                        <!-- Contenido del carrusel -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGOEM1.png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (2).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO-EM--(17).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO-EM--(18).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (3).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (4).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (5).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (6).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (7).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (8).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (9).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (10).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (11).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (12).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (13).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (14).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (15).png') }}" class="img-responsive">
                            </div>
                            <div class="item">
                                <img src="{{ asset('proffer/proffer/assets/images/web/catalogo/CATALOGO EM  (16).jpg') }}" class="img-responsive">
                            </div>

                        </div>

                        <!-- Controles -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end testimoninals-funfact-section -->

    <!-- start faq-pg-section -->
    <section class="faq-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3">
                        <div class="icon">
                            <i class="fi flaticon-suitcase"></i>
                        </div>
                        <span  id="faq">#Preguntas</span>
                        <h2>Preguntas Frecuentes</h2>
                        {{-- <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero sit amet adipiscing</p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-1">¿Qué es una Estufa Mejorada?</a>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Una estufa mejorada surge de un diseño basado en una cámara de combustión creada para conservar el calor del fuego, con una estructura sellada que incluye una chimenea que expulsa la mayor parte del humo fuera de la casa. </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">¿Cómo funciona una Estufa Mejorada?</a>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Con una cámara de combustión creada para conservar el calor del fuego y una estructura sellada que incluye una chimenea que expulsa la mayor parte del humo fuera de la casa. </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">¿Qué modelos de estufas mejoradas existen? </a>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Existen Estufas Mejoradas móviles  faciles de transportar y fijas construidas directamente en el hogar.</p>
                                </div>
                            </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-4" aria-expanded="true">¿Cuánto cuesta una estufa mejorada? </a>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>El costo de una estufa mejorada varía según el modelo y los materiales. Sin embargo, la inversión se recupera rápidamente gracias al ahorro en leña y la mejora en salud. ¡Contáctanos para más información sobre precios específicos!</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-5" aria-expanded="true">¿Dónde puedo compar una Estufa Mejorada? </a>
                            </div>
                            <div id="collapse-5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Accede a nuestro catálogo para contactarte con el distribuidor más cercado a tu localidad.</p>
                                </div>
                            </div>
                        </div>




                        </div>

                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">¿Dónde puedo encontrar más información sobre cómo utilizar mi estufa mejorada?</a>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end faq-pg-section -->

    <!-- start contact-section -->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3">
                        <span id="contacto">#Contacto</span>
                        <h2>¿Tienes preguntas? </h2>
                        <p>Contáctanos para obtener más información sobre cómo adquirir tu estufa mejorada.</p>
                    </div>
                </div>
                <div class="col col-xs-12">
                    <div class="contact-info-grids">
                        <div class="grid">
                            <i class="fi flaticon-house"></i>
                            <h4>Dirección</h4>
                            <p>Oficina 650, Edificio ASCEND, 13 Calle 05-31, Zona 9, Ciudad de Guatemala</p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-email"></i>
                            <h4>Correo Electrónico</h4>
                            <p><a href="mailto:info@respiratranquilo.org">info@respiratranquilo.org</a> </p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-call"></i>
                            <h4>Teléfono</h4>
                            <p><a href="tel:+50234565432"> +(502) 22300788</a> <br><a href="tel:+5024626 8096"> +(502) 4626-8096</a> </p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-alarm"></i>
                            <h4>Horario</h4>
                            <p>Lunes - Viernes  <br>8Am - 5PM</p>
                            {{-- <p>Sabado  <br>9Am - 12PM</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-area">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="contact-text">
                            <h3>Escríbenos para saber cómo te podemos ayudar</h3>
                            {{-- <p>With a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the</p> --}}
                        </div>
                    </div>
                    <div class="col col-md-8">
                        <div class="contact-form">
                            <form method="post" class="contact-validation-active" id="contact-form-main">
                                <div>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre*">
                                </div>
                                <div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                </div>
                                <div>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono*">
                                </div>
                                <div>
                                    <select name="subject" class="form-control">
                                        <option disabled="disabled" selected>Seleccionar Asunto</option>
                                        <option>Información</option>
                                        <option>Financiamiento</option>
                                        <option>Demostración</option>
                                    </select>
                                </div>
                                <div class="fullwidth">
                                    <textarea class="form-control" name="note"  id="note" placeholder="Case Description..."></textarea>
                                </div>
                                <div class="submit-area">
                                    <button type="submit" class="theme-btn-s7"  style="background-color: #f1532a; color: #ffffff;"><i class="fi flaticon-like"></i> Enviar</button>
                                    <div id="loader">
                                        <i class="ti-reload"></i>
                                    </div>
                                </div>
                                <div class="clearfix error-handling-messages">
                                    <div id="success">Gracias!</div>
                                    <div id="error"> Ocurrio un error al enviar el mensaje, porfavor intente nuevamente. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end contact-section -->



    <!-- start target-area -->
    <section class="target-area section-padding" id="about">
        <div class="container">
            <div class="row">
                {{-- <div class="col col-md-5">
                    <div class="img-holder">
                        <img src="{{ asset('proffer/proffer/assets/images/target.jpg') }}" alt>
                    </div>
                </div> --}}
                <div class="col col-md-12">
                    <div class="target-content">
                        <div class="section-title">
                            <span>#Participación Comunitaria</span>
                            <h2>Cómo Puedes Ayudar a Expandir el Cambio</h2>
                        </div>
                        <div class="content">
                            <p>Síguenos en nuestras redes sociales, comparte nuestros contenidos, envíanos  información. Los cambios positivos son tarea de todos/as.</p>

                            {{-- <div class="goal-raised">
                                <div>
                                    <span>Donation goal </span>
                                    <h3>$45,000</h3>
                                </div>
                                <div>
                                    <span>Donation raised </span>
                                    <h3>$35,000</h3>
                                </div>
                            </div>
                            <a href="#" class="theme-btn-s3"><i class="fi flaticon-like"></i> Donate Now</a> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end target-area -->

@endsection

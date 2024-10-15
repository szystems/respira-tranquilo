@extends('layouts.app')

@section('content')

    <!-- start of hero -->
    <section class="hero-slider hero-style-2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('proffer/proffer/assets/images/patrones/1920x1029azul.png') }}">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2 id="inicio">Respira Tranquilo(a) con tu Estufa Mejorada</h2>
                            </div>
                            {{-- <div data-swiper-parallax="400" class="slide-text">
                                <p>Magazine and housed in a nice, gilded frame. It showed a lady fitted out with hat and fur boa who sat upright, raising a heavy fur muff that</p>
                            </div> --}}
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#contacto" class="theme-btn-s2">Obtén más información <i class="fi flaticon-heart-1"></i></a>
                            </div>
                            <div class="video-btns">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                {{-- <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-6.jpg">
                        <div class="container">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Don't shoot us with Guns, shoot us with cameras</h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Mejora tu salud, ahorra en leña y protege el medio ambiente. Descubre cómo una estufa mejorada puede transformar tu cocina.</p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s2">Donate Now <i class="fi flaticon-heart-1"></i></a>
                            </div>
                            <div class="video-btns">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="video-btn" data-type="iframe" tabindex="0"></a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide --> --}}
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="container">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="container social-container">
                <div class="social">
                    <br><br>
                    <span>Follow us: </span>
                    <ul>
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->



    <!-- start target-area -->
    <section class="target-area section-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="img-holder">
                        <img src="{{ asset('proffer/proffer/assets/images/target.jpg') }}" alt>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="target-content">
                        <div class="section-title">
                            <span>#Introducción</span>
                            <h2>¿Por qué cambiar a una <span>estufa</span> mejorada?</h2>
                        </div>
                        <div class="content">
                            <p>En Guatemala, más del 60% de los hogares en áreas rurales cocinan con fogones abiertos. Las <span>estufas mejoradas</span> son una solución sostenible que reduce el humo dentro del hogar, ahorra leña y mejora la calidad de vida. </p>

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
                    <div class="section-title">
                        <span>#Beneficios</span>
                        <h2>Beneficios de Usar una <span>Estufa </span>Mejorada</h2>
                    </div>
                    <div class="about-details">
                        {{-- <p>Magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather or then turned to look out.</p>
                        <div class="btns">
                            <a href="#" class="theme-btn-s4">More about us</a>
                            <a href="#" class="theme-btn-s5">Become a Volunteer Now</a>
                        </div> --}}
                        <div class="about-features">
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3>Ahorro en Leña</h3>
                                <p>Las estufas mejoradas utilizan un 50% menos de leña en comparación con los fogones abiertos. </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3>Mejora en la Salud</h3>
                                <p>Disminuyen hasta un 75% las emisiones de monóxido de carbono y partículas finas dentro del hogar. </p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3>Impacto Ambiental</h3>
                                <p>Contribuyen a reducir la deforestación, disminuyendo la demanda de leña en las comunidades rurales.</p>
                            </div>
                            <div>
                                <div class="icon">
                                    <i class="fi flaticon-arrow-angle-pointing-to-right"></i>
                                </div>
                                <h3>Versatilidad en la Cocina</h3>
                                <p>Existe un modelo de estufas mejoradas para cada necesidad. Para el uso diario del hogar, para negocios, para cocciones robustas (nixtamal, frijol, tamales, etc.); diferentes tamaños, y se cuenta con piezas ajustables del mismo modo se tiene opciones de estufas mejoradas portátiles.</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-col data-bg-image" data-background="{{ asset('proffer/proffer/assets/images/about.jpg') }}">
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
                <div class="col col-md-5">
                    <div class="section-title">
                        <span id="funcionamiento">#Funcionamiento</span>
                        <h2>"¿Cómo funciona una estufa mejorada?</h2>
                    </div>
                    <div class="partner-details">
                        <p>Magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window</p>
                    </div>
                    <div class="submit-area">
                        <a href="#contacto" class="theme-btn-s6"><i class="fi flaticon-like"></i> Solicita una demostración</a>

                    </div>
                    <div class="partner-details">
                        <p>(poder contactar al fabricante más cercano a tu localidad para una asesoría.) </p>
                    </div>

                </div>
                <div class="col col-md-7">
                    <div class="partners-area clearfix">
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/partners/img-1.png') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/partners/img-2.png') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/partners/img-3.png') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/partners/img-4.png') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/partners/img-5.png') }}" alt>
                        </div>
                        <div>
                            <img src="{{ asset('proffer/proffer/assets/images/partners/img-6.png') }}" alt>
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
                        <h2>Historias de Éxito: </h2>
                        <p>Familias que Respiran Mejor.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="testimonials-slider-s2 testimonials-slider-area">
                        <div class="grid">
                            <div class="author">
                                <div class="author-img">
                                    <img src="{{ asset('proffer/proffer/assets/images/testimonials/img-1.jpg') }}" alt>
                                </div>
                                <h5>Familia Martínez </h5>
                                <span>Chiquimula</span>
                            </div>
                            <p>"Antes de usar la estufa mejorada, cocinábamos con fogón abierto, lo que afectaba la salud de mis hijos. Ahora, el humo ya no es un problema y gastamos menos en leña."</p>
                        </div>
                        <div class="grid">
                            <div class="author">
                                <div class="author-img">
                                    <img src="{{ asset('proffer/proffer/assets/images/testimonials/img-2.jpg') }}" alt>
                                </div>
                                <h5>Doña Rosa</h5>
                                <span>Alta Verapaz</span>
                            </div>
                            <p>"Mi estufa mejorada me permite cocinar más rápido y me ayuda a ahorrar dinero para otras necesidades del hogar."</p>
                        </div>
                        {{-- <div class="grid">
                            <div class="author">
                                <div class="author-img">
                                    <img src="assets/images/testimonials/img-1.jpg" alt>
                                </div>
                                <h5>Andre viper</h5>
                                <span>Business man</span>
                            </div>
                            <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end testimoninals-funfact-section -->

    <!-- start about-page-section -->
    <section class="about-page-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3" id="punto">
                        <span>#Puntos de Venta y Distribuidores </span>
                        <h2>¿Dónde puedes obtener una <span>Estufa</span> Mejorada?</h2>
                        {{-- <p>Magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="about-features-grid">
                        <div class="grid">
                            {{-- <div class="icon">
                                <i class="fi flaticon-placeholder"></i>
                            </div> --}}
                            <h3>Chiquimula</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            {{-- <div class="icon">
                                <i class="fi flaticon-placeholder"></i>
                            </div> --}}
                            <h3>Alta Verapaz</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            {{-- <div class="icon">
                                <i class="fi flaticon-placeholder"></i>
                            </div> --}}
                            <h3>Quiche</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            {{-- <div class="icon">
                                <i class="fi flaticon-placeholder"></i>
                            </div> --}}
                            <h3>Huehuetenango</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            {{-- <div class="icon">
                                <i class="fi flaticon-placeholder"></i>
                            </div> --}}
                            <h3>San Marcos</h3>
                            <p>
                                <font color="cd211d"><i class="fi flaticon-placeholder"></i></font> Calle 3 45-34 zona 4
                                <br><font color="cd211d"><i class="fi flaticon-call"></i></font><a href="tel:+50234565432"> +(502) 3456-5432</a>
                                <br><font color="cd211d"><i class="fi flaticon-email"></i></font><a href="mailto:info@respiratranquilo.com"> info@respiratranquilo.com</a>
                            </p>
                        </div>
                        <div class="grid">
                            {{-- <div class="icon">
                                <i class="fi flaticon-placeholder"></i>
                            </div> --}}
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
    <!-- end about-page-section -->

    <!-- start partner-section-s2 -->
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
                        <button type="submit" class="theme-btn-s6"><i class="fi flaticon-like"></i> Solicita Información sobre Crédito</button>

                    </div>
                    {{-- <div class="partner-details">
                        <p>(poder contactar al fabricante más cercano a tu localidad para una asesoría.) </p>
                    </div> --}}

                </div>

            </div>
        </div> <!-- end container -->
    </section>
    <!-- end partner-section-s2 -->

    <!-- start faq-pg-section -->
    <section class="faq-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title-s3">
                        <div class="icon">
                            <i class="fi flaticon-suitcase"></i>
                        </div>
                        <span  id="faq">#FAQ</span>
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
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="true">¿Cuánto cuesta una estufa mejorada? </a>
                            </div>
                            <div id="collapse-1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-2">¿Cómo puedo acceder a los financiamientos?</a>
                            </div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-4">¿Qué modelos de estufas mejoradas existen? </a>
                            </div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-3">¿Dónde puedo encontrar más información sobre cómo utilizar mi estufa mejorada?</a>
                            </div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                </div>
                            </div>
                        </div>

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
                        <h2>"¿Tienes preguntas? </h2>
                        <p>Contáctanos para obtener más información sobre cómo adquirir tu estufa mejorada.</p>
                    </div>
                </div>
                <div class="col col-xs-12">
                    <div class="contact-info-grids">
                        <div class="grid">
                            <i class="fi flaticon-house"></i>
                            <h4>Dirección</h4>
                            <p>Calle 3 45-34 zona 4 Guatemala, Guatemala.</p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-email"></i>
                            <h4>Correo Electronico</h4>
                            <p><a href="mailto:info@respiratranquilo.org">info@respiratranquilo.org</a> <br><a href="mailto:contacto@respiratranquilo.org">contacto@respiratranquilo.org</a></p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-call"></i>
                            <h4>Telefonos</h4>
                            <p><a href="tel:+50234565432"> +(502) 3456-5432</a> <br> <a href="tel:+50234565432"> +(502) 3456-5432</a></p>
                        </div>
                        <div class="grid">
                            <i class="fi flaticon-alarm"></i>
                            <h4>Opening Hours</h4>
                            <p>Lunes - Viernes  <br>9Am - 6PM</p>
                            {{-- <p>Sabado  <br>9Am - 12PM</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-area">
                <div class="row">
                    <div class="col col-md-4">
                        <div class="contact-text">
                            <h3>Escribenos para saber como te podemos ayudar</h3>
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
                                    <button type="submit" class="theme-btn-s6"><i class="fi flaticon-like"></i> Enviar</button>
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

@endsection

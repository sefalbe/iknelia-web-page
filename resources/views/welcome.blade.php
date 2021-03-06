<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{asset('images/favicon.jpg')}}">
        <title>Iknelia</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/fullpage.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}">

        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css')}}">

        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">


    </head>
    <body>
    {{--Modal Correo--}}
    <div class="modal fade bd-example-modal-lg" id="modalCorreo" tabindex="-1" role="document" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-success">
                <div class="row m-3">
                    <div class="col-11">
                        <h5 class="text-white">{{Session::get('Mensaje')}}</h5>
                    </div>
                    <div class="col-1">
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    {{--Modal Mensaje--}}
    <div class="modal fade" id="modalMns" tabindex="-1" role="dialog"aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body preloader-modal">
                    <div class="container" >
                        <div class="row">
                            <div class="col-lg-12 p-0">
                                <form action="{{route('registro')}}" method="POST" >
                                    @csrf
                                    <button type="button" class="text-white close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button> 
                                    <h3>Obten un 10% de descuento en tu primera compra.</h3>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-left mb-0">
                                            <label class="mb-0" for="nombre">Nombre *</label>
                                            <input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
                                        </div>
                                        <div class="form-group col-md-6 text-left mb-0">
                                            <label class="mb-0" for="apellido">Apellido *</label>
                                            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-left mb-0">
                                            <label class="mb-0" for="empresa">Empresa *</label>
                                            <input type="text" name="empresa" class="form-control" placeholder="Nombre de la empresa" required>
                                        </div>
                                        <div class="form-group col-md-6 text-left mb-0">
                                            <label class="mb-0" for="correo">Correo *</label>
                                            <input type="email" name="correo" class="form-control" placeholder="Correo" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 text-left mb-2">
                                            <label class="mb-0" for="telefono">Tel??fono </label> {{--opcional --}}
                                            <input type="tel" name="telefono" class="form-control" placeholder="Tel??fono (opcional)">
                                        </div>
                                    </div> 
                                    <p>
                                        Despues de tu registro, recibe el libro <strong>"Rethinking Hand Safety"</strong> digital totalmente gratis que 
                                        te ayudar?? a mejorar los indicadores de incidentes relacionados con las manos y las mejores promociones
                                        sobre nuestras soluciones para el hogar y la industria. 
                                    </p>
                                    <div class="text-right mt-2">
                                        <div class="col-lg-12 p-0 ">
                                            <button type="button" class="btn-modal mx-1" id="cerrarModalAddCompetencia" title="regresar" data-dismiss="modal" aria-label="Close">
                                                Cancelar  
                                            </button>
                                            <button class="g-recaptcha btn-modal my-0" 
                                                    {{--data-sitekey="reCAPTCHA_site_key"
                                                    data-callback='onSubmit' 
                                                    data-action='submit'--}} type="submit">Registrar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
            <div id="video">
                <div class="preloader">
                    <div class="preloader-bounce">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
        
                <header id="header">
                    <div class="container-fluid">
                        <div class="navbar">
                            <div class="row">
                                <div class="col-2">
                                    <a href="{{route('init')}}" id="logo" title="Elegance by TemplateMo" class="">
                                        {{--Iknelia--}}
                                        <img src="{{asset('images/logo-iknelia_b.png')}}" class="img-fluid" style="max-width: 60%; height: auto;" alt="Responsive image"> 
                                    </a>
                                </div>
                                <div class="col-10">
                                    <div class="navigation-row navbar-text">
                                        <nav id="navigation">
                                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                                            <div class="nav-box navbar-collapse">
                                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Inicio</a></li>
                                                    <li data-menuanchor="slide02"><a href="#slide02">Nosotros</a></li>
                                                    <li data-menuanchor="slide03"><a href="#slide03">Soluciones Industriales</a></li>
                                                    <li data-menuanchor="slide04"><a href="#slide04">Soluciones Residenciales</a></li>
                                                    <li data-menuanchor="slide05"><a href="#slide05">Contactanos</a></li>
                                                    {{--<li data-menuanchor="slide06"><a href="#slide06">Registro</a></li>--}}
                                                    <li><a href="{{route('login')}}">Login</a></li>
                                                    {{--<li data-menuanchor="slide05"><a href="#slide05">Filosoria</a></li>
                                                    <li data-menuanchor="slide06"><a href="#slide06">My Work</a></li>
                                                    <li data-menuanchor="slide07"><a href="#slide07">Testimonials</a></li>--}}
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </header>
        
                <video autoplay muted loop id="myVideo">
                  <source src="images/video-bg.mp4" type="video/mp4">
                </video>
                {{-- Bienvenido --}}
                <div id="fullpage" class="fullpage-default">
        
                    <div class="section animated-row" data-section="slide01">
                        <div class="section-inner">
                            <div class="welcome-box">
                                <span class="welcome-first animate" data-animate="fadeInUp">Hola, bienvenido a</span>
                                
                                <img src="{{asset('images/logo-iknelia_b.png')}}" class="img-fluid" style="max-width: 40%; height: auto;" alt="Responsive image">         
                                <span class="welcome-first animate" data-animate="fadeInUp">"El que no vive para servir, no sirve para vivir"</span>
                                <h4 class="animate bg-titulo" data-animate="fadeInUp">Soluciones Integrales para la Industria y Residencia</h4>
                                <p class="animate" data-animate="fadeInUp">Desde nuestra fundaci??n en 2021, nuestro enfoque ha sido brindar??soporte que necesita nuestro cliente de manera 
                                                                            personal, ofreciendo soluciones integrales para la Industria y Residencia. Para ello??valoramos, 
                                                                            entendemos y superamos las expectativas de nuestros clientes.</p>
                                <div class="scroll-down next-section animate data-animate="fadeInUp""><img src="images/mouse-scroll.png" alt=""><span>Scroll</span></div>
                            </div>
                        </div>
                    </div>
                    {{--Nosotros--}}
                    <div class="section animated-row" data-section="slide02">
                        <div class="section-inner">
                            <div class="about-section">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 wide-col-laptop">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about-contentbox">
                                                    <div class="animate" data-animate="fadeInUp">
                                                        <span>Nosotros</span>
                                                        <h2 class="bg-titulo">?? Que nos define ?</h2>
                                                        <p>En Iknelia tenemos dos prioridades: <strong>calidad</strong>  y <strong>servicio</strong>. Utilizamos nuestro conocimiento y experiencia 
                                                            para adelantarnos a las necesidades de nuestros clientes, lo que nos distingue de los dem??s. Iknelia se conforma de los 6 pilares. </p>
                                                    </div>
                                                    <div class="facts-list owl-carousel">
                                                        <div class="item animate" data-animate="fadeInUp">
                                                            <div class="counter-box">
                                                                <i class="fa fa-shield counter-icon" aria-hidden="true"></i><span class="count-number">1</span> SEGURIDAD
                                                            </div>
                                                        </div>
                                                        <div class="item animate" data-animate="fadeInUp">
                                                            <div class="counter-box">
                                                                <i class="fa fa-certificate counter-icon" aria-hidden="true"></i><span class="count-number">2</span> CALIDAD
                                                            </div>
                                                        </div>
                                                        <div class="item animate" data-animate="fadeInUp">
                                                            <div class="counter-box">
                                                                <i class="fa fa-line-chart counter-icon" aria-hidden="true"></i><span class="count-number">3</span> PRODUCTIVIDAD
                                                            </div>
                                                        </div>
                                                        <div class="item animate" data-animate="fadeInUp">
                                                            <div class="counter-box">
                                                                <i class="fa fa-refresh counter-icon" aria-hidden="true"></i><span class="count-number">4</span> MEJORA CONTINUA
                                                            </div>
                                                        </div>
                                                        <div class="item animate" data-animate="fadeInUp">
                                                            <div class="counter-box">
                                                                <i class="fa fa-leaf counter-icon" aria-hidden="true"></i><span class="count-number">5</span> MEDIO AMBIENTE
                                                            </div>
                                                        </div>
                                                        <div class="item animate" data-animate="fadeInUp">
                                                            <div class="counter-box">
                                                                <i class="fa fa-usd counter-icon" aria-hidden="true"></i><span class="count-number">6</span> MEJORES COSTOS
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <figure class="about-img animate" data-animate="fadeInUp"><img src="images/profile-girl.jpeg" class="rounded" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{--Soluciones Industriales--}}
                    <div class="section animated-row" data-section="slide03">
                        <div class="section-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-8 wide-col-laptop">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <span>SOLUCIONES</span>
                                        <h2 class="bg-titulo">INDUSTRIALES</h2>
                                    </div>
                                    
                                    <div class="gallery-section">
                                        <div class="gallery-list owl-carousel">
                                            @foreach ($industriales as $item)
                                                <div class="item animate text-secondary" data-animate="fadeInUp">
                                                    <div class="portfolio-item">
                                                        <div class="thumb">
                                                            <img src={{asset('/storage/images/productos/'.$item->url_imagen)}} alt=""> {{--"images/item-1.jpg" --}}
                                                        </div>
                                                        <div class="thumb-inner animate" data-animate="fadeInUp">
                                                            <h6>{{$item->nombrep}}</h6>
                                                            <h4>{{$item->nombre}}</h4>
                                                            <p>{{$item->descripcion}}</p>
                                                            <p><strong class="text-secondary"> Tiempo de entrega:</strong>{{$item->tiempo_entrega}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Soluciones Residenciales--}}
                    <div class="section animated-row" data-section="slide03">
                        <div class="section-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-8 wide-col-laptop">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <span>SOLUCIONES</span>
                                        <h2 class="bg-titulo">RESIDENCIALES</h2>
                                    </div>
                                    
                                    <div class="gallery-section">
                                        <div class="gallery-list owl-carousel">
                                            @foreach ($residenciales as $item)
                                                <div class="item animate text-secondary" data-animate="fadeInUp">
                                                    <div class="portfolio-item">
                                                        <div class="thumb">
                                                            <img src={{asset('storage/images/productos/'.$item->url_imagen)}} alt="">
                                                        </div>
                                                        <div class="thumb-inner animate" data-animate="fadeInUp">
                                                            <h6>{{$item->nombrep}}</h6>
                                                            <h4>{{$item->nombre}}</h4>
                                                            <p>{{$item->descripcion}}</p>
                                                            <p><strong class="text-secondary"> Tiempo de entrega:</strong>{{$item->tiempo_entrega}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
        
                    {{--Contactanos--}}
                    <div class="section animated-row" data-section="slide05">
                        <div class="section-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-7 wide-col-laptop">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <h2 class="bg-titulo">Cont??ctanos</h2>
                                    </div>
                                    <div class="contact-section">
                                        <div class="row">
                                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                                <div class="contact-box">
                                                    <div class="contact-row">
                                                        <i class="fa fa-map-marker"></i> Paseo Saval #4031, Puerta Verona, CP. 76235
                                                    </div>
                                                    <div class="contact-row">
                                                        <i class="fa fa-phone"></i> 442 187 9448
                                                    </div>
                                                    <div class="contact-row">
                                                        <i class="fa fa-envelope"></i>leonel_rodriguez@iknelia-soluciones.com
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                                <div class="contact-row">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.941963103793!2d-100.49752985405583!3d20.631222307125608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35107e24e4e37%3A0xd5c210a146b234ae!2sPaseo%20Saval%204031!5e0!3m2!1ses-419!2smx!4v1623512971125!5m2!1ses-419!2smx" width="450" height="270" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--Registro--}}{{--
                    <div class="section animated-row" data-section="slide06">
                        <div class="section-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-7 wide-col-laptop">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <h2>Registro</h2>
                                    </div>
                                    <div class="contact-section">
                                        <div class="row">
                                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                                <div class="contact-box">
                                                    <div class="contact-row p-1">

                                                        <form id="ajax-contact" class="col-12" method="post" action="#">
                                                            <div class="input-field ">
                                                                <input type="text" class="form-control m-1" name="name" id="name" required placeholder="Nombre">
                                                                <input type="text" class="form-control m-1" name="apellido" id="Apellido" required placeholder="Apellido">
                                                                <input type="email" class="form-control m-1" name="email" id="Correo" required placeholder="Correo">
                                                                <input type="password" class="form-control m-1" name="email" id="Correo" required placeholder="Contrase??a">
                                                                <input type="password" class="form-control m-1" name="email" id="Correo" required placeholder="Confirmar contrase??a">
                                                            </div>
                                                            {{--
                                                                <div class="form-group row">
                                                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                        @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                                    <div class="col-md-6">
                                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row mb-0">
                                                                    <div class="col-md-6 offset-md-4">
                                                                        <button type="submit" class="btn btn-primary">
                                                                            {{ __('Register') }}
                                                                        </button>
                                                                    </div>
                                                                </div>    
                                                                --}}{{--
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                                <div class="contact-box">
                                                    <div class="contact-row">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                              Aviso De privacidad
                                                            </label>
                                                        </div>
                                                         <button class="btn" type="button" onClick="">Registrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
        
                <div id="social-icons">
                    <div class="text-right">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/IkneliaSolucionesIntegrales" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=4421879448" title="Whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>  
        
            <script src="{{ asset('js/jquery.js')}}"></script>
        
            <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        
            <script src="{{ asset('js/fullpage.min.js')}}"></script>
        
            <script src="{{ asset('js/scrolloverflow.js')}}"></script>
        
            <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        
            <script src="{{ asset('js/jquery.inview.min.js')}}"></script>
        
            <script src="{{ asset('js/form.js')}}"></script>
        
            <script src="{{ asset('js/custom.js')}}"></script>

            {{--<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>--}}

            {{--Script al inicializar y cargar el documento --}}
            <script>
                document.addEventListener("DOMContentLoaded", function(event) { 
                    @if(Session::has('Mensaje'))
                        showModalCorreo(); 
                    @else
                        showModalMns();
                    @endif
                });
            </script>

            {{--Script para abrir modal  Mensaje libro--}}
            <script>
                function showModalMns(){
                    $('#modalMns').modal('show');
                }
            </script>
            {{--Script para abrir modal  Mensaje libro--}}
            <script>
                function showModalCorreo(){
                    $('#modalCorreo').modal('show');
                }
            </script>

            {{--Script para redireigir al registro--}}
            <script>
                function registrar(){
                    window.location.href = "{{ route('register') }}";
                }
            </script> 

            {{--RECAPTCHA --}}
            <script>
                function onSubmit(token) {
                  document.getElementById("demo-form").submit();
                }
              </script>
    </div>

    </body>
</html>

{{-- 
    <div class="col-md-6 animate" data-animate="fadeInUp">
        <span>Reg??strate y obt??n un producto gratis</span>
            <button class="btn" type="button" onClick="registrar();">Registrar</button>
        <form id="ajax-contact" method="post" action="#">
            <div class="input-field">
                <input type="text" class="form-control" name="name" id="name" required placeholder="Nombre">
            </div>
            <div class="input-field">
                <input type="email" class="form-control" name="email" id="email" required placeholder="Email">
            </div>
            <div class="input-field">
                <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
            </div>
            
        </form>
        <div id="form-messages" class="mt-3"></div>
    </div>--}}

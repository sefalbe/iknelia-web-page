<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        <title>Iknelia</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/fullpage.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}">

        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

        <link rel="stylesheet" href="{{ asset('css/templatemo-style.css')}}">

        <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">


        <!-- Fonts -->
        {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        {{--<!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>--}}


    </head>
    <body>
        {{--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            {{--<div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>--}}
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
                            <a href="#" id="logo" title="Elegance by TemplateMo">
                                Iknelia
                            </a>
                            <div class="navigation-row">
                                <nav id="navigation">
                                    <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                                    <div class="nav-box navbar-collapse">
                                        <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                            <li data-menuanchor="slide01" class="active"><a href="#slide01">Inicio</a></li>
                                            <li data-menuanchor="slide02"><a href="#slide02">Nosotros</a></li>
                                            <li data-menuanchor="slide03"><a href="#slide03">Productos</a></li>
                                            <li data-menuanchor="slide04"><a href="#slide04">Contactanos</a></li>
                                            <li data-menuanchor="slide05"><a href="#slide05">Registro</a></li>
                                            <li><a href="{{-- route('login') --}}">Login</a></li>
                                            {{--<li data-menuanchor="slide04"><a href="#slide04">Filosoria</a></li>
                                            <li data-menuanchor="slide05"><a href="#slide05">My Work</a></li>
                                            <li data-menuanchor="slide06"><a href="#slide06">Testimonials</a></li>--}}
                                            
                                        </ul>
                                    </div>
                                </nav>
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
                                <h1 class="welcome-title animate" data-animate="fadeInUp">Iknelia</h1>
                                <h4 class="animate" data-animate="fadeInUp">Soluciones y Suministros Integrales para la Industria y Residencia</h4>
                                <p class="animate" data-animate="fadeInUp">Desde nuestra fundación en 2021, nuestro enfoque ha sido brindar soporte que necesita nuestro cliente de manera 
                                                                            personal, ofreciendo soluciones y suministros integrales para la Industria y Residencia. Para ello valoramos, 
                                                                            entendemos y superamos las expectativas de nuestros cliente.</p>
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
                                                        <h2>¿ Que nos define ?</h2>
                                                        <p>En Iknelia tenemos dos prioridades: <strong>calidad</strong>  y <strong>servicio</strong>. Utilizamos nuestro conocimiento y experiencia 
                                                            para adelantarnos a las necesidades de nuestros clientes, lo que nos distingue de los demás. Iknelia se conforma de los 6 pilares. </p>
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
                                                <figure class="about-img animate" data-animate="fadeInUp"><img src="images/profile-girl.jpg" class="rounded" alt=""></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{--Productos--}}
                    <div class="section animated-row" data-section="slide03">
                        <div class="section-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-8 wide-col-laptop">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <span>NUESTROS</span>
                                        <h2>PRODUCTOS</h2>
                                    </div>
                                    
                                    <div class="gallery-section">
                                        <div class="gallery-list owl-carousel">
                                            @foreach ($productos as $item)
                                                <div class="item animate" data-animate="fadeInUp">
                                                    <div class="portfolio-item">
                                                        <div class="thumb">
                                                            <img src={{$item->url_imagen}} alt=""> {{--"images/item-1.jpg" --}}
                                                        </div>
                                                        <div class="thumb-inner animate" data-animate="fadeInUp">
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
                    <div class="section animated-row" data-section="slide04">
                        <div class="section-inner">
                            <div class="row justify-content-center">
                                <div class="col-md-7 wide-col-laptop">
                                    <div class="title-block animate" data-animate="fadeInUp">
                                        <h2>Contáctanos</h2>
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
                    {{--Registro--}}
                    <div class="section animated-row" data-section="slide05">
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
                                                                <input type="password" class="form-control m-1" name="email" id="Correo" required placeholder="Contraseña">
                                                                <input type="password" class="form-control m-1" name="email" id="Correo" required placeholder="Confirmar contraseña">
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
                                                                --}}
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
                    </div>
                </div>
        
                <div id="social-icons">
                    <div class="text-right">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/IkneliaSolucionesIndustriales" title="Facebook"><i class="fa fa-facebook"></i></a></li>
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

            <script>
                function registrar(){
                    window.location.href = "{{ route('register') }}";
                }
            </script>
        </div>
    </body>
</html>

{{-- 
    <div class="col-md-6 animate" data-animate="fadeInUp">
        <span>Regístrate y obtén un producto gratis</span>
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
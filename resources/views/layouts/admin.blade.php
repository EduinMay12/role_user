<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Soporte Tecnico | UTP') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    </head>

    <body class="{{ $class ?? '' }}">

        <div class="spinner"></div>

        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth

        <div class="main-content">
            @include('layouts.navbars.navbar')
            <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
            <!-- Mask -->
                <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->
                <div class="container-fluid d-flex align-items-center">
                    <div class="row">
                        <div class="col-md-12 {{ $class ?? '' }}"><br>
                            <h1 class="display-2 text-white">Holaa mundo</h1>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt--7">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('tecnico') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/people.gif') }}" alt="Card image cap">
                                        <div class="card-body" style="background-color: #99e39c;">
                                        <h5 class="card-title">Roles y Servicios</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('#') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/1.gif') }}" alt="Card image cap">
                                        <div class="card-body" style="background-color: #eee569;">
                                        <h5 class="card-title">¿Como usar el sistema?</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('servicio') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/it-team-working.gif') }}" alt="servicios" >
                                        <div class="card-body" style="background-color: #f4a532">
                                        <h5 class="card-title">Servicios de Soporte Tecnico</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('#') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/14.gif') }}" alt="Card image cap">
                                        <div class="card-body" style="background-color: #92a0f1;">
                                        <h5 class="card-title">Crea Tu Servicio</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('home/commentslist') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/comp_2_4.gif') }}" alt="Card image cap">
                                        <div class="card-body" style="background-color: #e986e5;">
                                        <h5 class="card-title">Comentarios y Quejas</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('#') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/webapps2.gif') }}" alt="Card image cap">
                                        <div class="card-body" style="background-color: #ff9c7b;">
                                        <h5 class="card-title">Contactanos</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <br/>

                                <div class="card-body"><a href="{{ url('commentslist') }}">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ url('./img/video.gif') }}" alt="Card image cap">
                                        <div class="card-body" style="background-color: #fe531d;">
                                        <h5 class="card-title">Ayuda.</h5>
                                        </div>
                                    </div>
                                </div></a>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        @guest()
            @include('layouts.footers.guest')
        @endguest

        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        @stack('js')

        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>

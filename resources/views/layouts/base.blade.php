<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uniqlass</title>
        <link rel="icon" href="{{ asset('img/uniqlass.png') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
        <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=62b03a1388a849001a3893d6&product=inline-share-buttons' async='async'></script>
    </head>
    <body>
        <div class="bg-white">
            <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img class="" src="{{ asset('img/uniqlass_no background.png') }}" alt="" height="40">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-lg-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/mitra">Mitra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/event">Event</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/artikel">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
                @yield('content')
            </div>
        </div>
        <footer>
            <div class="footer py-3">
                <div class="container">
                    <div class="row d-flex justify-content-between pt-4">
                        <div class="col-md-3 pb-3">
                            <img src="{{ asset('img/uniqlass_logo putih.png') }}" alt="" height="70">
                        </div>
                        <div class="col-md-4 text-white pb-3 ml-3">
                            <div class="row">
                                <h5 class="kontak">Kontak Kami</h5>
                            </div>
                            <div class="row">
                                <p>EJSC Bakorwil Madiun<br>
                                Jl. Jawa No.23, Kartoharjo, Kec.Mangunharjo, Kota Madiun, Jawa Timur, Indonesia 63122</p>
                            </div>
                            <div class="row">
                                <span class="material-icons">email</span>
                                <p class="ml-1">adm.uniqlass@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-3 text-white pb-3 ml-3">
                            <div class="row">
                                <h5 class="kontak">Temukan Kami</h5>
                            </div>
                            <div class="row">
                                <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/uniqlass" target="_blank">
                                    <span class="fa fa-instagram" style="color: white;"></span>
                                </a>
                                <a class="btn btn-social-icon btn-youtube" href="https://www.youtube.com/channel/UCc_eiFvNvX8YNk3XGw4QKKA" target="_blank">
                                    <span class="fa fa-youtube" style="color: white;"></span>
                                </a>
                                <a class="btn btn-social-icon btn-spotify" href="https://open.spotify.com/show/4MPqkvizIGammCEsmUrWnp" target="_blank">
                                    <span class="fa fa-spotify" style="color: white;"></span>
                                </a>
                                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/uniqlass.id" target="_blank">
                                    <span class="fa fa-facebook" style="color: white;"></span>
                                </a>
                                <a class="btn btn-social-icon btn-whatsapp" href="https://wa.me/6282340576107" target="_blank">
                                    <span class="fa fa-whatsapp" style="color: white;"></span>
                                </a>
                                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/company/uniqlass" target="_blank">
                                    <span class="fa fa-linkedin" style="color: white;"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cr">
                <div class="d-flex justify-content-center">
                    <p class="text-white mt-3">Copyright 2022 @ Uniqlass | All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </body>
</html>

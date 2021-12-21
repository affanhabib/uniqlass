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

        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="bg-white">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center logo">
                    <img src="{{ asset('img/uniqlass_no background.png') }}" alt="" height="40">
                </div>
                <div class="row pb-5 my-5">
                    <div class="col-md-6 carousel py-5">
                        <h6 class="name">UNIQLASS</h6>
                        <h1 class="title pt-1 pb-3">Maksimalkan Potensimu, Daftarkan Kelasmu Sekarang!</h1>
                        <p class="text-secondary pb-5">Jika kamu adalah para pelatih, instruktur, maupun mentor, Uniqlass akan membantu kamu untuk menjangkau pasar yang lebih luas</p>
                        <button type="button" class="btn btn-success">Bergabung bersama Kami!</button>
                    </div>
                    <div class="col-md-6">
                        <!-- <img src="{{ asset('img/ornamen.png') }}" alt="" height="20%"> -->
                    </div>
                </div>
            </div>
            <div class="bg-light my-5">
                <div class="container py-5">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('img/uniqlass_no background.png') }}" alt="" height="90">
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="text-center col-10 desc my-5"><span style="color: #16A085;">Uniqlass</span> adalah sebuah platform yang menjembatani peserta dengan pemilik kelas melalui fitur yang akan datang yaitu fitur booking kelas secara online. <span style="color: #16A085;">Uniqlass</span> juga menyediakan wadah untuk peningkatan skill, healing, maupun socializing melalui event tematik dan berbagai jenis kelas yang tersedia</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-success">Tentang Uniqlass</button>
                    </div>
                </div>
            </div>
            <div class="pb-5">
                <div class="container pt-2 pb-5">
                    <div class="d-flex justify-content-center">
                        <h2 class="mitra">Mitra Kami</h2>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/mitra/rumah_bugar_liangfa.jpg') }}" height="150">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/mitra/logo lkp L.png') }}" height="150">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/mitra/ifi.jpg') }}" height="150">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/mitra/crescendo_musik.jpg') }}" height="150">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('img/mitra/chord_music_course.jpg') }}" height="150">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-light py-5">
                <div class="container pt-2 pb-5">
                    <div class="d-flex justify-content-center">
                        <h4 class="sosmed pb-3">Kunjungi Instagram Kami</h4>
                    </div>
                    @yield('insta')
                </div>
            </div>
            <div class="py-5">
                <div class="container pt-2 pb-5">
                    <div class="d-flex justify-content-center">
                        <h4 class="sosmed pb-3">Lihat Juga Event Kami yang Telah Dilaksanakan</h4>
                    </div>
                    @yield('yt')
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
        </div>
        <script>
            $('#carouselExampleIndicators').carousel({
                interval: 3000,
                cycle: true
            });
        </script>
    </body>
</html>

@extends('layouts.base')

@section('content')
<div>
    <div class="banner d-flex align-items-center">
        <div class="container">
            <h1 class="title text-white">Tentang Kami</h1>
        </div>
    </div>
    <div class="my-5">
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <h1 class="mitra">Siapa Kami?</h1>
            </div>
            <div class="desc my-5">
                <div class="row d-flex justify-content-center">
                    <p class="text-center col-10"><span style="color: #16A085;">Uniqlass</span>merupakan platform rintisan yang bergerak di bidang kelas dan pelatihan akademik dan non-akademik. Platform <span style="color: #16A085;">Uniqlass</span> bertujuan untuk membantu menjembatani mitra pemilik kelas atau pelatihan dengan pemilik gedung/ruangan yang dapat disewa untuk pelaksanaan kelas dan pelatihan dengan biaya terjangkau.</p>
                    <p class="text-center col-10">Saat ini, <span style="color: #16A085;">Uniqlass</span> berfokus untuk meningkatkan jaringan mitra khususnya yang berlokasi di Kabupaten dan Kota Madiun. Serta sedang mengembangkan website dengan fitur booking kelas/pelatihan secara online; booking ruang; dan fitur pendaftaran event tematik/trial class.</p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/uniqlass_no background.png') }}" alt="" height="100">
            </div>
        </div>
    </div>
    <div class="bg-light py-5">
        <div class="container">
            <div class="d-flex justify-content-center pb-3">
                <h1 class="mitra">Visi dan Misi Uniqlass</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mitra">Visi</h2>
                            <p class="card-text visi">Membantu meningkatkan kapasitas dan gaya hidup sehat masyarakat melalui penyediaan layanan cari dan pesan berbagai jenis kelas secara online serta turut meningkatkan kesejahteraan pemilik kelas (tenaga pendidik Indonesia baik guru, pelatih, instruktur maupun mentor pada bidang akademik dan/atau non akademik) di Indonesia kedepannya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mitra">Misi</h2>
                            <div class="card-text">
                                <ol>
                                    <li>Berorientasi pada kebutuhan konsumen dan mitra</li>
                                    <li>Membantu konsumen agar dapat lebih menikmati hidup melalui penyediaan berbagai jenis kelas yang dapat dengan mudah ditemukan dan diikuti guna meningkatkan kapasitas diri, kesehatan mental dan fisik</li>
                                    <li>Membantu pemilik kelas/pelatih di Indonesia untuk dapat menyalurkan ilmu yang dimilikinya dan meningkatkan kesejahteraan hidupnya</li>
                                    <li>Mampu beradaptasi dan berinovasi dalam berbisnis yang memungkinkan untuk terus bertumbuh dan meraih masa depan yang lebih baik</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container pb-5">
            <div class="d-flex justify-content-center pb-5">
                <h1 class="mitra">Tim Uniqlass</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 my-3">
                    <div class="card tim">
                        <img src="{{ asset('img/Tim/mega.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title title">Galuh Mega Kurnia</h3>
                            <p class="card-text">Chief Executive Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card tim">
                        <img src="{{ asset('img/Tim/alfina.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title title">Alfina Rossa</h3>
                            <p class="card-text">Chief Marketing Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-3">
                    <div class="card tim">
                        <img src="{{ asset('img/Tim/Affan.jpg') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title title">Affan Ahsanul Habib</h3>
                            <p class="card-text">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

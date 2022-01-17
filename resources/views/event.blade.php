@extends('layouts.base')

@section('content')
<div class="pb-5">
    <div class="container">
        <img src="{{ asset('img/event/WORKSHOP BAHASA KOREA UNTUK PEMULA.png') }}" class="img-fluid" alt="...">
        <div class="pt-3">
            <h4 class="text-muted">Uniqevent 2.0</h4>
            <h1 class="judul">Workshop Bahasa Korea untuk Pemula</h1>
        </div>
        <div class="py-2 pl-3 mitra">
            <div class="row py-2">
                <span class="material-icons-outlined">calendar_today</span>
                <p class="pl-3">11 - 13 Februari 2022</p>
            </div>
            <div class="row">
                <span class="material-icons-outlined">watch_later</span>
                <p class="pl-3">19.00 - 20.30 WIB</p>
            </div>
            <div class="row pt-2">
                <span class="material-icons-outlined">person</span>
                <p class="pl-3">Yusuf Ari Saktianto</p>
            </div>
            <div class="row py-2">
                <span class="material-icons-outlined">location_on</span>
                <p class="pl-3">Live on Zoom</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="pt-2 pb-5">
                    <h4 class="judul">Materi</h4>
                    <div class="col">
                        <p>Jumat, 11 Februari 2022:</p>
                        <ol>
                            <li>
                                <p>Membaca Hangeul</p>
                            </li>
                            <li>
                                <p>Menulis Hangeul</p>
                            </li>
                        </ol>
                        <p>Sabtu, 12 Februari 2022:</p>
                        <ol>
                            <li>
                                <p>Kosa Kata Bahasa Korea</p>
                            </li>
                            <li>
                                <p>Menyusun Kalimat Bahasa Korea</p>
                            </li>
                        </ol>
                        <p>Minggu, 13 Februari 2022:</p>
                        <ol>
                            <li>
                                <p>Percakapan Sehari - Hari</p>
                            </li>
                            <li>
                                <p>Percakapan di Dunia KPop</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="py-2">
                    <h4 class="judul">Benefit</h4>
                    <ol>
                        <li>
                            <p>Sertifikat</p>
                        </li>
                        <li>
                            <p>Modul</p>
                        </li>
                        <li>
                            <p>Free Printable Study Planner Uniqlass</p>
                        </li>
                    </ol>
                </div>
                <div class="pt-2">
                    <h5 class="judul">HTM:</h5>
                    <p>Rp20.000/pertemuan</p>
                    <h5 class="judul">Paket 3 Pertemuan:</h5>
                    <p>Rp50.000</p>
                </div>
            </div>
        </div>
        <div class="row pl-3">
            <a type="button" class="btn btn-success" href="http://tiny.cc/uniqevent2" target="_blank">Daftar Event</a>
            <a type="button" class="btn btn-outline-success ml-3" href="http://wa.me/6282340576107 " target="_blank">Hubungi Kami</a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.base')

@section('content')
<div class="pb-5">
    <div class="container">
        <img src="{{ asset('img/event/Poster terbaru Uniqevent 4.0.png') }}" class="img-fluid" alt="...">
        <div class="pt-3">
            <h4 class="text-muted">Uniqevent 4.0</h4>
            <h1 class="judul">MINDFULNESS SESSION : FINDING YOUR SELF</h1>
        </div>
        <div class="py-2 pl-3 mitra">
            <div class="row py-2">
                <span class="material-icons-outlined">calendar_today</span>
                <p class="pl-3">Sabtu, 26 Maret 2022</p>
            </div>
            <div class="row">
                <span class="material-icons-outlined">watch_later</span>
                <p class="pl-3">15.00 - Selesai WIB</p>
            </div>
            <div class="row pt-2">
                <span class="material-icons-outlined">person</span>
                <p class="pl-3">Pak Bobby Wibowo</p>
            </div>
            <div class="row py-2">
                <span class="material-icons-outlined">location_on</span>
                <p class="pl-3">Live on Zoom</p>
            </div>
        </div>
        <div class="row pl-3">
            <a type="button" class="btn btn-success" href="http://tiny.cc/uniqevent4" target="_blank">Daftar Event</a>
            <a type="button" class="btn btn-outline-success ml-3" href="http://wa.me/6282340576107 " target="_blank">Hubungi Kami</a>
        </div>
    </div>
</div>
@endsection

@extends('layouts.base')

@section('content')
<div class="pb-5">
    <div class="container">
        <img src="{{ asset('img/event/UNIQEVENT 3.0.png') }}" class="img-fluid" alt="...">
        <div class="pt-3">
            <h4 class="text-muted">Uniqevent 3.0</h4>
            <h1 class="judul">Mindfulness Session</h1>
        </div>
        <div class="py-2 pl-3 mitra">
            <div class="row py-2">
                <span class="material-icons-outlined">calendar_today</span>
                <p class="pl-3">19 Februari 2022</p>
            </div>
            <div class="row">
                <span class="material-icons-outlined">watch_later</span>
                <p class="pl-3">15.00 - 17.00 WIB</p>
            </div>
            <div class="row pt-2">
                <span class="material-icons-outlined">person</span>
                <p class="pl-3">Bobby Wibowo</p>
            </div>
            <div class="row py-2">
                <span class="material-icons-outlined">location_on</span>
                <p class="pl-3">Meeting Room CUN Motor Madiun (Jl. Jendral Urip Sumoharjo No 63, Mangunharjo, Madiun)</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="py-2">
                    <h4 class="judul">Benefit</h4>
                    <ol>
                        <li>
                            <p>Practical Knowledge "Mindfulness to Reduce Stress and Improve Productivity"</p>
                        </li>
                        <li>
                            <p>Konsumsi</p>
                        </li>
                        <li>
                            <p>Disediakan Matras</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row pl-3">
            <a type="button" class="btn btn-success" href="http://tiny.cc/uniqevent3" target="_blank">Daftar Event</a>
            <a type="button" class="btn btn-outline-success ml-3" href="http://wa.me/6282340576107 " target="_blank">Hubungi Kami</a>
        </div>
    </div>
</div>
@endsection

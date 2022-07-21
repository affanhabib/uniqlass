@extends('layouts.base')

@section('title', $event->judul_event)

@section('content')
<div class="pb-5">
    <div class="container">
        @if($event->tanggal_berakhir < date('Y-m-d'))
        <img src="{{ asset('img/public/poster/') }}/{{ $event->poster }}" class="img-fluid eventEnd" alt="...">
        @else
        <img src="{{ asset('img/public/poster/') }}/{{ $event->poster }}" class="img-fluid" alt="...">
        @endif
        <div class="pt-3">
            <h4 class="text-muted">{{ $event->program }} {{ $event->subprogram }}</h4>
            <h1 class="judul">{{ $event->judul_event }}</h1>
        </div>
        <div class="py-2 pl-3 mitra">
            <div class="row py-2">
                <span class="material-icons-outlined">calendar_today</span>
                @if ($event->tanggal_mulai != $event->tanggal_berakhir)
                <p class="pl-3">{{ date('l, d F Y', strtotime($event->tanggal_mulai)) }} - {{ date('l, d F Y', strtotime($event->tanggal_berakhir))}}</p>
                @else
                <p class="pl-3">{{ date('l, d F Y', strtotime($event->tanggal_mulai)) }}</p>
                @endif
            </div>
            <div class="row">
                <span class="material-icons-outlined">watch_later</span>
                <p class="pl-3">{{ date('h:i', strtotime($event->waktu)) }} - Selesai WIB</p>
            </div>
            <div class="row pt-2">
                <span class="material-icons-outlined">person</span>
                <p class="pl-3">{!! $event->narasumber !!}</p>
            </div>
            <div class="row py-2">
                <span class="material-icons-outlined">location_on</span>
                <p class="pl-3">{{ $event->lokasi }}</p>
            </div>
        </div>
        <div class="pt-3">
            {!! $event->deskripsi !!}
        </div>
        <div class="row pl-3">
            @if($event->tanggal_berakhir < date('Y-m-d'))
            <a type="button" class="btn btn-success" disabled target="_blank">Daftar Event</a>
            @else
            <a type="button" class="btn btn-success" href="{{ 'http://$event->link' }}" target="_blank">Daftar Event</a>
            @endif
            <a type="button" class="btn btn-outline-success ml-3" href="http://wa.me/6282340576107 " target="_blank">Hubungi Kami</a>
        </div>
        <div class="row pt-5">
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </div>
</div>
@endsection

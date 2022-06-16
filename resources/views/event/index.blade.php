@extends('layouts.base')

@section('content')
<div>
    <div class="banner d-flex align-items-center">
        <div class="container">
            <h1 class="title text-white">Event Uniqlass</h1>
        </div>
    </div>
    <div class="container my-5">
        @foreach ($event as $evt)
        @if($evt->tanggal_berakhir < date('Y-m-d'))
        <div class="card mb-4 eventEnd" style="max-width: 750px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('img/public/poster/') }}/{{ $evt->poster }}" alt="..." style="max-width: 200px; border-bottom-left-radius: 1em; border-top-left-radius: 1em;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evt->judul_event }}</h5>
                        <span class="card-text">
                            @if (strlen($evt->deskripsi) > 100)
                                {!! $evt->deskripsi = substr($evt->deskripsi, 0, 97) . '...';
                                $evt->deskripsi !!}
                            @else
                                {!! $evt->deskripsi !!}
                            @endif
                        </span>
                        <p class="card-text"><span class="badge badge-danger">Event berakhir</span><br><small class="text-muted">Last updated {{ date('l, d F Y', strtotime($evt->updated_at)) }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="card mb-4" style="max-width: 750px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('img/public/poster/') }}/{{ $evt->poster }}" alt="..." style="max-width: 200px; border-bottom-left-radius: 1em; border-top-left-radius: 1em;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $evt->judul_event }}</h5>
                        <span class="card-text">
                            @if (strlen($evt->deskripsi) > 100)
                                {!! $evt->deskripsi = substr($evt->deskripsi, 0, 97) . '...';
                                $evt->deskripsi !!}
                            @else
                                {!! $evt->deskripsi !!}
                            @endif
                        </span>
                        <p class="card-text"><a href="{{ route('event.show', $evt->id) }}">Selengkapnya</a><br><small class="text-muted">Last updated {{ date('l, d F Y', strtotime($evt->updated_at)) }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
@endsection
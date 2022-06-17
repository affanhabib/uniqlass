@extends('layouts.base')

@section('content')
<div>
    <div class="banner d-flex align-items-center">
        <div class="container">
            <h1 class="title text-white">Artikel Uniqlass</h1>
        </div>
    </div>
    <div class="container my-5">
        @foreach ($artikel as $art)
        <div class="card mb-4" style="max-width: 750px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ asset('img/public/header/') }}/{{ $art->header }}" alt="..." style="max-width: 200px; border-bottom-left-radius: 1em; border-top-left-radius: 1em;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $art->judul }}</h5>
                        <span class="card-text">
                            {!! $art->artikel = substr($art->artikel, 0, 97) . '...';
                            $art->artikel !!}
                        </span>
                        <p class="card-text"><a href="{{ route('artikel.show', $art->id) }}">Selengkapnya</a><br><small class="text-muted">Last updated {{ date('l, d F Y', strtotime($art->updated_at)) }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
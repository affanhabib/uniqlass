@extends('layouts.base')

@section('title', 'Mitra')

@section('content')
<div>
    <div class="banner d-flex align-items-center">
        <div class="container">
            <h1 class="title text-white">Mitra Uniqlass</h1>
        </div>
    </div>
    <div class="container my-5">
        @foreach ($mitra as $mtr)
        <div class="mb-4" style="max-width: 750px;">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('img/public/logo/') }}/{{ $mtr->logo }}" alt="..." style="max-width: 200px;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mtr->nama }}</h5>
                        <span class="card-text">
                            @if (strlen($mtr->deskripsi) > 100)
                                {!! $mtr->deskripsi = substr($mtr->deskripsi, 0, 97) . '...';
                                $mtr->deskripsi !!}
                            @else
                                {!! $mtr->deskripsi !!}
                            @endif
                        </span>
                        <p class="card-text"><a href="{{ route('mitra.show', Str::slug($mtr->nama)) }}">Selengkapnya</a><br><small class="text-muted">Last updated {{ date('l, d F Y', strtotime($mtr->updated_at)) }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
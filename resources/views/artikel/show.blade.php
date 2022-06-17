@extends('layouts.base')

@section('content')
<div class="pb-5 container">
    <div class="col-md-8">
        <div>
            <img src="{{ asset('img/public/header/') }}/{{ $artikel->header }}" class="img-fluid" alt="..." style="width: 100%">
        </div>
        <div class="pt-3">
            <h1 class="judul">{{ $artikel->judul }}</h1>
            <h6 class="text-muted">{{ $artikel->author }} - {{ date('l, d F Y h:i', strtotime($artikel->created_at)) }}</6>
        </div>
        <div class="pt-3">
            {!! $artikel->artikel !!}
        </div>
        <div class="row pl-3">
        </div>
    </div>
</div>
@endsection

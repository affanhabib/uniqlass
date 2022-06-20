@extends('layouts.base')

@section('title', $artikel->judul)

@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0&appId=516866793530631&autoLogAppEvents=1" nonce="oexAPd2R"></script>
<div class="pb-5 container">
    <div class="col-md-8">
        <div class="pt-3">
            <h6 class="text-muted">{{ $artikel->author }} - {{ date('l, d F Y h:i', strtotime($artikel->created_at)) }}</6>
            <h1 class="judul">{{ $artikel->judul }}</h1>
        </div>
        <div>
            <img src="{{ asset('img/public/header/') }}/{{ $artikel->header }}" class="img-fluid" alt="..." style="width: 100%">
        </div>
        <div class="pt-3">
            {!! $artikel->artikel !!}
        </div>
    </div>
    <div class="col-md-8">
        <div class="row pb-5 pt-3 d-flex justify-content-center">
            <div class="sharethis-inline-reaction-buttons"></div>
            <div class="sharethis-inline-share-buttons"></div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row pl-3 d-flex justify-content-center">
            <div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
</div>
@endsection

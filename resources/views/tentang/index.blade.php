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
                    <span class="text-center col-10">{!! $data['tentang']->deskripsi !!}</span>
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
                            <span class="card-text visi">{!! $data['tentang']->visi !!}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 my-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mitra">Misi</h2>
                            <div class="card-text">
                                {!! $data['tentang']->misi !!}
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
                @foreach ($data['founder'] as $fdr)
                <div class="col-lg-4 my-3">
                    <div class="card tim">
                        <img src="{{ asset('img/public/founder/') }}/{{ $fdr->foto }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h3 class="card-title title">{{ $fdr->nama }}</h3>
                            <p class="card-text">{{ $fdr->jabatan }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

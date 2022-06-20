@extends('layouts.base')

@section('title', $mitra->nama)

@section('content')
<div>
    <div class="banner d-flex align-items-center">
        <div class="container">
            <h1 class="title text-white">{{ $mitra->nama }}</h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="row text-secondary">
                    <p>Berdiri Sejak {{ $mitra->tahun_berdiri }}</p>
                </div>
                <div class="row">
                    {!! $mitra->deskripsi !!}
                </div>
                <div class="col">
                    <p class="font-weight-bold">Lokasi Kursus</p>
                    <p>{{ $mitra->lokasi }}</p>
                </div>
                <div class="col">
                    <p class="font-weight-bold">Jadwal Kursus</p>
                    <div>{!! $mitra->jadwal !!}</div>
                </div>
                <div class="col">
                    <p class="font-weight-bold">Materi Kursus</p>
                    <div>{!! $mitra->materi !!}</div>
                </div>
                <div class="col">
                    <p class="font-weight-bold">Perlengkapan Peserta Kursus</p>
                    <div>{!! $mitra->perlengkapan_peserta !!}</div>
                </div>
                <div class="col">
                    <p class="font-weight-bold">Fasilitas Kursus</p>
                    <div>{!! $mitra->fasilitas !!}</div>
                </div>
                <div class="col">
                    <p class="font-weight-bold">Benefit Kursus</p>
                    <div>{!! $mitra->keuntungan !!}</div>
                </div>
                <div class="col">
                    <p class="font-weight-bold">Sertifikat</p>
                    <div>{!! $mitra->sertifikat !!}</div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="d-flex justify-content-center sticky-top">
                    <img class="mt-5" src="{{ asset('img/public/logo/') }}/{{$mitra->logo}}" alt="" style="width: 300px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col my-5">
                <p>Yuk Gabung dengan <span class="font-weight-bold">{{ $mitra->nama }}</span></p>
                <a type="button" class="btn btn-success" href="https://api.whatsapp.com/send?phone=62082340576107&text=Hai%21%0D%0ASaya%20tertarik%20bergabung%20dengan%20kelas%20yang%20diselenggarakan%20oleh%20%2A{{ $mitra->nama }}%2A" target="_blank">Gabung</a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.panel')

@section('head')
<title>kopitu - berita kerja jepang</title>
<link rel="stylesheet" href="{{ url('/dist/style/css/pages/news.css') }}">
@endsection

@section('pages')
<div class="position-relative pb-4 pt-5">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 65%;z-index: -1;"></div>
    <div class="container pt-5 pb-2">
        <div class="d-block rounded bg-white py-4 px-3">
                <p class="fs-3 fw-bold text-orange mb-0">BERITA KERJA JEPANG</p>
                <p class="mb-0">Cari berita terkini seputar kerja di Jepang</p>
        </div>
    </div>
</div>
<div class="pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-9">
                @livewire('pages.news.data')
            </div>
            <div class="col-12 col-lg-3">
                <div class="list-group rounded-0 mb-4">
                    <a href="#" class="list-group-item py-3 active" aria-current="true">Berita
                        Terbaru</a>
                    <a href="#" class="list-group-item py-3" aria-current="true">Berita
                        Tranding</a>
                    <a href="#" class="list-group-item py-3" aria-current="true">Berita Lama</a>
                    <a href="#" class="list-group-item py-3" aria-current="true">Berita
                        Pelatihan</a>
                    <a href="#" class="list-group-item py-3" aria-current="true">Semua Berita</a>
                </div>
                <div class="d-block mb-3 border p-3">
                    <div class="d-block mb-3">
                        <span class="fw-bold">Cari Berita Berdasarkan Tanggal</span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Dari Tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Sampai Tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                    <button class="btn btn-outline-primary form-control">CARI BERITA</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection
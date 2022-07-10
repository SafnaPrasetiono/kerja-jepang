@extends('layouts.panel')

@section('head')
<title>kopitu - lowongan Magang jepang</title>
<link rel="stylesheet" href="{{ url('/dist/style/css/pages/news.css') }}">
@endsection

@section('pages')
<div class="position-relative pb-4 pt-5">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 65%;z-index: -1;"></div>
    <div class="container pt-5 pb-2">
        <div class="d-block rounded bg-white py-4 px-3">
                <p class="fs-3 fw-bold text-orange mb-0">MAGANG JEPANG</p>
                <p class="mb-0">Cari magang terbaru di kerjajepang.com</p>
        </div>
    </div>
</div>
<div class="pb-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-9">
                @livewire('pages.news.data')
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection
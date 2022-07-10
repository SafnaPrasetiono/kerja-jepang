@extends('layouts.panel')

@section('head')
<title>kerja jepang - Pelatihan kerja jepang</title>
@endsection

@section('pages')
<div class="position-relative pt-5">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 65%;z-index: -1;"></div>
    <div class="container pt-5 pb-2">
        <div class="d-block rounded bg-white py-4 px-3">
                <p class="fs-3 fw-bold text-orange mb-0">KARANTINA PELATIHAN</p>
                <p class="mb-0">Cari pelatihan untuk bekerja dijepang</p>
        </div>
    </div>
</div>
<div class="pt-3 pb-4">
    <div class="container">
        @livewire('pages.training.data')
    </div>
</div>
@endsection

@section('script')
    
@endsection
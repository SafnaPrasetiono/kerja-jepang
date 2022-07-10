@extends('layouts.panel')

@section('head')
<title>kerjajepang - question and answer</title>
@endsection

@section('pages')
<div style="height: 60px;" class="d-block w-100"></div>
<div class="position-relative pb-3 pt-5 mb-3">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 60%;z-index: -1;"></div>
    <div class="container">
        <div class="d-block rounded bg-white py-4 px-3">
            <p class="fs-3 fw-bold text-orange mb-0">Pertanyaan Seputar Kerja Jepang</p>
            <p class="mb-0">Kurang informasi yuk, cari informasi disini</p>
        </div>
    </div>
</div>
<div class="container">
    @livewire('pages.qa.data')
</div>
@endsection

@section('script')

@endsection
@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - data magang kerja</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Pertanyaan dan Jawaban</p>
        </div>
        <div class="d-block p-3">
            @livewire('admin.qa.index')
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
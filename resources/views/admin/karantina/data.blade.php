@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - lowongan kerja</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Pendaftaran Karantina</p>
        </div>
        <div class="d-block p-3">
            @livewire('admin.karantina.data')
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
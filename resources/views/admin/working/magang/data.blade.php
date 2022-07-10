@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - lowongan magang</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Lowongan Magang</p>
        <p class="mb-0 text-secondary">Halaman data lowongan magang</p>
    </div>
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        @livewire('admin.working.data', ['post' => 'magang'])
    </div>
</div>
@endsection

@section('script')

@endsection
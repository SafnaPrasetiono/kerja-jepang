@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - lowongan kerja</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Lowongan Kerja</p>
        <p class="mb-0 text-secondary">Halaman data lowongan pekerjaan</p>
    </div>
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        @livewire('admin.working.data', ['post' => 'loker'])
    </div>
</div>
@endsection

@section('script')

@endsection
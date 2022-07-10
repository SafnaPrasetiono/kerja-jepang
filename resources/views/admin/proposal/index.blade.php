@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - pelamar dari lowongan kerja</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Pelamar Pekerjaan</p>
        </div>
        <div class="d-block p-3">
            @livewire('admin.proposal.data')
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
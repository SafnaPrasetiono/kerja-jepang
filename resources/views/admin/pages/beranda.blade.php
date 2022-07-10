@extends('admin.layouts.panel')

@section('head')
    <title>kerjajepang - Edit Beranda pages</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-block rounded bg-white shadow">
            <div class="p-3 border-bottom">
                <p class="fs-4 fw-bold mb-0">Beranda</p>
            </div>
            <div class="p-3">
                @livewire('admin.pages.branda.banner')
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection
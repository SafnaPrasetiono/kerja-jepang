@extends('admin.layouts.panel')

@section('head')
    <title>OOH - Banner pages</title>
    <style>
        .img-banners-sample{
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
            <h3 class="fw-bold mb-0">Tambah Banner</h3>
        </div>
        @livewire('admin.banners.create')
    </div>
@endsection

@section('script')
    
@endsection
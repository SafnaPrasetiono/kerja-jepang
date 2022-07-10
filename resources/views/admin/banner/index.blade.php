@extends('admin.layouts.panel')

@section('head')
    <title>OOH - Banner pages</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
            <h3 class="fw-bold mb-0">Banners</h3>
        </div>
        <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
            @livewire('admin.banners.data')
        </div>
    </div>
@endsection

@section('script')
    
@endsection
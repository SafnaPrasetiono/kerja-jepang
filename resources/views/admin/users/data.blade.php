@extends('admin.layouts.panel')

@section('head')
    <title>kerjajepang - data users</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="row gy-4">
            <div class="col-12">
                <div class="d-block rounded bg-white shadow p-3">
                    <p class="fs-4 fw-bold mb-0">Data User</p>
                </div>
            </div>
            <div class="col-12">
                <div class="d-block rounded bg-white shadow p-3">
                    @livewire('admin.users.data')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    
@endsection
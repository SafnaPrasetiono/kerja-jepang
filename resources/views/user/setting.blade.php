@extends('layouts.panel')

@section('head')
<title>kerja jepang - peraturan</title>
<style>
    .link-tabs {
        text-align: start !important;
        color: #808080 !important;
        padding-top: 0.8rem !important;
        padding-bottom: 0.8rem !important;
        transition: all 0.3s !important;
        border-radius: 0px !important;
    }

    .link-tabs:hover {
        background: transparent !important;
        color: #0d6dfd9c !important;
        border-right: 4px solid #0d6dfd9c !important;
    }

    .link-tabs.active {
        background: transparent !important;
        color: #0d6efd !important;
        border-right: 4px solid #0d6efd !important;
    }
</style>
@endsection

@section('pages')
<div class="mt-5 pb-4 pt-5">
    <div class="container">

        <div class="d-block rounded shadow bg-white p-3 mb-3">
            <h3 class="fw-bold">Peraturan</h3>
        </div>

        <div class="row gy-4">

            <div class="col-12 col-md-4">
                <div class="d-block rounded shadow bg-white py-3">
                    <div class="d-block text-center py-3 mb-3">
                            <img src="{{ url('/images/avatar/sample-avatar.png') }}" alt="avatar" width="120px" height="120px" class="rounded-circle mb-3">
                            <p class="fw-bold fs-5 mb-0 text-capitalize">{{ auth('user')->user()->username }}</p>
                            <p class="mb-0">{{ auth('user')->user()->email }}</p>
                    </div>
                    <div class="nav flex-column nav-pills">
                        <button class="nav-link link-tabs active" data-bs-toggle="pill" data-bs-target="#account">Akun
                            Kamu</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill"
                            data-bs-target="#contact">Kontak</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill" data-bs-target="#taut">Akun
                            Tertaut</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account">
                        @livewire('user.setting.account')
                    </div>
                    <div class="tab-pane fade" id="contact">
                        @livewire('user.setting.contact')
                    </div>
                    <div class="tab-pane fade" id="taut">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore assumenda alias ducimus
                        placeat
                        vero suscipit eveniet magni veniam eligendi! Ipsam ab consectetur eius dignissimos suscipit
                        natus culpa est laudantium cum?
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

@section('script')

@endsection
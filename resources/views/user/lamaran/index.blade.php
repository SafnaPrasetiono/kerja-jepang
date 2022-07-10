@extends('layouts.panel')

@section('head')
<title>kerja jepang - Lamaran Saya</title>
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

    .img-loker {
        width: 240px;
    }

    .tab-pane {
        min-height: 360px;
    }

    @media(max-width: 990px) {
        .img-loker {
            width: 100%;
        }
    }
</style>
@endsection

@section('pages')
<div class="mt-5 pb-4 pt-5">
    <div class="container">
        <div class="d-block rounded shadow bg-white p-3 mb-3">
            <h3 class="fw-bold">Lamaran Saya</h3>
        </div>

        <div class="row">

            <div class="col-12 col-lg-3">
                <div class="d-block rounded shadow bg-white py-3">
                    <div class="nav flex-column nav-pills">
                        <button class="nav-link link-tabs active" data-bs-toggle="pill"
                            data-bs-target="#semua">Semua</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill"
                            data-bs-target="#pending">Proses</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill" data-bs-target="#review">Dalam
                            Review</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill"
                            data-bs-target="#interview">Interview</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill"
                            data-bs-target="#terima">Diterima</button>
                        <button class="nav-link link-tabs" data-bs-toggle="pill" data-bs-target="#tidak-cocok">Tidak
                            Cocok</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="tab-content d-block bg-white rounded shadow p-3" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="semua">
                        @livewire('user.lamaran.all')
                    </div>
                    <div class="tab-pane fade" id="pending">
                        @livewire('user.lamaran.proses')
                    </div>
                    <div class="tab-pane fade" id="review">
                        @livewire('user.lamaran.review')
                    </div>
                    <div class="tab-pane fade" id="interview">
                        @livewire('user.lamaran.interview')
                    </div>
                    <div class="tab-pane fade" id="terima">
                        @livewire('user.lamaran.accepted')
                    </div>
                    <div class="tab-pane fade" id="tidak-cocok">
                        @livewire('user.lamaran.rejected')
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
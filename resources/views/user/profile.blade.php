@extends('layouts.panel')

@section('head')
<title>kerja jepang - Profile Saya</title>
<style>
    .img-profile {
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('pages')
<div class="pb-3 mt-5 pt-5">
    <div class="container">
        <div class="row g-2">
            <div class="col-12 col-lg-9 pe-0 pe-lg-4">

                @livewire('user.biodata')

                @livewire('user.about')

                @livewire('user.experience')

                @livewire('user.education')

                @livewire('user.skill')

                @livewire('user.resume')

                @livewire('user.certificate')


            </div>
            <div class="col-12 col-lg-3">
                <div class="d-block rounded bg-white shadow mb-3">
                    <div class="px-2 py-1">
                        <p class="mb-0 fw-bold">Status Lamaran Aktif</p>
                    </div>
                    <div class="p-3">
                        <p class="text-secondary">Terdapat 2 lamaran aktif</p>
                    </div>
                </div>
                <div class="d-block rounded bg-white shadow mb-3">
                    <div class="p-3 border-bottom">
                        <p class="mb-0 fw-bold">Pilihan Cepat</p>
                    </div>
                    <div class="p-3">
                        <div class="row g-1">
                            <div class="col-6">
                                <a href="#" class="btn btn-outline-secondary d-block p-1 h-100">
                                    <i class="fas fa-file-import fa-2x fa-fw mb-2"></i>
                                    <p class="d-block mb-0">export to <br> Pdf</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#" class="btn btn-outline-secondary d-block p-1 h-100">
                                    <i class="fas fa-eye fa-2x fa-fw mb-2"></i>
                                    <p class="d-block mb-0">Lihat Profile Saya</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
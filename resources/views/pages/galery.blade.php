@extends('layouts.panel')

@section('head')
<title>kerja jepang - Pelatihan untuk kerja dijepang</title>
<style>
    .my-columnt {
        display: flex;
        flex: 0 0 auto;
        height: 300px !important;
        padding: .5rem;
        margin: 0px !important;
    }

    .imgGalery {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    @media(max-width: 768px) {
        .my-columnt {
            height: 200px !important;
        }
    }
</style>
@endsection

@section('pages')
<div class="position-relative pb-4 pt-5">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 65%;z-index: -1;"></div>
    <div class="container pt-5 pb-2">
        <div class="d-block rounded bg-white py-4 px-3">
            <p class="fs-3 fw-bold text-orange mb-0">GALERI KERJA JEPANG</p>
            <p class="mb-0">Halaman galeri pekerja di jepang</p>
        </div>
    </div>
</div>
<div class="py-3">
    <div class="container">
        <div class="row g-4 mb-4 align-items-center">
            <div class="col-12 col-md-6">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Mahasiswa yang telah <br> berankat ke jepang</p>
                    <p class="fs-5">Hai, Mahasiswa ayo buruan daftar dan jadi salah satu seperti mereka terbang langsung ke-jepang dan mendapatkan pekerjaan impianmu</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <video class="w-100 rounded" controls poster="{{ url('/video/ooh.png') }}">
                    <source src="{{ url('/video/ooh.mp4') }}" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
        </div>
        <div class="py-4">
            @livewire('pages.galery.data')
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
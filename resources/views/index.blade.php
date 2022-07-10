@extends('layouts.panel')

@section('head')
<title>kerja jepang - selamat datang di kerjajepang.com</title>
<style>
    .banner-elementor {
        background: url('/images/banner/banner-desi.jpeg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .elemtor-garansi {
        background: rgb(0, 130, 255);
        background: linear-gradient(124deg, rgba(0, 130, 255, 1) 0%, rgba(6, 137, 241, 1) 75%, rgba(1, 123, 252, 1) 100%);
    }

    .elemtor-dana {
        background: rgb(220, 220, 220);
        background: linear-gradient(124deg, rgba(220, 220, 220, 1) 0%, rgba(240, 240, 240, 1) 43%, rgba(240, 240, 240, 1) 65%, rgba(220, 220, 220, 1) 100%);
    }

    .img-banners {
        width: 100%;
        height: 100%;
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;
    }

    @media(max-width: 768px) {
        .banner-elementor {
            background-position: left
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block w-100" style="height: 65px;"></div>
@livewire('pages.index.banners')
@livewire('pages.index.loker')
@livewire('pages.index.magang')
@livewire('pages.index.news')
{{-- <div class="py-4">
    <div class="container">
        <div class="banner-elementor d-block rounded px-4 py-5">
            <div class="row">
                <div class="col-12 col-md-7">
                    <p class="display-5 mb-5">Program Karantina pelatihan Bahasa Jepang N4 untuk new cormer (pemula)</p>
                    <a href="{{ route('index.comer') }}" class="btn btn-outline-dark rounded-0 btn-lg">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="banner-elementor pt-0 pt-md-5 alert-primary mt-5">
    <div class="container py-4 py-md-5">
        <div class="row justify-content-center justify-content-md-start py-4">
            <div class="col-9 d-md-none">
                <img src="{{ url('/images/banner/avatars-banners.png') }}" alt="desi" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
                <div class="text-center text-md-start">
                    <p class="display-5 text-capitalize text-dark mb-5">Program Karantina pelatihan Bahasa Jepang N4
                        untuk new cormer (pemula)</p>
                    <a href="{{ route('index.comer.register') }}"
                        class="btn btn-outline-primary rounded-0 btn-lg px-5">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container pt-3 pb-5">
        <div class="d-block mb-4 pb-3">
            <p class="mb-0">Testimonials</p>
            <h2>Apa Kata Mereka?</h2>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-6">
                <div class="d-block text-center mb-3">
                    <img src="{{ url('/images/testimonial/Danisa-Shashikala.jpeg') }}" alt="testimonials"
                        class="rounded-circle mb-2" width="58px" height="58px">
                    <div class="d-block">
                        <p class="fs-5 fw-bold mb-0">Danisa Shashikala</p>
                    </div>
                </div>
                <p class="fs-5 text-center mb-4">
                    Setelah lulus dari karantina saya mendapatkan setifikant N4 dan kini saya telah bekerja dijepang
                    sebagai juru masak disalah satu toko siap saji hirosima.
                </p>
                <div class="text-center">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-block text-center mb-3">
                    <img src="{{ url('/images/testimonial/Mahesa-Kabinawa.jpeg') }}" alt="testimonials"
                        class="rounded-circle mb-2" width="58px" height="58px">
                    <div class="d-block">
                        <p class="fs-5 fw-bold mb-0">Mahesa Kabinawa</p>
                    </div>
                </div>
                <p class="fs-5 text-center mb-4">
                    Awalnya saya ragu untuk belajar berbahasa jepang eh ternyata belajar bahasa jepang itu mudah dan
                    sekarang saya bekerja dijepang sebagai perawat di rumah sakit tokyo
                </p>
                <div class="text-center">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4 elemtor-garansi">
    <div class="container">
        <div class="row gy-4 justify-content-end align-items-center">
            <div class="col-12 col-md-6">
                <img src="{{ url('/images/banner/garansi-sm.png') }}" alt="garansi" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <div class="py-3 text-white mb-4 text-center text-md-start">
                    <p class="fw-bold mb-4">Jaminan Layanan Karantina</p>
                    <p class="fs-3 fw-bold mb-5 text-uppercase">GARANSI UANG KEMBALI <br> untuk 50 orang pertama <br>
                        SESUAI DENGAN TERM AND CODITIONS</p>
                    <p class="mb-0">Anda gagal untuk mendapatkan seritfikat N4? beritahu kepada kami, uang anda akan
                        kembali sepenuhnya</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row gy-4 align-items-center justify-content-center mb-5">
            <div class="col-8 col-lg-6">
                <img src="{{ url('/images/banner/interview-lumbungdeso.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="mb-3">Temukan Pekerjaan Impianmu!</h3>
                <hr class="soft" style="width: 100px">
                <p class="">SSW / Tokutei Ginou adalah Status visa/ijin tinggal bagi warga negara asing di Jepang yang
                    mulai berlaku sejak 1 April 2019.</p>
                <p class="">Tokutei Ginou sacara harfiah memiliki arti Specific Technical Skill Visa atau Visa Kerja
                    Keahlian Khusus, sekarang lebih dikenal dengan Visa TG/SSW.</p>
                <p class=" mb-4">Pemegang visa SSW dapat bekerja diperusahaan Jepang dengan hak dan kewajiban yang sama
                    dengan pekerja Jepang.</p>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg px-5">Gabung</a>
            </div>
        </div>
    </div>
</div>

<div class="py-5 elemtor-dana">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="text-center text-md-start">
                    <p class="fs-3 text-capitalize text-dark mb-1">Mau ikut program karantina tapi tak punya uang?
                    </p>
                    <p class="fs-3 text-capitalize mb-5">jangan khawatir kami menyediakan pinjaman untuk ikut program
                        pelatihan karantina</p>
                    <a href="{{ route('index.comer.register') }}"
                        class="btn btn-outline-primary rounded-0 btn-lg px-5">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <img src="{{ url('/images/banner/dana.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
@extends('layouts.panel')

@section('head')
<title>kerja jepang - Prosedur atau tatacara</title>
<style>
    .elemets-one {
        position: relative;
        background: #00B4DB;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #0083B0, #00B4DB);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #0083B0, #00B4DB);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 65px"></div>
<div class="elemets-one py-5">
    <div class="container py-4">
        <div class="row align-items-center justify-content-center gy-5">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="p-3 text-white text-center text-md-start">
                    <p class="fs-3 fw-bold">Prosedur</p>
                    <p class="fs-5 mb-0">
                        Mau tau cara mendapatkan kerja di jepang melalui platform kerjajepang.com, Yuk ketahui
                        prosedur dan tatacaranya
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <div class="d-block position-relative">
                    <div class="position-absolute top-100 start-50 translate-middle rounded-circle bg-white w-75 shadow" style="height: 60px; margin-top: -2rem;"></div>
                    <img src="{{ url('/images/procedure/banner-1.png') }}" alt="" class="img-fluid d-block position-relative" style="z-index: 9">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4 mb-3">
    <div class="container mb-5">
        <h2 class="fw-bold text-center">Prosedur New Comer</h2>
    </div>
    <div class="container">
        <div class="row g-3 align-items-center mb-3">
            <div class="col-12 col-md-6">
                <img src="{{ url('/images/procedure/banner-2.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Tahap pertama</p>
                    <p class="fs-5 mb-0">
                        Tokutei Ginou (TG) Specified Skilled Worker (SSW) untuk New
                        Comers/ Pemula (ini bisa di klik dan isi nya prosedur nya)
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-3 align-items-center mb-3">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Tahap kedua</p>
                    <p class="fs-5 mb-0">
                        Tokutei Ginou (TG) Specified Skilled Worker (SSW) untuk
                        Pemilik Minimal JLPT N4/JFT-Basic A2 (ini bisa di klik dan isi
                        nya prosedur nya)

                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <img src="{{ url('/images/procedure/banner-3.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row g-3 align-items-center mb-3">
            <div class="col-12 col-md-6">
                <img src="{{ url('/images/procedure/banner-4.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Tahap Ketiga</p>
                    <p class="fs-5 mb-0">
                        Engineer/Specialist in Humanities/ International Services
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container mb-5">
        <h2 class="fw-bold text-center">Prosedur Magang</h2>
    </div>
    <div class="container">
        <div class="row g-3 align-items-center mb-3">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Tahap pertama</p>
                    <p class="fs-5 mb-0">
                        Pilih program magang yang tersedia pada menu magang di kerja jepang.com pilih sesuai dengan
                        kemampuan yang kamu miliki dan program magang yang kamu inginkan
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <img src="{{ url('/images/procedure/banner-2.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row g-3 align-items-center mb-3">
            <div class="col-12 col-md-6">
                <img src="{{ url('/images/procedure/banner-3.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Tahap kedua</p>
                    <p class="fs-5 mb-0">
                        Pantau pendaftaran program magang yang kamu pilih, jika kamu lolos kamu akan dihubungin pihak
                        admin untuk mendaptkan informasi lebih lanjut.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-3 align-items-center mb-3">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="p-3">
                    <p class="fs-3 fw-bold">Tahap Ketiga</p>
                    <p class="fs-5 mb-0">
                        Setelah kamu mendapatkan informasi tahap selanjutnya selesaikan pendaftaranmu dan kamu siap
                        terbang kejepang untuk magang yang kamu inginkan
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <img src="{{ url('/images/procedure/banner-4.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')

@endsection
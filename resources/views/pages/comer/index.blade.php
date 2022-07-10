@extends('layouts.panel')

@section('head')
<title>kerja jepang - pemula baru</title>
<meta name="keywords" content="cara mendapatkan sertifikat N4, program pelatihan untuk kerja jepang, program pelatihan karantina, cara mendaftarkan program pelatihan kerja jepang, cara daftar untuk mendapatkan sertifikat N4">
<style>
    .banner-elementor {
        background: url('/images/banner/banner-desi.jpeg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .img-icons {
        width: 120px;
        margin: auto;
    }

    .elemtor-garansi{
        background: rgb(0,130,255);
        background: linear-gradient(124deg, rgba(0,130,255,1) 0%, rgba(6,137,241,1) 75%, rgba(1,123,252,1) 100%);
    }

    .elemtor-dana {
        background: rgb(0, 130, 255);
        background: linear-gradient(124deg, rgba(0, 130, 255, 1) 0%, rgba(6, 137, 241, 1) 75%, rgba(1, 123, 252, 1) 100%);
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
<div class="banner-elementor pt-3 pb-5 py-md-5">
    <div class="container pt-3 pb-4 py-md-5">
        <div class="row justify-content-center justify-content-md-start py-4">
            <div class="col-9 d-md-none">
                <img src="{{ url('/images/banner/avatars-banners.png') }}" alt="desi" class="img-fluid">
            </div>
            <div class="col-12 col-md-7">
                <div class="text-center text-md-start">
                    <p class="display-5 text-capitalize text-dark mb-5">Program Karantina pelatihan Bahasa Jepang N4
                        untuk new cormer (pemula)</p>
                    <a href="{{ route('index.comer.register') }}" class="btn btn-outline-primary rounded-0 btn-lg px-5 d-none d-md-inline">Daftar Sekarang</a>
                    <a href="{{ route('index.comer.register') }}" class="btn btn-outline-danger rounded-0 btn-lg px-5 d-inline d-md-none">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="card py-3">
                    <div class="d-flex mb-2">
                        <img src="{{ url('/images/icons/belajar.png') }}" alt="" class="img-icons">
                    </div>
                    <div class="text-center px-3 py-2">
                        <p class="text-uppercase fs-5 mb-0 fw-bold">KARANTINA</p>
                        <p>pembelajaran bahasa jepang dan disiplinan dengan budaya kerja jepang</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card py-3">
                    <div class="d-flex mb-2">
                        <img src="{{ url('/images/icons/sertifikat.png') }}" alt="" class="img-icons">
                    </div>
                    <div class="text-center px-3 py-2">
                        <p class="text-uppercase fs-5 mb-0 fw-bold">Sertifikat</p>
                        <p>Dapatkan sertifikat N4 atau N3 dengan cara yang mudah</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card py-3">
                    <div class="d-flex mb-2">
                        <img src="{{ url('/images/icons/info.png') }}" alt="" class="img-icons">
                    </div>
                    <div class="text-center px-3 py-2">
                        <p class="text-uppercase fs-5 mb-0 fw-bold">Pembelajaran</p>
                        <p>tes kemampuan kamu untuk bidang pekerjaan SSW yang diminati</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">Fasilitas yang didapatkan</h4>
                <p class="mb-0 text-secondary">Pastikan kamu dapat keuntungan lebih dari kerja jepang.com</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Asrama dan Makan</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Materi skill dan Wawancara (Mensetsu)</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Tenaga pengajar berpengalaman</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Pembelajaran menggunakan proyektor dan peralatan multimedia</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Bimbingan proses kerja sampai terbang GRATIS</span>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Ruang kelas full AC</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Akses Internet Wi-Fi gratis</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Musholla</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Modul, Buku-buku, Textbook, alat tulis, blocknote, Tas Keren</span>
                </div>
                <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Mendapatkan pengajar langsung dari jepang</span>
                </div>
                {{-- <div class="d-flex align-items-start fs-5 mb-3">
                    <i class="far fa-check-circle text-primary mt-1"></i>
                    <span class="ms-2">Garansi mengulang pendidikan gratis sampai lolos Ujian</span>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="py-5 alert-secondary">
    <div class="container py-3">
        <div class="d-block text-center mb-3">
            <p class="fs-5 fw-bold text-uppercase mb-0">Program karantina</p>
            <p class="card-text">Tingkatkan kemampuan kamu dan dapatkan sertifikat N4</p>
        </div>
        <div class="d-block text-center py-4">
            <div class="row justify-content-center g-4">
                <div class="col-6 col-md-4">
                    <p class="mb-1 fw-bold">Lama Belajar</p>
                    <p class="mb-0">90 Hari</p>
                </div>
                <div class="col-6 col-md-4">
                    <div class="">
                        <p class="mb-1 fw-bold">Durasi Belajar</p>
                        <p class="mb-0">8 Jam</p>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <p class="mb-1 fw-bold">Waktu Belajar</p>
                    <p class="mb-0">Sabtu - jum'at, 08.00–17.00 WIB</p>
                </div>
            </div>
        </div>
        <div class="d-block py-3">
            <div class="text-center">
                <a href="{{ route('index.comer.register') }}" class="btn btn-outline-primary btn-lg px-5 rounded-0">Daftar Sekarang</a>
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
                <p class="fs-3 fw-bold mb-5">GARANSI UANG KEMBALI <br> SESUAI DENGAN TERM AND CODITIONS</p>
                <p class="mb-0">Anda gagal untuk mendapatkan seritfikat N4? beritahu kepada kami, uang anda akan kembali sepenuhnya</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container py-4">
        <div class="row gy-4 align-items-center justify-content-center">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <h3 class="mb-3">SPECIFIED SKILLED WORKER (SSW)</h3>
                <hr class="soft" style="width: 100px">
                <p>SSW / Tokutei Ginou adalah Status visa/ijin tinggal bagi warga negara asing di Jepang yang mulai berlaku sejak 1 April 2019.Tokutei Ginou sacara harfiah memiliki arti Specific Technical Skill Visa atau Visa Kerja Keahlian Khusus, sekarang lebih dikenal dengan Visa TG/SSW.</p>
                <p>Pemegang visa SSW dapat bekerja diperusahaan Jepang dengan hak dan kewajiban yang sama dengan pekerja Jepang.</p>
                <a href="#" target="_blank" class="btn btn-outline-primary btn-lg px-5">
                    Gabung
                </a>
            </div>
            <div class="col-8 col-md-6 order-1 order-md-2">
                <img src="{{ url('/images/banner/link-lumbungdeso.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="py-5 elemtor-dana">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="text-center text-md-start text-white">
                    <p class="fs-3 text-capitalize mb-1">Mau ikut program karantina tapi tak punya uang?
                    </p>
                    <p class="fs-3 text-capitalize mb-5">jangan khawatir kami menyediakan pinjaman untuk ikut program
                        pelatihan karantina</p>
                    <a href="{{ route('index.comer.register') }}"
                        class="btn btn-outline-light rounded-0 btn-lg px-5">Daftar Sekarang</a>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <img src="{{ url('/images/banner/dana-blue.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

<div class="py-4 alert-secondary">
    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">Bagaimana Cara Mendaftar</h4>
                <p class="mb-0 text-secondary">Yuk simak cara mendaftar untuk pemula jepang.com</p>
            </div>
            <div class="d-none d-md-flex justify-content-center justify-content-md-end ms-auto">
                <button class="customPrevBtn btn btn-outline-primary p-2 me-2" type="button">
                    <i class="fas fa-angle-left fa-lg fa-fw"></i>
                </button>
                <button class="customNextBtn btn btn-outline-primary p-2" type="button">
                    <i class="fas fa-angle-right fa-lg fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/1.jpg') }}" alt="1" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">MASUK</p>
                        <p class="card-text">
                            Kamu harus memiliki akun kerjajepang.com silahkan daftar telebih dahulu
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">1</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/2.jpg') }}" alt="2" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">PILIH</p>
                        <p class="card-text">
                            Pada halaman ini terdapat button daftar di atas silangkan klik button daftar pelatihan
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">2</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/3.jpeg') }}" alt="3" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">FORM</p>
                        <p class="card-text">
                            Silahkan isi form informasi terkait kamu dan pemilihan sertifikat yang tertera di
                            pendaftaran untuk pemula baru
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">3</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/4.jpeg') }}" alt="4" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">BAYAR</p>
                        <p class="card-text">
                            Selanjutnya kamu akan dihadapkan untuk proses konfrimasi pembayaran untuk mengikuti
                            pelatihan pemula baru
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">4</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/5.jpeg') }}" alt="5" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">KARTU</p>
                        <p class="card-text">
                            Kamu akan mendapatkan kartu akses untuk mengikuti program pelatihan yang disediakan
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">5</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/6.jpeg') }}" alt="6" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">UJIAN</p>
                        <p class="card-text">
                            Setelah mendapatkan kartu akses kamu dapat menggunakannya untuk mengikuti program pelatihan
                            yang telah kamu pilih
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">6</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/comers/7.jpeg') }}" alt="7" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">SELESAI</p>
                        <p class="card-text">
                            Jika ujian kamu lulus maka kamu akan mendapatkan sertifikat sesuai program pelatihan yang
                            kamu pilih
                        </p>
                    </div>
                    <div class="py-2">
                        <span
                        class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                        style="width: 46px; height: 46px;">7</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex d-md-none justify-content-center justify-content-md-end ms-auto">
            <button class="customPrevBtn btn btn-outline-primary p-2 me-2" type="button">
                <i class="fas fa-angle-left fa-lg fa-fw"></i>
            </button>
            <button class="customNextBtn btn btn-outline-primary p-2" type="button">
                <i class="fas fa-angle-right fa-lg fa-fw"></i>
            </button>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('/dist/owl/owl.carousel.min.js') }}"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    margin:24,
    loop:false,
    autoWidth:true,
    items:4
    })
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
</script>
<script>
    $('.MyOwl').owlCarousel({
        loop: true,
        margin: 12,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 2800,
        autoplayHoverPause: false,
        responsiveClass: true,
        autoWidth: true,
    });
    var owlTbr = $('.MyOwl');
    owlTbr.owlCarousel();
    // Go to the next item
    $('.owl-next').click(function() {
        owlTbr.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.owl-prev').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owlTbr.trigger('prev.owl.carousel');
    })

    $(window).scroll(() => {
        var wScroller = $(this).scrollTop();
        if (wScroller > $('.t-product-new').offset().top - 300) {
            $('.t-product-new').removeClass('opacity-0');
            $('.t-product-new').addClass('animate__animated animate__fadeIn');
            $('.t-product-new-animated').each((i) => {
                setTimeout(() => {
                    // $('.t-product-new-animated').eq(i).addClass('d-block');
                    $('.t-product-new-animated').eq(i).removeClass('opacity-0');
                    $('.t-product-new-animated').eq(i).addClass('animate__animated animate__slideInUp');
                }, 200 * i + 1);
            });
        }
    });
</script>
@endsection
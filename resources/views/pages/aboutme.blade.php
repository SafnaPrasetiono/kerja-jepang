@extends('layouts.panel')

@section('head')
<title>kerja jepang - Tentang kami</title>
@endsection

@section('pages')
<div class="position-relative pt-5">
    <div class="position-absolute top-0 start-0 end-0 h-75 alert-primary" style="z-index: -1;"></div>
    <div class="container pt-5">
        <div class="d-block rounded bg-white py-4 px-3">
            <p class="fs-2 fw-bold text-orange mb-1">Tentang Kami</p>
            <p class="mb-0">halaman tentang kerjajepang.com</p>
        </div>
    </div>
</div>

<div class="py-3">
    <div class="container">
        <div class="p-3 lh-lg">
            <p>Kerjajepang.com berdiri sejak tahun 2022 dan telah mensupport ratusan siswa/i untuk sekolah di Jepang.
                Selain itu, kerjajepang.com juga men-support pemuda/i
                Indonesia yang optimis dan memiliki semangat tinggi untuk bekerja di Jepang. Kerjajepang.com merupakan
                platform dari PT, LPK dan LKP. Saat ini kami sedang
                mempunyai SO (Sending Organization) untuk ikut berkontribusi dalam program magang/ jisshuusei</p>
            <p>Kerjajepang.com menyediakan pelatihan bahasa Jepang untuk persiapan sekolah ke Jepang, les bahasa Jepang
                reguler serta merupakan inisiator untuk program
                kelas intensif N4. Kelas intensif N4 ini ditujukkan bagi yang ingin mengejar JLPT N4 atau JFT-Basic A2.
                Kami juga menjembatani job matching kerja di Jepang dengan
                visa kerja tokutei ginou (TG/SSW) & visa engineering/specialist in humanities/Internationalservices</p>

        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="p-3">
            <h2 class="fw-bold mb-0">Kenapa Harus KerjaJepang</h2>
        </div>
        <div class="px-3">
            <div class="row mb-5 pb-3 gy-4 align-items-center">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <p class="fs-5 text-center text-md-start">Kami menyedikan pelayanan karantina terbaik untuk pemula yang mau bekerja dijepang dengan jaminan uang kembali 100%</p>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <img src="{{ url('/images/aboutme/images-1.png') }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mb-5 pb-3 gy-4 align-items-center">
                <div class="col-12 col-md-6">
                    <img src="{{ url('/images/aboutme/images-2.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <p class="fs-5 text-center text-md-start">Kami mempunyai kator yang berada di indonesia dan di jepang yang akan selalu mengawasi secara menyeluruh proses kinerja kami.</p>
                </div>
            </div>
            <div class="row pb-3 gy-4 align-items-center">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <p class="fs-5 text-center text-md-start">Kami telah banyak membentuk tenaga pendidikan yang mampu bekerja secara profesional baik dari indonesia maupun jepang.</p>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <img src="{{ url('/images/aboutme/images-3.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4">
    <div class="container">
        <div class="d-block mb-4">
            <div class="text-left p-3">
                <h2 class="text-dark fw-bold">Info Kerja Jepang</h2>
                <p class="mb-0">Berikut ini merupakan informasi dan kontak kerja jepang</p>
            </div>
        </div>
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-4">
                <div class="d-block rounded border text-center p-3 h-100">
                    <i class="fas fa-phone fa-2x fa-fw mb-3"></i>
                    <div>
                        <p class="mb-1">(021)8974-540</p>
                        <p class="mb-1">(+62)882-2988-5435</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-block rounded border text-center p-3 h-100">
                    <i class="fas fa-envelope-open fa-2x fa-fw mb-3"></i>
                    <div>
                        <p class="mb-1">info@kerjajepang.com</p>
                        <p class="mb-1">kerjajepang@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="d-block rounded border text-center p-3 h-100">
                    <i class="fas fa-clock fa-2x fa-fw mb-3"></i>
                    <div>
                        <p class="mb-1">Senin - Jumat (08:00 - 17:00)</p>
                        <p class="mb-1">Sabtu - Minggu (08:00 - 13:00)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block mb-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.698936160321!2d109.23249781405644!3d-7.3875949747730925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655fa9fcd6ab39%3A0x26a120e98ed3aefa!2sJl.%20Moh.%20Besar%2C%20Dusun%20II%20Prompong%2C%20Kutasari%2C%20Kec.%20Baturaden%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1650355266633!5m2!1sid!2sid"
                class="d-block w-100 rounded border-0 shadow" height="400" style="border:0;" allowfullscreen=""
                loading="lazy"></iframe>
        </div>

    </div>
</div>
@endsection

@section('script')

@endsection
@extends('layouts.panel')

@section('head')
<title>kerja jepang - Detail lowongan kerja</title>
@endsection

@section('pages')
<div class="position-relative pb-1 pt-5">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 65%;z-index: -1;"></div>
    <div class="container mt-5">
        <div class="d-block bg-white rounded shadow p-4">
            <div class="row gy-4 align-items-center">
                <div class="col-12 col-md-9">
                        <p class="fs-4 fw-bold text-orange">{{ $data->title }}</p>
                        <p class="mb-1">Lokasi, {{ $data->locations }}</p>
                        <p class="mb-0 text-secondary">Postingan, {{ date('d F Y', strtotime($data->date_start)) }}</p>
                </div>
                <div class="col-12 col-md-3">
                    @auth('user')
                    @livewire('pages.loker.submit', ['post' => $data])
                    @else
                    <div class="d-grid gap-2">
                        <a class="btn btn-primary px-5" href="{{ route('login') }}">Apply Now</a>
                        <a class="btn btn-outline-primary px-5" href="{{ route('login') }}">
                            <i class="fas fa-star fa-sm fa-fw"></i> Simpan
                        </a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-3">
    <div class="container mb-3">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="d-block bg-white rounded shadow p-4">
                    <img src="{{ url('/images/loker/' . $data->images) }}" alt="logo" width="100%" class="rounded mb-3">
                    <div class="mb-5">
                        <?php echo $data->content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
@extends('layouts.panel')

@section('head')
<title>kopitu - {{ $data->title }}</title>
@endsection

@section('pages')
<div class="position-relative pt-5">
    <div class="position-absolute top-0 start-0 end-0 alert-primary" style="height: 65%;z-index: -1;"></div>
    <div class="container pt-5">
        <div class="d-flex rounded bg-white align-items-center py-4 px-3">
            <div class="ms-3">
                <h1 class="mb-3 fw-bold text-capitalize text-primary">{{ $data->title }}</h1>
                <p class="fw-bold text-secondary mb-0">Tanggal posting, {{ date('d F Y', strtotime($data->created_at)) }}</p>
            </div>
        </div>
    </div>
</div>
<div class="py-4 py-md-5">
    <div class="container">
        <div class="row gx-0 gy-5">
            <div class="col-12 col-lg-9 pe-0 pe-lg-5">
                <div class="d-block rounded mb-4 pb-3">
                    <div class="mb-3">
                        <img src="{{ url('/images/training/' . $data->images ) }}" alt="{{ $data->title }}" class="img-fluid w-100 rounded">
                    </div>
                    <div class="p-2">
                        <?php echo $data->content ?>
                    </div>
                </div>
                <div class="d-block">
                    <a href="#" class="btn btn-outline-primary px-5">
                        Daftar pelatihan
                    </a>
                </div>
                <div class="d-block">
                    @livewire('pages.news.comment')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection
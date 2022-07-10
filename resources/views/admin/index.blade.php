@extends('admin.layouts.panel')

@section('head')
    <title>kerjajepang - selamat datang di admin kerja jepang</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="row g-2 mb-3">
        <div class="col-12">
            <div class="d-block bg-white rounded shadow p-3">
                <h3 class="fw-bold text-capitalize">Hello, {{ auth('admin')->user()->username }}</h3>
                <p class="mb-0 text-secondary">Selamat Datang di Dashboard Kerja Jepang</p>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-briefcase fa-3x py-auto "></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $loker }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">Bursa Kerja</small>
                </div>
                <a href="{{ route('admin.loker') }}" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-business-time fa-3x fa-fw"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $magang }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <small class="text-start fw-bold">Ex. Magang</small>
                </div>
                <a href="{{ route('admin.magang') }}" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-money-check-alt fa-3x"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $news }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">Berita</small>
                </div>
                <a href="{{ route('admin.news') }}" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-images fa-3x fa-fw"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $galery }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">Galery</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-info-square fa-3x fa-fw"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $qa }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">Q&A</small>
                </div>
                <a href="{{ route('admin.qa') }}" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-backpack fa-3x fa-fw"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $comer }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">Karantina</small>
                </div>
                <a href="{{ route('admin.karantina') }}" class="stretched-link"></a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                   <i class="fas fa-user fa-3x fa-fw"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $admin }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">Admin</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <div class="card p-2 shadow">
                <div class="d-flex align-items-center px-2">
                    <i class="fas fa-users fa-3x fa-fw"></i>
                    <div class="card-body text-end">
                        <p class="card-title fs-2 mb-0">{{ $user }}</p>
                    </div>
                </div>
                <div class="card-footer bg-white px-1">
                    <small class="text-start fw-bold">User</small>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
    
@endsection
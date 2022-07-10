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
            <div class="col-12">
                <div class="d-flex flex-column flex-md-row bg-white rounded shadow p-3 mb-4 align-items-center">
                    <div class="uploadImages me-3">
                        <div class="rounded-circle overflow-hidden" style="width: 100px; heigh: 100px;">
                            <img src="{{ url('/images/avatar/user/'. $user->avatar) }}" alt="avatar"
                                class="img-profile">
                        </div>
                    </div>
                    <div class="ms-0 ms-md-4 flex-fill">
                        <div class="d-block lh-sm mb-3">
                            <p class="fs-3 fw-bold mb-2 text-capitalize">{{ $user->username }}</p>
                            <p class="mb-0 fs-5">{{ $user->gender }}, {{ $user->country }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9 pe-0 pe-lg-4">

                <div class="d-block bg-white rounded shadow mb-4">
                    <div class="d-flex align-items-center px-4 py-3 border-bottom">
                        <p class="fs-4 fw-bold mb-0">Tantang Saya</p>
                    </div>
                    <div class="p-4">
                        @if ($aboutUsers == null)
                        <div class="d-flex flex-column flex-md-row mb-3">
                            <div class="text-center mb-3 mb-md-0">
                                <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                            </div>
                            <div class="ms-0 ms-md-3 text-center text-md-start">
                                <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada tentang user</p>
                                <p class="mb-0">Tentang User</p>
                            </div>
                        </div>
                        @else
                        <p class="mb-0">{{ $aboutUsers->about }}</p>
                        @endif
                    </div>
                </div>

                <div class="d-block bg-white rounded shadow mb-4">
                    <div class="d-flex align-items-center px-4 py-3 border-bottom">
                        <p class="fs-4 fw-bold mb-0">Pengalaman Kerja</p>
                    </div>
                    <div class="p-4">
                        @if($experience->count() != 0)
                        @foreach($experience as $items)
                        <div class="d-flex mb-3">
                            <div class="">
                                <p class="fs-5 fw-bold mb-0 text-capitalize">{{ $items->position }}</p>
                                <p class="mb-1">{{ $items->company }}</p>
                                <p class="mb-0 text-secondary"><span class="text-capitalize">{{ $items->month_start
                                        }}</span> {{ $items->years_start }} - <span class="text-capitalize">{{
                                        $items->month_end }}</span> {{ $items->years_end }}</p>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="d-flex flex-column flex-md-row mb-3">
                            <div class="text-center mb-3 mb-md-0">
                                <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                            </div>
                            <div class="ms-0 ms-md-3 text-center text-md-start">
                                <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada Pengalaman Kerja</p>
                                <p class="fs-5">Data Pengalaman Kerja</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="d-block bg-white rounded shadow mb-4">
                    <div class="d-flex align-items-center px-4 py-3 border-bottom">
                        <p class="fs-4 fw-bold mb-0">Pendidikan</p>
                    </div>
                    <div class="p-4">
                        @if($educations->count() != 0)
                        @foreach ($educations as $item)
                        <div class="d-block mb-3">
                            <p class="fs-5 fw-bold mb-0 text-capitalize">{{$item->institution}}</p>
                            <p class="mb-1">{{ $item->study }}</p>
                            <p class="mb-0 text-secondary"><span class="text-capitalize">{{ $item->month_start }}</span>
                                {{$item->years_start }} - <span class="text-capitalize">{{ $item->month_end }}</span>
                                {{$item->years_end }}</p>
                        </div>
                        @endforeach
                        @else
                        <div class="d-flex flex-column flex-md-row mb-3">
                            <div class="text-center mb-3 mb-md-0">
                                <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                            </div>
                            <div class="ms-0 ms-md-3 text-center text-md-start">
                                <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada Pendidikan</p>
                                <p class="fs-5">Data Pendidikan</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="d-block bg-white rounded shadow mb-4">
                    <div class="d-flex align-items-center px-4 py-3 border-bottom">
                        <p class="fs-4 fw-bold mb-0">Kemampuan</p>
                    </div>
                    <div class="p-4">
                        @if ($skill->count() != 0)
                        <div class="row">
                            @foreach ($skill as $item)
                            <div
                                class="d-flex align-items-center w-auto lh-0 badge rounded-pill bg-primary py-2 px-3 m-1">
                                {{$item->skill}}
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div class="d-flex flex-column flex-md-row mb-3">
                            <div class="text-center mb-3 mb-md-0">
                                <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                            </div>
                            <div class="ms-0 ms-md-3 text-center text-md-start">
                                <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada Kemampuan</p>
                                <p class="mb-0">Kemampuan User</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>


            </div>
            <div class="col-12 col-lg-3">
                <div class="d-block rounded bg-white shadow mb-3">
                    <img src="{{ url('/images/banner/search-job.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
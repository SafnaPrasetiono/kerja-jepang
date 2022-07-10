@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - lowongan magang</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block bg-white rounded shadow p-3 mb-3">
        <div class="row">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3">
                <img src="{{ url('/images/loker/'.$data->images) }}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-7 col-md-8 col-lg-9">
                <div class="p-3 p-sm-0">
                    <p class="fs-5 fw-bold mb-2">{{ $data->title }}</p>
                    <p class="mb-0 text-secondary">{{ date('d F Y', strtotime($data->date_start)) }} - {{ date('d F Y',
                        strtotime($data->date_end)) }}</p>
                    <p class="text-secondary mb-0">{{ $data->locations }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block bg-white rounded shadow mb-3">
        <div class="d-block p-3 border-bottom">
            <p class="fs-5 mb-0 fw-bold">Pelamamagangan</p>
        </div>
        <div class="p-3">
            @livewire('admin.working.pelamar', ['id' => $data->id_lokers])
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
@extends('layouts.panel')

@section('head')
<title>kerja jepang - Detail Lamaran Saya</title>
@endsection

@section('pages')
<div class="mt-5 pb-4 pt-5">
    <div class="container">
        <div class="d-block rounded shadow bg-white p-3 mb-3">
            <h3 class="fw-bold">Lamaran Saya</h3>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="d-block bg-white rounded shadow mb-3 p-3">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <img src="{{ url('/images/loker/' . $loker->images) }}" alt="" class="img-fluid mb-3 mb-sm-0">
                        </div>
                        <div class="col-12 col-sm-9">
                            <p class="fw-bold mb-2">{{ $loker->title }}</p>
                            <p class="mb-2">Dikirim pada {{ date('d F Y', strtotime($data->created_at)) }}</p>
                            <div class="badge rounded-pill text-uppercase px-3  @if($data->status == 'process') bg-primary @elseif($data->status == 'review') bg-info @elseif($data->status == 'interview') bg-warning @elseif($data->status == 'accepted') bg-success @elseif($data->status == 'rejected') bg-scondary @endif" style="font-size: 14px;">{{ $data->status }}</div>
                        </div>
                    </div>
                </div>
                <div class="d-block bg-white rounded shadow mb-3">
                    <div class="p-3 border-bottom">
                        <p class="fw-bold mb-0">Rincian Pekerja</p>
                    </div>
                    <div class="p-3">
                        <p>{{ $loker->description }}</p>
                    </div>
                </div>
                @if($data->content != null)
                <div class="d-block bg-white rounded shadow mb-3">
                    <div class="p-3 border-bottom">
                        <p class="fw-bold mb-0">Interview</p>
                    </div>
                    <div class="p-3">
                        <p><?php echo $data->content ?></p>
                    </div>
                </div>
                @endif
            </div>
            <div class="col-12 col-lg-4">
                <div class="mb-3">
                    <div class="d-block bg-white rounded shadow p-2">
                        <label for="#" class="p-2 fw-bold">Resume</label>
                        <a href="{{ url('/documents/resume/'.$data->resume) }}" class="btn link-primary">{{ $data->resume }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-block bg-white rounded shadow p-2">
                        <label for="#" class="fw-bold p-2">Certificate</label>
                        <a href="{{ url('/documents/resume/'.$data->certificate) }}" class="btn link-primary">{{ $data->certificate }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="d-block bg-white rounded shadow p-2">
                        <label for="#" class="fw-bold p-2">Surat Lamaran</label>
                        <p class="mb-0 p-2">{{ $data->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
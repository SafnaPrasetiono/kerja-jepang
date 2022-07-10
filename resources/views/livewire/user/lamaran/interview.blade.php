<div>
    @foreach ($data as $item)
    <div class="d-flex flex-column flex-sm-row lign-items-center g-0 border rounded overflow-hidden position-relative">
        <div class="col-12 col-sm-5 col-lg-4">
            <img src="{{ url('/images/loker/' . $item->images ) }}" class="img-fluid">
        </div>
        <div class="col-12 col-sm-7 col-lg-8">
            <div class="d-block p-3">
                <p class="fs-5 fw-bold mb-0 lh-sm text-ellipsis-2">{{$item->title}}</p>
                <p class="card-text mb-3">Dikirim pada, {{ date('d F Y', strtotime($item->created_at)) }}</p>
                <span class="rounded-pill px-3 py-1 text-white bg-warning">Interview</span>
            </div>
        </div>
        <a href="{{ route('user.lamaran.detail', ['id' => $item->id_proposal]) }}" class="btn btn-primary stretched-link"></a>
    </div>

    @endforeach
</div>

<div>
    <div class="pt-5 pb-4">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <div>
                    <h4 class="fw-bold">Bursa kerja Terbaru</h4>
                    <p class="mb-0 text-secondary">Yuk, cari pekerjaan yang sesuai dengan kamu</p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill py-1 ms-auto">Semua <i
                        class="fas fa-angle-right fa-sm fa-fw"></i></a>
            </div>
            <div class="row">
                @foreach ($data as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ url('/images/loker/' . $item->images ) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <a href="{{ route('loker.detail', ['slug' => $item->slug]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                {{ $item->title }}
                            </a>
                            <small class="d-block text-secondary mb-3">Posting, {{ date('d F Y', strtotime($item->date_start)) }} - {{ date('d F Y', strtotime($item->date_end)) }}</small>
                            <p class="card-text text-ellipsis-3">{{$item->description}}</p>
                            <a href="{{ route('loker.detail', ['slug' => $item->slug]) }}" class="btn link-primary px-0">Lihat detail <i class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
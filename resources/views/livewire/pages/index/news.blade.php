<div>
    <div class="py-4">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <div>
                    <h4 class="fw-bold">Berita terkini</h4>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill py-1 ms-auto">
                    Semua <i class="fas fa-angle-right fa-sm fa-fw"></i>
                </a>
            </div>
            <div class="row g-4 mb-4">
                @foreach ($data as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border">
                        <img src="{{ url('/images/news/' . $item->images ) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="{{ route('index.news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                {{ $item->title }}
                            </a>
                            <small class="d-block text-secondary mb-3">Berita, {{ date('d F Y', strtotime($item->created_at) ) }}</small>
                            <p class="card-text text-ellipsis-4">
                                {{ $item->description }}
                            </p>
                            <a href="{{ route('index.news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}" class="btn link-primary px-0">Lihat detail <i class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
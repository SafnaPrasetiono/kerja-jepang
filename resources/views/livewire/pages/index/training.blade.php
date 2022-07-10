<div>
    <div class="py-4">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <div>
                    <h4 class="fw-bold">Program Pelatihan Tokutei Ginou (SSW)</h4>
                    <p class="mb-0 text-secondary">Buruan daftar kerjajepang.com dan pilih pelatihan yang kamu inginkan</p>
                </div>
                <a href="{{ route('index.training') }}" class="btn btn-outline-primary rounded-pill py-1 ms-auto">
                    Semua <i class="fas fa-angle-right fa-sm fa-fw"></i>
                </a>
            </div>
            <div class="row g-4 mb-4">
                @foreach ($data as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border">
                        <img src="{{ url('/images/training/' . $item->images ) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="{{ route('index.training.detail', ['slug' => $item->slug, 'id' => $item->id_training ]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                {{ $item->title }}
                            </a>
                            <small class="d-block text-secondary mb-3">Postingan, {{ date('d F Y', strtotime($item->created_at) ) }}</small>
                            <p class="card-text text-ellipsis-4">
                                {{ $item->description }}
                            </p>
                            <a href="{{ route('index.training.detail', ['slug' => $item->slug, 'id' => $item->id_training ]) }}" class="btn link-primary px-0">Lihat detail <i class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
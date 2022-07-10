<div>
    <div class="py-5">
        <div class="container">
            <div class="d-flex align-items-center mb-4">
                <div>
                    <h4 class="fw-bold">New Comer Tokutei Ginou</h4>
                    <p class="mb-0 text-secondary">Yuk, cari informasi lebih lanjut</p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill py-1 ms-auto">Semua <i
                        class="fas fa-angle-right fa-sm fa-fw"></i></a>
            </div>
            <div class="row">
                @if ($data == 0)
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-info-square fa-4x mb-3"></i>
                            <h2 class="fw-light">Belum terdapat Informasi mengenai new comer</h2>
                            <p class="fs-4 fw-light">Maaf tergangu kami sedang dalam pengembangan sistem</p>
                        </div>
                    </div>
                </div>
                @else
                @foreach ($data as $item)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ url('/images/loker/' . $item->images ) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <a href="{{ route('loker.detail', ['slug' => $item->slug]) }}"
                                class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                {{ $item->title }}
                            </a>
                            <small class="d-block text-secondary mb-3">Posting, {{ date('d F Y',
                                strtotime($item->date_start)) }} - {{ date('d F Y', strtotime($item->date_end))
                                }}</small>
                            <p class="card-text text-ellipsis-3">{{$item->description}}</p>
                            <a href="{{ route('loker.detail', ['slug' => $item->slug]) }}"
                                class="btn link-primary px-0">Lihat detail <i
                                    class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
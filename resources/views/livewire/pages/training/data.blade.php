<div>
    <div class="d-flex align-items-center w-100 border-bottom py-2 mb-4">
        <div class="dropend">
            <button class="btn btn-outline-primary rounded-0 dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Tampilkan
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">12 Halaman</a></li>
                <li><a class="dropdown-item" href="#">25 Halaman</a></li>
                <li><a class="dropdown-item" href="#">50 Halaman</a></li>
            </ul>
        </div>
        <div class="d-block position-relative ms-auto">
            <input wire:model="search" type="text" name="search" class="form-control border border-orange rounded-0"
                placeholder="Cari berita terbaru" style="padding-right: 90px;">
            <button class="btn btn-outline-orange rounded-0 position-absolute top-0 end-0 px-4" type="button"
                id="button-addon2">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div>

    </div>
    <div class="row mb-4">
        @foreach ($data as $item)
        <div class="col-12 col-md-4">
            <div class="card border">
                <img src="{{ url('/images/training/' . $item->images ) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="{{ route('index.training.detail', ['slug' => $item->slug, 'id' => $item->id_training ]) }}"
                        class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                        {{ $item->title }}
                    </a>
                    <small class="d-block text-secondary mb-3">Postingan, {{ date('d F Y', strtotime($item->created_at) )
                        }}</small>
                    <p class="card-text text-ellipsis-4">
                        {{ $item->description }}
                    </p>
                    <a href="{{ route('index.training.detail', ['slug' => $item->slug, 'id' => $item->id_training ]) }}"
                        class="btn link-primary px-0">Lihat detail <i class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex align-items-center">
        <p class="mb-0 border py-1 px-2 rounded">
            <span class="fw-bold">Tersedia {{ $data->count() }} Data</span>
        </p>
        @if ($data->hasPages())
        <nav class="ms-auto">
            {{ $data->links('livewire.pages.training.paginations') }}
        </nav>
        @endif
    </div>
</div>
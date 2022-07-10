<div>

    <div class="d-block rounded shadow-sm bg-white p-3 mb-3">
        @if($imagesDesktop)
        <div class="card text-white rounded-0 border-0 mb-3">
            <div class="ratio ratio-21x9">
                <div class="img-banners-sample" style="background-image: url({{ $imagesDesktop->temporaryUrl() }})">
                </div>
            </div>
            @if($showTextDesktop)
            <div class="px-5 position-absolute top-0 start-0 h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-6">
                        <h2 class="mb-4">{{ $title }}</h2>
                        <p class="fs-lg-5 fs-md-6 mb-4">{{ $description }}</p>
                        @if($links)
                        <a href="{{ $links }}" class="btn btn-outline-light rounded-pill px-4">Details</a>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
        <div class="mb-3">
            <label for="images" class="form-label">Banner Images For Dekstop</label>
            <input wire:model='imagesDesktop' name="images" type="file" class="form-control" id="images">
        </div>
        <div class="form-check">
            <input wire:model='showTextDesktop' class="form-check-input" type="checkbox" value="1" id="chekDesktop">
            <label class="form-check-label" for="chekDesktop">
              Tampilkan Teks
            </label>
          </div>
    </div>

    <div class="d-block rounded shadow-sm bg-white p-3 mb-3">
        @if($imagesPhone)
        <div class="row mb-3 g-0 justify-content-center">
            <div class="col-12 col-sm-6 col-md-7 col-lg-6">
                <div class="card d-flex text-white rounded-0 border-0">
                    <div class="ratio ratio-4x3">
                        <div class="img-banners-sample"
                            style="background-image: url({{ $imagesPhone->temporaryUrl() }})"></div>
                    </div>
                    @if($showTextPhone)
                    <div class="position-absolute text-center bottom-0 w-75 px-2 pb-4 mx-auto" style="left: 0; right: 0;">
                        <div class="mb-1">
                            <h5 class="mb-1">{{ $title }}</h5>
                            <small class="mb-4">{{ $description }}</small>
                        </div>
                        @if($links)
                        <a href="{{ $links }}" class="btn btn-outline-light rounded-pill btn-sm px-4">Details</a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endif
        <div class="mb-3">
            <label for="images" class="form-label">Banner Images For Phone</label>
            <input wire:model='imagesPhone' name="images" type="file" class="form-control" id="images">
        </div>
        <div class="form-check">
            <input wire:model='showTextPhone' class="form-check-input" type="checkbox" value="1" id="checkPhone">
            <label class="form-check-label" for="checkPhone">
              Tampilkan Teks
            </label>
          </div>
    </div>
    <div class="d-block rounded shadow-sm bg-white p-3 mb-3">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input wire:model='title' name="title" type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea wire:model='description' name="description" id="" rows="4" class="form-control"
                id="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="links" class="form-label">Link Botton</label>
            <input wire:model='links' name="links" type="text" class="form-control" id="links">
        </div>
        <div class="mb-3">
            <button wire:click='store' class="btn btn-custom-1 form-control">Save</button>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        window.addEventListener('success', event => {
            Swal.fire({
                icon: 'success',
                title: 'Good Jobs!',
                text: event.detail,
            })
        })
        window.addEventListener('erros', event => {
            Swal.fire({
                icon: 'error',
                title: 'Opps...!',
                text: event.detail,
            })
        })

    </script>
</div>
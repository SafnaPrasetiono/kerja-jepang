<div>
    <div class="row g-3 align-items-center mb-4">
        @foreach ($data as $item)
        <div class="my-columnt col-6 col-md-4 col-lg-3">
            <div wire:click='show({{$item->id_galeries}})' class="btn imgGalery"
                style="background-image: url('/images/galery/{{$item->images}}')"></div>
            {{-- <img src="{{ url('/images/galery/' . $item->images) }}" class="imgGalery"> --}}
        </div>
        @endforeach
    </div>
    @if ($data->hasPages())
    <div class="d-flex justify-content-center">
        {{ $data->links('layouts.paginations') }}
    </div>
    @endif


    <div class="modal fade" id="imgModals" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative">
                <button type="button" class="btn text-white position-absolute end-0 m-3" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times fa-lg fa-fw"></i>
                </button>
                @if($detailImg)
                <img src="{{ url('/images/galery/' . $detailImg->images)  }}" alt="" class="img-fluid rounded">
                @endif
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('showModal', function() {
            $('#imgModals').modal('show');
        });
    </script>
</div>
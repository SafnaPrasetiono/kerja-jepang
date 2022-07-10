<div>
    <div class="d-block bg-white rounded shadow mb-4">
        <div class="d-flex align-items-center px-4 py-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Kemampuan</p>
            <button wire:click='show' type="button" class="btn link-primary text-decoration-none ms-auto">
                <i class="fas fa-pencil-alt fa-sm fa-fw"></i> Edit
            </button>
        </div>
        <div class="p-4">
            @if ($data->count() != 0)
            <div class="row">
                @foreach ($data as $item)
                <div class="d-flex align-items-center w-auto lh-0 badge rounded-pill bg-primary px-3 m-1">
                    <span class="">{{$item->skill}}</span>
                    <button wire:click='deleteSkill({{ $item->id_skill }})' type="button" class="btn text-white pe-0 ps-1 py-0"><i class="fas fa-times fa-sm fa-fw"></i></button>    
                </div>
                @endforeach
            </div>
            @else
            <div class="d-flex flex-column flex-md-row mb-3">
                <div class="text-center mb-3 mb-md-0">
                    <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                </div>
                <div class="ms-0 ms-md-3 text-center text-md-start">
                    <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada Kemampuan</p>
                    <p class="fs-5">Tambahkan Kemampuan kamu</p>
                </div>
            </div>
            @endif
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="skillModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Kemampuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="skill">Kemampuan</label>
                        <input wire:model="skill" type="text" class="form-control @error('skill') is-invalid @enderror"
                            wire:target="store" wire:loading.class="placeholder disabled">
                        @error('skill')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" wire:click="store" wire:loading.attr="disabled">
                        <span wire:target="store" wire:loading class="spinner-border spinner-border-sm"></span>
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('showSkill', function() {
            $('#skillModal').modal('show');
        });

        document.addEventListener('expandSkill', function() {
            $('#skillModal').modal('hide');
        });
    </script>

    @if(session()->has('success'))
    <script>
        Swal.fire({
        icon: 'success',
        title: 'Good Jobs!',
        text: '{{ session()->get("success") }}',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Opps...!',
        text: '{{ session()->get("error") }}',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    @endif
</div>
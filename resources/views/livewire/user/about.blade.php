<div>
    <div class="d-block bg-white rounded shadow mb-4">
        <div class="d-flex align-items-center px-4 py-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Tantang Saya</p>
            <button wire:click='edit' type="button" class="btn link-primary text-decoration-none ms-auto">
                <i class="fas fa-pencil-alt fa-sm fa-fw"></i> Edit
            </button>
        </div>
        <div class="p-4">
            @if ($aboutUser == null)
                <p class="mb-0"></p>
            @else
            <p class="mb-0">{{ $aboutUser->about }}</p>
            @endif
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="aboutModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tentang Saya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3 placeholder-glow">
                    <label class="form-label" for="aboutMe">Beritahu tentang dirimu sehingga perusahaan lebih mudah memahamimu.</label>
                    <textarea wire:model='aboutMe' id="aboutMe" rows="5" class="form-control @error('aboutMe') is-invalid @enderror" wire:target="update"
                    wire:loading.class="placeholder disabled"></textarea>
                    @error('aboutMe')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">
                    <span wire:target="update" wire:loading class="spinner-border spinner-border-sm"></span>
                    Simpan
                </button>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('/dist/style/js/jquery.js') }}"></script>
<script>
    document.addEventListener('deleteConfrimed', function() {
        Swal.fire({
                title: "Apa anda yakin?",
                text: "Menghapus produk pesanan anda!!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Yes, delete!',
                cancelButtonText: 'Tidak',
            })
            .then((next) => {
                if (next.isConfirmed) {
                    Livewire.emit('deleteAction');
                }
            });
    })

    document.addEventListener('editAbout', function() {
        $('#aboutModal').modal('show');
    });

    document.addEventListener('expandAbout', function() {
        $('#aboutModal').modal('hide');
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

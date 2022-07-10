<div>
    <div class="d-grid gap-2">
        @if ($proposal)
        <button class="btn btn-primary px-5 disabled" type="button" disabled>Apply Now</button>
        @else
        <button wire:click='show' class="btn btn-primary px-5" type="button">Apply Now</button>
        @endif
        @if ($wishlist)    
        <button wire:click='unlove({{$wishlist->id_wishlist}})' class="btn btn-outline-danger px-5" type="button">
            <i class="fas fa-star fa-sm fa-fw"></i> Simpan
        </button>
        @else
        <button wire:click='love' class="btn btn-outline-primary px-5" type="button">
            <i class="fas fa-star fa-sm fa-fw"></i> Simpan
        </button>
        @endif
    </div>

    <div wire:ignore.self class="modal fade" id="myModals" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Apply Lamaran Kerja</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="#" class="form-label d-flex">Resume Kamu <a href="{{route('user.profile')}}"
                                class="ms-auto"><i class="fas fa-edit fa-sm fa-fw"></i></a></label>
                        @if ($resume)
                        <div class="form-control">
                            <a href="/documents/resume/{{ $resume->resume }}" class="btn link-primary" download="">{{
                                $resume->resume }}</a>
                        </div>
                        @else
                        <div class="form-control is-invalid">Anda belum Upload Resume</div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="#" class="form-label d-flex w-100">Sertifikat <a href="{{route('user.profile')}}"
                                class="ms-auto"><i class="fas fa-edit fa-sm fa-fw"></i></a></label>
                        @if ($certificate)
                        <div class="form-control">
                            <a href="/documents/certificate/{{ $certificate->certificate }}" class="btn link-primary"
                                download="">{{ $certificate->certificate }}</a>
                        </div>
                        @else
                        <div class="form-control is-invalid">Anda belum Upload Sertifikat</div>
                        @endif
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="description">Penjelasan Singkat</label>
                        <textarea wire:model='description' name="description" id="description" rows="4"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Mengapa anda memilih pekerjaan ini."></textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    @if ($resume and $certificate)
                    <button wire:click.prevent="store" type="button" class="btn btn-primary" wire:target='apply'
                        wire:loading.remove>Apply Jobs</button>
                    @else
                    <button type="button" class="btn btn-secondary disabled" disabled>Apply Jobs</button>
                    @endif
                    <button class="btn btn-primary" type="button" disabled wire:loading.block wire:target='apply'
                        wire:target="store">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
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

document.addEventListener('showModals', function() {
    $('#myModals').modal('show');
});

document.addEventListener('expandModals', function() {
    $('#myModals').modal('hide');
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
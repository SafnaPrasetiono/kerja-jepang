<div>
    <div class="d-block bg-white rounded shadow mb-4">
        <div class="d-flex align-items-center px-4 py-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Resume</p>
            <button wire:click='show' type="button" class="btn link-primary text-decoration-none ms-auto">
                <i class="fas fa-pencil-alt fa-sm fa-fw"></i> Edit
            </button>
        </div>
        <div class="p-4">
            @if($DataResume != null)
            <a href="/documents/resume/{{ $DataResume->resume }}" class="link-primary text-decoration-none" target="_blank" download="">
                <i class="fas fa-file fa-sm fa-fw me-1"></i>
                {{ $DataResume->resume }}
            </a>
            @else
            <div class="d-flex flex-column flex-md-row mb-3">
                <div class="text-center mb-3 mb-md-0">
                    <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                </div>
                <div class="ms-0 ms-md-3 text-center text-md-start">
                    <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada Resume</p>
                    <p class="fs-5">Tambahkan Resume</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="resumeModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Upload Resume</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="resume">Upload Resume</label>
                        <input wire:model="resume" type="file"
                            class="form-control @error('resume') is-invalid @enderror" wire:target="createdAddress"
                            wire:loading.class="placeholder disabled">
                        <div class="progress mt-3 d-none" id="progressbar">
                            <div class="progress-bar" id="progressFill" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100" style="height: 20px"></div>
                        </div>
                        @error('resume')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button wire:click.prevent="store" type="button" class="btn btn-primary" wire:target='resume'
                        wire:loading.remove>Save changes</button>
                    <button class="btn btn-primary" type="button" disabled wire:loading.block wire:target='resume'
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
        document.addEventListener('livewire:load',() => {
            document.addEventListener('livewire-upload-error' , () => {
                $('#fileUpload').addClass("is-invalid");
            });
            document.addEventListener('livewire-upload-finish' , () => {
                $('#fileUpload').addClass("is-valid");
            });
            document.addEventListener('livewire-upload-progress' , (event) => {
                $('.progress').removeClass("d-none");
                $('.progress').addClass("d-block");
                console.log(event.detail.progress + "%");
                $('.progress-bar').css('width', event.detail.progress + "%");
                // document.getElementById("progressFill").style.width =  event.detail.progress + "%";
            });
        });

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

    document.addEventListener('showResume', function() {
        $('#resumeModal').modal('show');
    });

    document.addEventListener('expandResume', function() {
        $('#resumeModal').modal('hide');
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
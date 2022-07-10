<div>
    <div class="d-flex flex-column flex-md-row bg-white rounded shadow p-3 mb-4 position-relative">
        <div class="uploadImages">
            <div class="rounded-circle overflow-hidden" style="width: 100px; heigh: 100px;">
                <img src="{{ url('/images/avatar/user/'. $user->avatar) }}" alt="avatar" class="img-profile">
            </div>
        </div>
        <input type="file" id="inputImages" name="images" wire:model='images' class="inputImages d-none">
        <a wire:click='edit' href="#" type="button"
            class="link-primary text-decoration-none position-absolute top-0 end-0 m-3" style="z-index: 9"><i
                class="fas fa-pencil-alt fa-sm fa-fw"></i>Edit Informasi</a>
        <div class="ms-0 ms-md-4 flex-fill">
            <div class="d-block position-relative lh-sm mb-4">
                <p class="fs-3 fw-bold mb-2 text-capitalize">{{ $user->username }}</p>
            </div>
            <div class="row g-3 pb-4">
                <div class="col-12 col-md-6">
                    <label for="email" class="text-secondary">Email</label>
                    <p class="mb-0">{{ $user->email }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <label for="email" class="text-secondary">Telepon</label>
                    <p class="mb-0">@if($user->phone==null)-@else 62{{ $user->phone }} @endif</p>
                </div>
                <div class="col-12 col-md-6">
                    <label for="email" class="text-secondary">Usia, Jenis Kelamin</label>
                    <p class="mb-0">@if($user->born!=null){{ date('Y') - date('Y', strtotime($user->born)) }} Tahun
                        @else -
                        @endif, @if($user->gender!=null) {{ $user->gender }} @else - @endif</p>
                </div>
                <div class="col-12 col-md-6">
                    <label for="email" class="text-secondary">Kebangsaan</label>
                    <p class="mb-0">Indonesia</p>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="username">Username</label>
                        <input wire:model="username" type="text"
                            class="form-control @error('username') is-invalid @enderror" wire:target="createdAddress"
                            wire:loading.class="placeholder disabled">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telepon</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                            <input type="text" id="phone" wire:model="phone"
                                class="form-control @error('phone') is-invalid @enderror " wire:target="createdAddress"
                                wire:loading.class="placeholder disabled">
                        </div>
                        @error('phone')
                        <div class="d-flex invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="born" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="born" wire:model="born"
                            class="form-control @error('born') is-invalid @enderror " wire:target="createdAddress"
                            wire:loading.class="placeholder disabled">
                        @error('born')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Tanggal Lahir</label>
                        <select wire:model='gender' name="gender" id="gender"
                            class="form-select  @error('gender') is-invalid @enderror ">
                            <option value="" selected>Jenis kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        @error('gender')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Kebangsaan</label>
                        <input type="text" id="country" wire:model="country"
                            class="form-control @error('country') is-invalid @enderror " wire:target="createdAddress"
                            wire:loading.class="placeholder disabled">
                        @error('country')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="born" class="form-label">Lokasi</label>
                        <input type="text" id="born" wire:model="born"
                            class="form-control @error('born') is-invalid @enderror " wire:target="createdAddress"
                            wire:loading.class="placeholder disabled">
                        <div class="invalid-feedback">
                            Tanggal lahir harus diinputkan
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" wire:click="update" wire:loading.attr="disabled">
                        <span wire:target="update" wire:loading class="spinner-border spinner-border-sm"></span>
                        Simpan Perubahan
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

        document.addEventListener('edit', function() {
            $('#myModal').modal('show');
        });

        document.addEventListener('expandModels', function() {
            $('#myModal').modal('hide');
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
<div>
    <div class="d-block bg-white rounded shadow mb-3">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Akun Kamu</p>
        </div>
        <div class="px-3 pt-4 pb-5">
            <label for="" class="form-label mb-3">Kamu dapat masuk melalui salah satu akun di bawah ini:</label>
            <div class="mb-3">
                <p class="fs-5 fw-bold mb-0">{{ auth('user')->user()->username }}</p>
            <p class="fs-5 mb-0">{{ auth('user')->user()->email }}</p>
            </div>
                <p class="mb-0">Status Akun : <span class="badge bg-primary">Active</span></p>
        </div>
    </div>
    <div class="d-block bg-white rounded shadow mb-3">
        <div class="d-flex align-items-center p-3">
            <div class="p-3" style="width: 270px">
                <img src="{{ url('/images/banner/password.png') }}" alt="" class="img-fluid">
            </div>
            <div class="ms-0 ms-md-4">
                <p class="fs-5 fw-bold">Rubah Password Akun Kamu</p>
                <p class="text-secondary mb-0">Akun Kamu</p>
                <p class="mb-4">{{ auth('admin')->user()->email }}</p>
                <button wire:click='show' type="button" class="btn btn-outline-primary rounded-0">Ubah Password</button>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="passwordModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mb-3 text-center py-3">
                        <img src="{{ url('/images/banner/password.png') }}" alt="" class="img-fluid w-50 mb-3">
                        <p class="fs-4 fw-bold">Rubah Password</p>
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Password</label>
                        <input wire:model='password' type="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Confirmasi password</label>
                        <input wire:model='confirmation' type="password" class="form-control @error('password') is-invalid @enderror">
                        @error('confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input wire:model='cek' class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Rubah Password Saya
                        </label>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button wire:click='setup' type="button" class="btn btn-primary" @if($cek != true) disabled @endif>Simpan</button>
                  </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('pModalShow', () => {
            $('#passwordModal').modal('show');
        });
        document.addEventListener('pModalExpand', () => {
            $('#passwordModal').modal('hide');
        });
        document.addEventListener('deleteConfrimed', function() {
            Swal.fire({
                    title: "Delete?",
                    text: "Are you sure to delete this q&a?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'Tidak',
                })
                .then((next) => {
                    if (next.isConfirmed) {
                        Livewire.emit('deleteAction');
                    } else {
                        Swal.fire("Data anda tetap aman!");
                    }
                });
        })
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
        location.reload();
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

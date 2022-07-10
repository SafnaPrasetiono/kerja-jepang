<div>
    <div class="d-flex mb-3">
        <a href="#" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal"
            data-bs-target="#galeryModals">Tambah</a>
        <div class="ms-auto">
            <input type="text" class="form-control" placeholder="Cari Transaksi...">
        </div>
    </div>
    <div class="d-block">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Images</th>
                    <th scope="col">label</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>
                        <img src="{{ url('/images/galery/' . $item->images ) }}" class="rounded" width="100px">
                    </td>
                    <td>{{ $item->label }}</td>
                    <td>
                        {{ date("d F Y", strtotime($item->created_at)) }}
                    </td>
                    <td>
                        {{-- <a class="btn btn-outline-secondary btn-sm me-2"
                            wire:click="edit({{ $item->id_galeries }})" type="button">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i> <span
                                class="d-none d-sm-inline d-md-none d-lg-inline">Edit</span>
                        </a> --}}
                        <button wire:click="removed({{ $item->id_galeries }})" type="button"
                            class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex align-items-center">
        <p class="mb-0 border py-1 px-2 rounded">
            <span class="fw-bold">{{ $data->count() }}</span>
        </p>
        @if ($data->hasPages())
        <nav class="ms-auto">
            {{ $data->links('livewire.admin.galery.paginations') }}
        </nav>
        @endif
    </div>

    <div wire:ignore.self class="modal fade" id="galeryModals" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galeryModalsLabel">Tambah Galery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="images" class="form-label">Masukan gambar</label>
                            <input wire:model="images" type="file" name="images" id="images"
                                class="form-control @error('images') is-invalid @enderror">
                            @error('images')
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div wire:loading.flex wire:target="images" class="justify-content-center py-3">
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        @if($images)
                        <div class="mb-3 text-center">
                            <img src="{{ $images->temporaryUrl() }}" width="50%">
                        </div>
                        @endif
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="store()">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/assets/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('modalShow', function() {
            $('#galeryModals').modal('show');
        })
        document.addEventListener('modalExpand', function() {
            $('#galeryModals').modal('show');
        })
        document.addEventListener('deleteConfrim', function() {
            Swal.fire({
                    title: "Delete!",
                    text: "Are you sure to delete sub category product!!!",
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
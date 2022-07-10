<div>
    <div class="d-flex mb-3">
        @if ($type == 'loker')
        <a href="{{ route('admin.loker.create') }}" class="btn btn-outline-secondary">Tambah</a>
        @else
        <a href="{{ route('admin.magang.create') }}" class="btn btn-outline-secondary">Tambah</a>
        @endif
        <div class="ms-auto">
            <input wire:model='search' type="text" class="form-control" placeholder="Cari Data...">
        </div>
    </div>
    <div class="d-block table-responsive">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">images</th>
                    <th scope="col">Title</th>
                    <th scope="col">Post Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>
                        <img src="{{ url('/images/loker/'.$item->images) }}" width="100px" class="rounded">
                    </td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <div class="text-nowrap">
                                {{ date("d F Y", strtotime($item->created_at)) }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            @if ($type == 'loker')
                            <a href="{{ route('admin.loker.pelamar.detail', ['id' => $item->id_lokers]) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-eye fa-sm fa-fw"></i>
                            </a>
                            <a href="{{ route('admin.loker.edit', ['id' => $item->id_lokers]) }}" class="btn btn-outline-warning btn-sm mx-1">
                                <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                            </a>
                            @else
                            <a href="{{ route('admin.magang.pelamar.detail', ['id' => $item->id_lokers]) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-eye fa-sm fa-fw"></i>
                            </a>
                            <a href="{{ route('admin.magang.edit', ['id' => $item->id_lokers]) }}" class="btn btn-outline-warning btn-sm mx-1">
                                <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                            </a>
                            @endif
                            <a wire:click="removed({{ $item->id_lokers }})" href="#"
                                class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-trash fa-sm fa-fw"></i>
                            </a>
                        </div>
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
            {{ $data->links('admin.panel.paginations') }}
        </nav>
        @endif
    </div>


    <script>
        document.addEventListener('deleteConfrimed', function() {
            Swal.fire({
                    title: "Delete?",
                    text: "Are you sure to delete this product?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'Tidak',
                })
                .then((next) => {
                    if (next.isConfirmed) {
                        Livewire.emit('deleteAction');
                    } else {
                        Swal.fire("Your product is save!");
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
<div>
    <div class="d-flex mb-3">
        <div class="ms-auto">
            <input type="text" class="form-control" placeholder="Cari Transaksi...">
        </div>
    </div>
    <div class="d-block table-responsive">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>
                        {{ $item->username }}
                    </td>
                    <td>{{ $item->email }}</td>
                    <td>
                        62{{ $item->phone }}
                    </td>
                    <td>
                        <div class="text-nowrap">
                                {{ date("d F Y", strtotime($item->created_at)) }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('admin.karantina.detail', ['id' => $item->id_comers]) }}" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-eye fa-sm fa-fw"></i>
                            </a>
                            <a href="#" class="btn btn-outline-warning btn-sm mx-1">
                                <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
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
            {{ $data->links('livewire.admin.karantina.paginations') }}
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
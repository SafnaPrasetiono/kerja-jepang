<div>
    <div class="d-flex mb-3">
        <a href="{{ route('admin.qa.create') }}" class="btn btn-outline-secondary">Tambah</a>
        {{-- <button wire:click='show' type="button" class="btn btn-outline-secondary">Tambah</button> --}}
        <div class="ms-auto">
            <input wire:model='search' type="text" class="form-control" placeholder="Cari Transaksi...">
        </div>
    </div>
    <div class="d-block">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pertanyaan</th>
                    {{-- <th scope="col">Jawaban</th> --}}
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td><?php echo $item->question ?></td>
                    {{-- <td><?php echo $item->answer ?></td> --}}
                    <td>
                        {{ date("d F Y", strtotime($item->created_at)) }}
                    </td>
                    <td>
                        <button wire:click='show({{$item->id_qa}})' type="button"
                            class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-eye fa-sm fa-fw"></i>
                        </button>
                        <a href="{{ route('admin.qa.edit', ['id' => $item->id_qa]) }}" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                        </a>
                        <button wire:click="removed({{ $item->id_qa }})" type="button"
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
            {{ $data->links('livewire.admin.qa.paginations') }}
        </nav>
        @endif
    </div>


    <div wire:ignore.self class="modal fade" id="MyModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        @if ($edit == false)
                        <span>Create Q&A</span>
                        @else
                        <span>Edit Q&A</span>
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="question" class="form-label">Pertanyaan</label>
                        <div class="alert alert-secondary"><?php echo $question ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="answer" class="form-label">Jawaban</label>
                        <div class="alert alert-secondary">
                            <?php echo $answer ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="about" class="form-label">Topik Pembahasan</label>
                        <div class="alert alert-secondary">
                            <?php echo $about ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('ModalShow', () => {
            $('#MyModal').modal('show');
        });
        document.addEventListener('ModalExpand', () => {
            $('#MyModal').modal('hide');
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
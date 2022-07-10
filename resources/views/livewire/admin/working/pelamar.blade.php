<div>
    <div class="d-flex mb-3">
        <div class="position-relative ms-auto">
            <input type="text" class="form-control" placeholder="Cari Pelamar...">
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <td scope="row">{{ $index + 1 }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                    <td>
                        <div class="d-flex">
                            <a wire:click='detail({{$item->id_proposal}})' href="#"
                                class="btn btn-outline-primary btn-sm me-1">
                                <i class="fas fa-eye fa-sm fa-fw"></i>
                            </a>
                            <a href="{{ route('admin.loker.pelamar.detail', ['id' => $item->id_proposal]) }}"
                                class="btn btn-outline-primary btn-sm me-1">
                                <i class="fas fa-edit fa-sm fa-fw"></i>
                            </a>
                            <a href="{{ route('index.user.public', ['key' => $item->key]) }}"
                                class="btn btn-outline-primary btn-sm" target="blank">
                                <i class="fas fa-globe fa-sm fa-fw"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- <div wire:ignore.self class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Lamaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="resume">Username</label>
                        <p class="form-control border-primary">
                            {{ $username }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select wire:model="status" name="status" id="status" class="form-select">
                            <option value="" selected>Lakukan Aksi</option>
                            <option value="process">process</option>
                            <option value="review">review</option>
                            <option value="interview">Interview</option>
                            <option value="accepted">accepted</option>
                            <option value="rejected">rejected</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editor" class="form-label">Beritahu User</label>
                        <textarea wire:model='content' name="content" id="editors" rows="5"
                            class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button wire:click.prevent="store" type="button" class="btn btn-primary" wire:target='store'
                        wire:loading.remove>Proses</button>
                    <button class="btn btn-primary" type="button" disabled wire:loading.block wire:target='store'
                        wire:target="store">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </div>
        </div>
    </div> --}}

    <div wire:ignore.self class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Lamaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="resume">Username</label>
                        <p class="form-control border-primary">
                            {{ $username }}
                        </p>
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="resume">Resume</label>
                        <p class="form-control border-primary">
                            <a href="{{ url('/documents/resume/'. $resume) }}"
                                class="link-primary text-decoration-none">{{ $resume }}</a>
                        </p>
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="resume">Certificate</label>
                        <p class="form-control border-primary">
                            <a href="{{ url('/documents/resume/'. $certificate) }}"
                                class="link-primary text-decoration-none">{{ $certificate }}</a>
                        </p>
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="resume">Deskripsi Lamaran</label>
                        <p class="form-control border-primary">
                            {{ $description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('showModals', function () {
            $('#myModal').modal('show');
        });
        document.addEventListener('expandModal', function () {
            $('#myModal').modal('hide');
        });
        document.addEventListener('showEditModals', function () {
            $('#editModal').modal('show');
        });
        document.addEventListener('expandEditModal', function () {
            $('#editModal').modal('hide');
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
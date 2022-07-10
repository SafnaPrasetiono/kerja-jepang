<div>
    <div class="d-block bg-white rounded shadow mb-4">
        <div class="d-flex align-items-center px-4 py-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Pendidikan</p>
            <button wire:click='show' type="button" class="btn link-primary text-decoration-none ms-auto">
                <i class="fas fa-plus fa-sm fa-fw"></i> Tambah
            </button>
        </div>
        <div class="p-4">
            @if($data->count() != 0)
            @foreach ($data as $item)
            <div class="d-flex mb-3">
                <div class="">
                    <p class="fs-5 fw-bold mb-0 text-capitalize">{{$item->institution}}</p>
                    <p class="mb-1">{{ $item->study }}</p>
                    <p class="mb-0 text-secondary"><span class="text-capitalize">{{ $item->month_start }}</span> {{
                        $item->years_start }} - <span class="text-capitalize">{{ $item->month_end }}</span> {{
                        $item->years_end }}</p>
                </div>
                <div class="d-flex align-items-start ms-auto">
                    <button wire:click='edit({{ $item->id_educations }})' type="button" class="btn btn-outline-secondary">
                        <i class="fas fa-pencil-alt fa-sm fa-fw"></i> Edit
                    </button>
                    <button wire:click='remove({{ $item->id_educations }})' type="button" class="btn btn-outline-danger ms-2">
                        <i class="fas fa-trash fa-sm fa-fw"></i> Hapus
                    </button>
                </div>
            </div>
            @endforeach
            @else
            <div class="d-flex flex-column flex-md-row mb-3">
                <div class="text-center mb-3 mb-md-0">
                    <i class="fas fa-engine-warning fa-4x fa-fw"></i>
                </div>
                <div class="ms-0 ms-md-3 text-center text-md-start">
                    <p class="fs-4 fw-bold mb-0 ">Oops, Belum ada Pendidikan</p>
                    <p class="fs-5">Tambahkan Pendidikan</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="education" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Pendidikan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="institution">Institusi</label>
                        <input wire:model="institution" type="text"
                            class="form-control @error('institution') is-invalid @enderror" wire:target="store"
                            wire:loading.class="placeholder disabled">
                        @error('institution')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label class="form-label" for="degree">Gelar</label>
                        <input wire:model="degree" type="text"
                            class="form-control @error('degree') is-invalid @enderror" wire:target="store"
                            wire:loading.class="placeholder disabled">
                        @error('degree')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="study" class="form-label">Bidang Studi</label>
                        <input wire:model="study" type="text" class="form-control @error('study') is-invalid @enderror"
                            wire:target="store" wire:loading.class="placeholder disabled">
                        @error('study')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="born" class="form-label">Tanggal Mulai</label>
                        <div class="row g-2">
                            <div class="col-12 col-md-6">
                                <select wire:model='month_start' class="form-select @error('month_start') is-invalid @enderror">
                                    <option selected value=''>Bulan</option>
                                    <option value='janaury'>Janaury</option>
                                    <option value='february'>February</option>
                                    <option value='march'>March</option>
                                    <option value='april'>April</option>
                                    <option value='may'>May</option>
                                    <option value='june'>June</option>
                                    <option value='july'>July</option>
                                    <option value='august'>August</option>
                                    <option value='september'>September</option>
                                    <option value='october'>October</option>
                                    <option value='november'>November</option>
                                    <option value='december'>December</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <select wire:model='years_start' class="form-select @error('years_start') is-invalid @enderror">
                                    <option selected value=''>Tahun</option>
                                    @foreach (range(1950, date("Y")) as $itemys)
                                    <option value="{{ $itemys }}">{{ $itemys }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('month_start')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        @error('years_start')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="born" class="form-label">Tanggal Berakhir</label>
                        <div class="row g-2">
                            <div class="col-12 col-md-6">
                                <select wire:model='month_end' class="form-select @error('month_end') is-invalid @enderror">
                                    <option selected value=''>Bulan</option>
                                    <option value='janaury'>Janaury</option>
                                    <option value='february'>February</option>
                                    <option value='march'>March</option>
                                    <option value='april'>April</option>
                                    <option value='may'>May</option>
                                    <option value='june'>June</option>
                                    <option value='july'>July</option>
                                    <option value='august'>August</option>
                                    <option value='september'>September</option>
                                    <option value='october'>October</option>
                                    <option value='november'>November</option>
                                    <option value='december'>December</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <select wire:model='years_end' class="form-select @error('years_end') is-invalid @enderror">
                                    <option selected value=''>Tahun</option>
                                    @foreach (range(1950, date("Y")) as $itemye)
                                    <option value="{{ $itemye }}">{{ $itemye }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('month_end')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        @error('years_end')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input wire:model='status' class="form-check-input" type="checkbox" value="2"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Saya masih bersekolah di sini
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="info" class="form-label">Informasi Tambahan</label>
                        <textarea wire:model='info' name="info" id="info" cols="30" rows="3"
                            class="form-control"></textarea>
                        @error('info')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" wire:click="store" wire:loading.attr="disabled">
                        <span wire:target="store" wire:loading class="spinner-border spinner-border-sm"></span>
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('deleteEducations', function () {
        Swal.fire({
            title: "Apa anda yakin?",
            text: "Menghapus data pedidikan anda!!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'Yes, delete!',
            cancelButtonText: 'Tidak',
        })
            .then((next) => {
                if (next.isConfirmed) {
                    Livewire.emit('deleteActionEducations');
                }
            });
    })

    document.addEventListener('showEducation', function () {
        $('#education').modal('show');
    });

    document.addEventListener('expandEducation', function () {
        $('#education').modal('hide');
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
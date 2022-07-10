<div>
	<div class="d-flex align-items-center py-3">
		<a class="btn btn-primary btn-sm px-3" href="{{ route('admin.banners.create') }}">Tambah</a>
	</div>
	<div class="table-responsive">
		<table class="table table-borderless">
			<thead class="alert-secondary">
				<tr>
					<th>No</th>
					<th>Dektop</th>
					<th>Phone</th>
					<th>Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $index => $item)
				<tr>
					<th>{{ $index + 1 }}</th>
					<td><img src="{{ url('/images/banner/'. $item->images_desktop) }}" alt="" width="120px" class="rounded"></td>
					<td><img src="{{ url('/images/banner/'. $item->images_phone) }}" alt="" width="120px" class="rounded"></td>
                    <td>{{ $item->title }}</td>
					<td>
						<button wire:click='removed({{ $item->id_banners }})' class="btn btn-danger btn-sm">
							<i class="fas fa-trash fa-sm fa-fw"></i>
						</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div wire:ignore.self class="modal fade" id="bannerModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">banner</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="banner-phone" class="form-label">Banner Phone</label>
						@if ($bannerSM)
						<img src="{{ $bannerSM->temporaryUrl() }}" class="img-fluid rounded mb-2">
						@endif
						<div class="justify-content-center" wire:loading.flex wire:target='bannerSM'>
							<div class="spinner-border" role="status">
								<span class="visually-hidden">Loading...</span>
							</div>
						</div>
						<input wire:model='bannerSM' type="file" name="banner-sm"
							class="form-control @error('bannerSM') is-invalid @enderror" id="banner-phone">
						@error('bannerSM')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
					<div class="mb-3">
						<label for="banner-desktop" class="form-label">Banner Desktop</label>
						@if ($bannerLG)
						<img src="{{ $bannerLG->temporaryUrl() }}" class="img-fluid rounded mb-2">
						@endif
						<div class="justify-content-center" wire:loading.flex wire:target='bannerLG'>
							<div class="spinner-border" role="status">
								<span class="visually-hidden">Loading...</span>
							</div>
						</div>
						<input wire:model='bannerLG' type="file" name="banner-lg" id="banner-desktop"
							class="form-control @error('bannerLG') is-invalid @enderror">
						@error('bannerLG')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button wire:click='store' type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ url('/dist/style/js/jquery.js') }}"></script>
	<script>
		document.addEventListener('deleteConfrimed', function() {
        Swal.fire({
                title: "Apa anda yakin?",
                text: "Menghapus data banner ini!!!",
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

		window.addEventListener('bannerModalShow', () => {
			$('#bannerModal').modal('show');
		});
		window.addEventListener('bannerModalExpand', () => {
			$('#bannerModal').modal('hide');
		});

	</script>
</div>
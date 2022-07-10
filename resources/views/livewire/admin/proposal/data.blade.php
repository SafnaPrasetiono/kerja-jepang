<div>
    <div class="d-flex mb-3">
        <div class="ms-auto">
            <input type="text" class="form-control" placeholder="Cari Data...">
        </div>
    </div>
    <div class="d-block">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Lamaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    {{-- <td>
                        <img src="{{ url('/images/loker/'.$item->images) }}" width="100px" class="rounded">
                    </td> --}}
                    <td>{{ $item->title }}</td>
                    <td>
                        @if($item->status == 'process')
                        <span class="badge rounded-pill text-white bg-primary">Proses</span>
                        @elseif($item->status == 'review')
                        <span class="badge rounded-pill text-white bg-info">Dalam Review</span>
                        @elseif($item->status == 'interview')
                        <span class="badge rounded-pill text-white bg-warning">Interview</span>
                        @elseif($item->status == 'accepted')
                        <span class="badge rounded-pill text-white bg-success">Diterima</span>
                        @elseif($item->status == 'rejected')
                        <span class="badge rounded-pill text-white bg-secondary">Belum Cocok</span>
                        @endif    
                    </td>
                    <td>
                        {{ date("d F Y", strtotime($item->created_at)) }}
                    </td>
                    <td>
                        <button wire:click='action({{$item->id_proposal}})' class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-pencil-alt fa-sm fa-fw"></i>
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
            {{ $data->links('livewire.admin.loker.paginations') }}
        </nav>
        @endif
    </div>

    
</div>

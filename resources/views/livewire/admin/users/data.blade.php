<div>
    <div class="d-flex mb-3">
        <div class="ms-auto">
            <input wire:model='search' type="text" class="form-control" placeholder="Cari Transaksi...">
        </div>
    </div>
    <div class="d-block mb-4">
        @foreach ($data as $index => $item)
        <div class="d-flex align-items-center border rounded p-2 mb-2">
            @if ($item->avatar == 'sample-avatar.png')
            <img src="{{ url('/images/avatar/' . $item->avatar ) }}" class="rounded-circle" width="58px" height="58px">
            @else
            <img src="{{ url('/images/avatar/user/' . $item->avatar ) }}" class="rounded-circle" width="58px"
                height="58px">
            @endif
            <div class="ms-3">
                <p class="fw-bold mb-0">
                    {{ $item->username }}
                </p>
                <span>
                    {{ $item->email }}
                </span>
            </div>
            <ul class="nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-envelope fa-sm fa-fw"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-globe fs-sm fa-fw"></i>
                    </a>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
    <div class="d-flex align-items-center">
        <p class="mb-0 border py-1 px-2 rounded">
            <span class="fw-bold">{{ $data->count() }}</span>
        </p>
        @if ($data->hasPages())
        <nav class="ms-auto">
            {{ $data->links('livewire.admin.users.paginations') }}
        </nav>
        @endif
    </div>
</div>
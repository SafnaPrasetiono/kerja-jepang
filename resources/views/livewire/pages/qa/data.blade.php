<div>
    <div class="py-3">
        <div class="d-flex">
            <div class="" style="width: 300px;">
                <input wire:model='search' type="text" class="form-control" placeholder="Cari...">
            </div>
        </div>
    </div>
    <div class="py-4">
        @foreach ($data as $index => $item)
        <div class="mb-3">
            <button class="btn w-100 text-start border rounded-0 py-3 mb-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseExample-{{ $index }}">
                <?php echo $item->question ?>
            </button>
            <div class="collapse" id="collapseExample-{{ $index }}">
                <div class="py-3 px-2">
                    <?php echo $item->answer ?>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="py-4">
        <div class="d-flex align-items-center">
            @if ($data->hasPages())
            <nav class="ms-auto">
                {{ $data->links('livewire.admin.qa.paginations') }}
            </nav>
            @endif
        </div>
    </div>
</div>
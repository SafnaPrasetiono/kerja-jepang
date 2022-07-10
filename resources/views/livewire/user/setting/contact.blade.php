<div>
    <div class="d-block bg-white rounded shadow">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Kontak Kamu</p>
        </div>
        <div class="px-3 pt-4 pb-5">
            <label class="form-label">Ubah Kontak kamu</label>
            <div class="input-group align-items-center position-relative mb-3">
                <input wire:model='phone' type="text" class="form-control rounded-0 ps-5">
                <span class="bg-white position-absolute ms-2 border-right" style="z-index: 9;">+62</span>
            </div>
            <button wire:click='store' class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

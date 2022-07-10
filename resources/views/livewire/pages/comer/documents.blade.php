<div>
    <div class="d-block rounded border mb-3">
        <div class="py-2 px-3 border-bottom">
            <p class="mb-0 fw-bold">Upload Document</p>
        </div>
        <div class="p-3">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label for="ktp" class="form-label">Upload KTP</label>
                    <label for="ktp" class="foto-upload mb-2">
                        @if ($ktp)
                        <img src="{{ $ktp->temporaryUrl() }}" class="img-fluid">
                        @else
                        <i class="fas fa-plus fa-3x fa-fw text-secondary" wire:loading.remove wire:target='ktp'></i>
                        @endif
                        <div class="loading-stage" wire:loading.flex wire:target='ktp'>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                        </div>
                    </label>
                    <input wire:model='ktp' type="file" name="ktp" id="ktp" class="form-control  @error('ktp') is-invalid @enderror">
                    @error('ktp')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="kk" class="form-label">Upload KK</label>
                    <label for="kk" class="foto-upload mb-2">
                        @if ($kk)
                        <img src="{{ $kk->temporaryUrl() }}" class="img-fluid">
                        @else
                        <i class="fas fa-plus fa-3x fa-fw text-secondary" wire:loading.remove wire:target='kk'></i>
                        @endif
                        <div class="loading-stage" wire:loading.flex wire:target='kk'>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                        </div>
                    </label>
                    <input wire:model='kk' type="file" name="kk" id="kk" class="form-control  @error('kk') is-invalid @enderror">
                    @error('kk')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="photo" class="form-label">Upload foto</label>
                    <label for="photo" class="foto-upload mb-2">
                        @if ($photo)
                        <img src="{{ $photo->temporaryUrl() }}" class="img-fluid">
                        @else
                        <i class="fas fa-plus fa-3x fa-fw text-secondary" wire:loading.remove wire:target='photo'></i>
                        @endif
                        <div class="loading-stage" wire:loading.flex wire:target='photo'>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                        </div>
                    </label>
                    <input wire:model='photo' type="file" name="photo" class="form-control  @error('photo') is-invalid @enderror" id="photo">
                    @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="akte" class="form-label">Upload akte kelahiran</label>
                    <label for="akte" class="foto-upload mb-2">
                        @if ($akte)
                        <img src="{{ $akte->temporaryUrl() }}" class="img-fluid">
                        @else
                        <i class="fas fa-plus fa-3x fa-fw text-secondary" wire:loading.remove wire:target='akte'></i>
                        @endif
                        <div class="loading-stage" wire:loading.flex wire:target='akte'>
                            <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                        </div>
                    </label>
                    <input wire:model='akte' type="file" name="akte" class="form-control  @error('akte') is-invalid @enderror" id="akte">
                    @error('akte')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

            </div>
        </div>
    </div>
</div>
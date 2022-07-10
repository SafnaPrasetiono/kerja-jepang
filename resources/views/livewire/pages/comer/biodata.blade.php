<div>
    <div class="d-block rounded border mb-3">
        <div class="py-2 px-3 border-bottom">
            <p class="mb-0 fw-bold">Biodata Lengkap</p>
        </div>
        <div class="p-3">
            <div class="row g-3">
                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input wire:model='username' type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model='email' id="email" class="form-control @error('email') is-invalid @enderror">
                    <input type="text" name="email" value="{{ $email }}" class="d-none">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="born" class="form-label">Tanggal Lahir</label>
                    <input wire:model='born' type="date" name="born" id="born" class="form-control @error('born') is-invalid @enderror">
                    @error('born')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select wire:model='gender' name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror">
                        <option value="">Pilih jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="wanita">wanita</option>
                    </select>
                    @error('gender')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input wire:model='phone' type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" aria-describedby="basic-addon1">
                    </div>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

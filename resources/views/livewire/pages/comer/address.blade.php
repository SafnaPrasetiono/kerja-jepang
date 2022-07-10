<div>
    <div class="d-block rounded border mb-3">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Alamat Lengkap</p>
        </div>
        <div class="p-3">
            <div class="row g-2">
                <div class="col-12 col-md-6">
                    <label for="province" class="form-label">Provinsi</label>
                    {{-- <input type="text" name="province" id="province" class="form-control @error('province') is-invalid @enderror"> --}}
                    <select wire:model='province_id' name="province_id" id="province" class="form-select">
                        <option value="">Pilih provinsi</option>
                        @foreach ($province as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('province')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="city" class="form-label">Kota/kabupaten</label>
                    {{-- <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror"> --}}
                    <select wire:model='city_id' name="city_id" id="city" class="form-select" @if(!$province_id) disabled @endif>
                        <option value="">Pilih Kota</option>
                        @if($province_id)
                        @foreach ($getcity as $items)
                        <option value="{{$items->id}}">{{ $items->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('city')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="kecamatan" class="form-label">kecamatan</label>
                    {{-- <input type="text" name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror"> --}}
                    <select wire:model='district_id' name="district_id" id="kecamatan" class="form-select" @if(!$city_id) disabled @endif>
                        <option value="">Pilih kecamatan</option>
                        @if($city_id)
                        @foreach ($districts as $itemd)
                        <option value="{{$itemd->id}}">{{ $itemd->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('kecamatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="kelurahan" class="form-label">kelurahan</label>
                    {{-- <input type="text" name="district" id="district" class="form-control @error('district') is-invalid @enderror"> --}}
                    <select wire:model='villages_id' name="village_id" id="kelurahan" class="form-select" @if(!$district_id) disabled @endif>
                        <option value="">Pilih kelurahan</option>
                        @if($district_id)
                        @foreach ($villages as $itemv)
                        <option value="{{$itemv->id}}">{{ $itemv->name }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('district')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="postal_code" class="form-label">Kode Pos</label>
                    <input type="text" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code">
                    @error('postal_code')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="country" class="form-label">Warga Negara</label>
                    <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" id="country">
                    @error('country')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Alamat Lengkap</label>
                    <textarea name="address" id="address" rows="4" class="form-control @error('address') is-invalid @enderror"></textarea>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script src="http://api.iksgroup.co.id/apijs/lokasiapi.js"></script>
    <script>
        var render=createwidgetlokasi("provinsi","kabupaten","kecamatan","kelurahan");
        console.log(render);
    </script>
</div>

@extends('admin.layouts.panel')

@section('head')
<title>kerjajepang - Pendaftaran karantina</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Detail Pendaftaran Karantina</p>
        </div>
        <div class="d-block p-3">
            <div class="d-flex align-items-center p-3 border rounded mb-3">
                <div class="ms-0 ms-md-3">
                    <p class="fw-bold mb-0 text-capitalize fs-4">{{ $comer->username }}</p>
                    <p class="mb-0 text-secondary">{{ $comer->email }}</p>
                </div>
            </div>
            <div class="d-block rounded border mb-3">
                <div class="py-2 px-3 border-bottom">
                    <p class="mb-0 fw-bold">Biodata Lengkap</p>
                </div>
                <div class="p-3">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" id="username" class="form-control" value="{{ $comer->username }}"
                                readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" class="form-control" value="{{ $comer->email }}" disabled readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="born" class="form-label">Tanggal Lahir</label>
                            <input name="born" id="born" class="form-control" value="{{ $comer->born }}" disabled
                                readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="gender" class="form-label">Jenis Kelamin</label>
                            <div class="form-control" readonly>
                                {{ $comer->gender }}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input name="phone" class="form-control" id="phone" value="{{ $comer->phone }}" disabled
                                    readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-block rounded border mb-3">
                <div class="p-3 border-bottom">
                    <p class="mb-0 fw-bold">Alamat Lengkap</p>
                </div>
                <div class="p-3">
                    <div class="row g-2">
                        <div class="col-12 col-md-6">
                            <label for="province" class="form-label">Provinsi</label>
                            <input type="text" name="province" id="province" class="form-control"
                                value="{{ $address->province }}" disabled readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" name="city" id="city" class="form-control" value="{{ $address->city }}"
                                disabled readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="kelurahan" class="form-label">Kelurahan</label>
                            <input type="text" name="kelurahan" id="kelurahan" class="form-control"
                                value="{{ $address->district }}" disabled readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="district" class="form-label">Kecamatan</label>
                            <input type="text" name="district" id="district" class="form-control"
                                value="{{ $address->village }}" disabled readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="postal_code" class="form-label">Kode Pos</label>
                            <input type="text" name="postal_code" class="form-control"
                                value="{{ $address->postal_code }}" disabled readonly id="postal_code">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="country" class="form-label">Warga Negara</label>
                            <input type="text" name="country" class="form-control" value="{{ $address->country }}"
                                disabled readonly id="country">
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Alamat Lengkap</label>
                            <textarea name="address" id="address" rows="4" class="form-control" disabled
                                readonly>{{ $address->address }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-block rounded border mb-3">
                <div class="py-2 px-3 border-bottom">
                    <p class="mb-0 fw-bold">Upload Document</p>
                </div>
                <div class="p-3">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="ktp" class="form-label">KTP FILES</label>
                            <div class="form-control text-center">
                                <img src="{{ url('/images/comer/' . $documents->ktp) }}" alt="ktp" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="ktp" class="form-label">KK FILES</label>
                            <div class="form-control text-center">
                                <img src="{{ url('/images/comer/' . $documents->kk) }}" alt="kk" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="ktp" class="form-label">AKTE FILES</label>
                            <div class="form-control text-center">
                                <img src="{{ url('/images/comer/' . $documents->akte) }}" alt="akte" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="ktp" class="form-label">FOTO FILES</label>
                            <div class="form-control text-center">
                                <img src="{{ url('/images/comer/' . $documents->photo) }}" alt="foto" class="img-fluid">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="d-block rounded border mb-3">
                <div class="py-2 px-3 border-bottom">
                    <p class="mb-0 fw-bold">action</p>
                </div>
                <div class="p-3">
                    <a class="btn btn-success w-100 mb-3"
                        href="https://api.whatsapp.com/send?phone=62{{ $comer->phone }}" target="blank">KIRIMKAN PESAN WHATSAPP</a>
                    <button class="btn btn-primary w-100 mb-3">KIRIMKAN PESAN EMAIL</button>
                    <a href="{{ route('admin.karantina.pdf', ['id' => $comer->id_comers ]) }}" class="btn btn-outline-secondary w-100 mb-3">
                        <i class="fas fa-file-pdf fa-sm fa-fw"></i>EXPORT TO PDF
                    </a>
                    <button class="btn btn-outline-secondary w-100 mb-3">
                        <i class="fas fa-file-word fa-sm  fa-fw"></i> EXPORT TO DOC
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
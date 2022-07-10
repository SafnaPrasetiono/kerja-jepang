<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kerjajepang - Pendaftaran karantina</title>
    <link rel="stylesheet" href="{{ url('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/admin/panel.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/style/css/animated.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/dist/owl/css/owl.carousel.min.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="d-block">
            <div class="p-3 border-bottom">
                <p class="fs-4 fw-bold mb-0">Detail Pendaftaran Karantina</p>
            </div>
            <div class="d-block p-3">
                <div class="d-flex align-items-center p-3 border rounded mb-3">
                    @if ($user->avatar == 'sample-avatar.png')
                    <img src="{{ url('/images/avatar/' . $user->avatar ) }}" class="rounded-circle" width="84px"
                        height="84px">
                    @else
                    <img src="{{ url('/images/avatar/user/' . $user->avatar ) }}" class="rounded-circle" width="84px"
                        height="84px">
                    @endif
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
                                    value="{{ $address->kelurahan }}" disabled readonly>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="district" class="form-label">Kecamatan</label>
                                <input type="text" name="district" id="district" class="form-control"
                                    value="{{ $address->district }}" disabled readonly>
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
    
            </div>
        </div>
    </div>

    <script src="{{ url('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ url('/dist/style/js/popper.js') }}"></script>
    <script src="{{ url('/dist/app/js/app.js') }}"></script>
    <script src="{{ url('/dist/style/js/alert.js') }}"></script>
    <script src="{{ url('/dist/style/js/admin/panel.js') }}"></script>
    <script src="{{ url('/dist/style/js/admin/chart.js') }}"></script>
</body>
</html>
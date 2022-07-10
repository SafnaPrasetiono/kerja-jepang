@extends('auth.layouts.panel')

@section('head')
<title>kopitu - Selamat datang di kerja jepang</title>
@endsection

@section('pages')
<div class="box-auth">
    <div class="box-head">
        <h3 class="text-orange fw-bold">DAFTAR</h3>
        <p class="mb-0">Selamat datang di kerjajepang.com</p>
    </div>
    <div class="box-body">
        <form method="POST" action="{{ route('admin.register.store') }}">
            @csrf
            <div class="mb-2">
                <input name="username" type="text" class="form-control  @error('username') is-invalid @enderror"
                    placeholder="Username">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="Email"
                    placeholder="Email Address">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    id="Password" placeholder="Password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input name="password_confirmation" type="password"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    placeholder="Confirmation Password">
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <select name="region" id="region" class="form-select">
                    <option value="" selected>Region</option>
                    <option value="id">Indonesia</option>
                    <option value="en">English</option>
                    <option value="jp">Jepang</option>
                </select>
                @error('region')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-outline-primary form-control">REGISTER</button>
        </form>
    </div>
    <div class="box-footer">
        <div class="d-block text-center text-secondary">
            <p class="mb-0">Don't heave the account click here</p>
            <a href="{{ route('login') }}" class="link-orange text-decoration-none text-uppercase">LOGIN</a>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection
@extends('auth.layouts.panel')

@section('head')
    <title>kopitu - Selemat datang di kerjajepang.com</title>
@endsection

@section('pages')
    <div class="box-auth">
        <div class="box-head">
            <h3 class="text-orange fw-bold">MASUK</h3>
            <p class="mb-0">Selamat datang di Kerja Jepang</p>
        </div>
        <div class="box-body">
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-2">
                    <label for="Email" class="form-label">Email Anda</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="Email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="Password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between mb-3">
                    {{-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div> --}}
                    <a href="{{ route('password.set') }}" class="link-orange text-decoration-none ms-auto me-1">Get Password?</a>
                </div>
                <button type="submit" class="btn btn-outline-secondary form-control">MASUK</button>
            </form>
        </div>
        <div class="box-footer">
            <div class="d-block mb-3 text-center text-secondary">
                <span>-- ATAU --</span>
            </div>
            <div class="d-block mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('login.google') }}" class="btn btn-outline-secondary align-items-center w-100">
                        <img src="{{ url('/images/icons/google.png') }}" alt="google" width="24px"> Login dengan google
                    </a>
                </div>
            </div>
            <div class="d-block text-center text-secondary">
                <p class="mb-0">Tidak punya akun klik dibawah sini.</p>
                <a href="{{ route('register') }}" class="link-orange text-decoration-none text-uppercase">SignUp</a>
            </div>
        </div>
    </div>    
@endsection

@section('script')
    
@endsection
@extends('layouts.app')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="login-right" style="position:relative;">
        <!-- tombol kembali -->
        <div style="position:absolute; top:10px; right:10px;">
            <a href="{{ url('/') }}" style="position:absolute; top:10px; right:10px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width:20px; height:20px;">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 8 8 12 12 16"></polyline>
                    <line x1="16" y1="12" x2="8" y2="12"></line>
                </svg>
            </a>
        </div>
        <div class="login-right-wrap">
            <h1> SIAKAD SMK NU Pelita Nusantara</h1>
            <p class="account-subtitle">Belum Mempunyai Akun? <a href="{{ route('register') }}">Buat Akun</a></p>
            <h2> Masuk</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email<span class="login-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                </div>
                <div class="form-group">
                    <label>Kata Sandi <span class="login-danger">*</span></label>
                    <input type="password" class="form-control pass-input @error('password') is-invalid @enderror"
                        name="password">
                    <span class="profile-views feather-eye toggle-password"></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Masuk</button>
                </div>
            </form>
        </div>
    </div>
@endsection

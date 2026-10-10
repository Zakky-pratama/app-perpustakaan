@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 0 auto;">
    <h1>👤 Profil Saya</h1>

    @if (session('success'))
        <div style="background: #d1fae5; color: #065f46; padding: 10px 14px; border-radius: 4px; margin-bottom: 16px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Info Profil --}}
    <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,.1); margin-bottom: 24px;">
        <h3>Informasi Akun</h3>
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
    </div>

    {{-- Form Ganti Password --}}
    <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,.1);">
        <h3>Ganti Password</h3>
        <form action="{{ route('profile.password.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 12px;">
                <label for="password_lama" style="display:block; font-weight:bold; margin-bottom:4px;">Password Lama</label>
                <input type="password" name="password_lama" id="password_lama" style="width:100%; padding:8px; box-sizing:border-box;">
                @error('password_lama')
                    <div style="color:#b91c1c; font-size:14px; margin-top:4px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 12px;">
                <label for="password" style="display:block; font-weight:bold; margin-bottom:4px;">Password Baru</label>
                <input type="password" name="password" id="password" style="width:100%; padding:8px; box-sizing:border-box;">
                @error('password')
                    <div style="color:#b91c1c; font-size:14px; margin-top:4px;">{{ $message }}</div>
                @enderror
            </div>

            <div style="margin-bottom: 16px;">
                <label for="password_confirmation" style="display:block; font-weight:bold; margin-bottom:4px;">Konfirmasi Password Baru</label>
                <input type="password" name="password_confirmation" id="password_confirmation" style="width:100%; padding:8px; box-sizing:border-box;">
            </div>

            <button type="submit" style="padding: 8px 16px; background: #2563eb; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                Perbarui Password
            </button>
        </form>
    </div>
</div>
@endsection
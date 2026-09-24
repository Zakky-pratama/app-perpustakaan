@extends('layouts.app')

@section('title', 'Edit Data Anggota')

@section('content')
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar anggota</a></p>

    <h1>Edit Data Anggota</h1>

    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 12px;">
            <label for="nama">Nama Lengkap:</label><br>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $member->nama) }}" style="width: 100%; max-width: 400px; padding: 6px;">
            @error('nama') <div style="color: red; font-size: 13px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="nim">NIM:</label><br>
            <input type="text" name="nim" id="nim" value="{{ old('nim', $member->nim) }}" style="width: 100%; max-width: 400px; padding: 6px;">
            @error('nim') <div style="color: red; font-size: 13px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email', $member->email) }}" style="width: 100%; max-width: 400px; padding: 6px;">
            @error('email') <div style="color: red; font-size: 13px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="nomor_telepon">No. Telepon / HP:</label><br>
            <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ old('nomor_telepon', $member->nomor_telepon) }}" style="width: 100%; max-width: 400px; padding: 6px;">
            @error('nomor_telepon') <div style="color: red; font-size: 13px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="alamat">Alamat:</label><br>
            <textarea name="alamat" id="alamat" rows="3" style="width: 100%; max-width: 400px; padding: 6px;">{{ old('alamat', $member->alamat) }}</textarea>
            @error('alamat') <div style="color: red; font-size: 13px;">{{ $message }}</div> @enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label for="status">Status:</label><br>
            <select name="status" id="status" style="padding: 6px;">
                <option value="aktif" {{ old('status', $member->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status', $member->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
            @error('status') <div style="color: red; font-size: 13px;">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn">Perbarui Anggota</button>
    </form>
@endsection
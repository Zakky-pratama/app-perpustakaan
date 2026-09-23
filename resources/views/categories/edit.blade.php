@extends('layouts.app')

  @section('title', 'Edit Kategori')

  @section('content')
      <p><a href="{{ route('categories.index') }}">&larr; Kembali ke daftar kategori</a></p>

      <h1>Edit Kategori</h1>

      <form action="{{ route('categories.update', $category->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div style="margin-bottom: 12px;">
              <label for="nama_kategori">Nama Kategori:</label><br>
              <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori', $category->nama_kategori) }}">
              @error('nama_kategori')
                  <div style="color: red; font-size: 13px;">{{ $message }}</div>
              @enderror
          </div>

          <div style="margin-bottom: 16px;">
              <label for="deskripsi">Deskripsi (opsional):</label><br>
              <textarea name="deskripsi" id="deskripsi" rows="4" style="width: 100%;">{{ old('deskripsi', $category->deskripsi) }}</textarea>
              @error('deskripsi')
                  <div style="color: red; font-size: 13px;">{{ $message }}</div>
              @enderror
          </div>

          <button type="submit" class="btn">Perbarui</button>
      </form>
  @endsection
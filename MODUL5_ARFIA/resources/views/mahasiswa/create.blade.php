@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $nav }}</h1>

    <!-- Form Tambah Mahasiswa -->
    <div class="card">
        <div class="card-header">
            Tambah Mahasiswa Baru
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                
                <!-- NIM -->
                <div class="form-group mb-3">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" required>
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nama Mahasiswa -->
                <div class="form-group mb-3">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" value="{{ old('nama_mahasiswa') }}" required>
                    @error('nama_mahasiswa')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Jurusan -->
                <div class="form-group mb-3">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}" required>
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Dosen ID -->
                <div class="form-group mb-3">
                    <label for="dosen_id">Dosen ID</label>
                    <input type="number" name="dosen_id" id="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror" value="{{ old('dosen_id') }}" required>
                    @error('dosen_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Tombol Submit -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
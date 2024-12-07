@extends('layout.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $nav }}</h1>

    <!-- Informasi Detail Mahasiswa -->
    <div class="card">
        <div class="card-header">
            Detail Mahasiswa
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $mahasiswa->id }}</p>
            <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
            <p><strong>Nama Mahasiswa:</strong> {{ $mahasiswa->nama_mahasiswa }}</p>
            <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
            <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
            <p><strong>Dosen ID:</strong> {{ $mahasiswa->dosen_id }}</p>
        </div>
    </div>

    <!-- Tombol Aksi -->
    <div class="mt-4">
        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">Hapus</button>
        </form>

        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a>
    </div>
</div>
@endsection
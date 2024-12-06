@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Daftar Dosen</h2>

    <!-- Pesan Sukses -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tombol Tambah Dosen -->
    <div class="mb-3">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary">
            Tambah Dosen
        </a>
    </div>

    <!-- Tabel Daftar Dosen -->
    @if($dosens->isNotEmpty())
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>NIP</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosen->id }}</td>
                <td>{{ $dosen->kode_dosen }}</td>
                <td>{{ $dosen->nama_dosen }}</td>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->no_telepon }}</td>
                <td>
                    <!-- Tombol Aksi -->
                    <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p class="text-center text-muted">Belum ada data dosen yang tersedia.</p>
    @endif
</div>
@endsection
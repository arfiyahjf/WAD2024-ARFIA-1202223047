@extends('layouts.app')

@section('content')
    <h1>Daftar Dosen</h1>
    <a href="{{ route('dosens.create') }}">Tambah Dosen</a>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Dosen</th>
                <th>Nama Dosen</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->kode_dosen }}</td>
                    <td>{{ $dosen->nama_dosen }}</td>
                    <td>{{ $dosen->email }}</td>
                    <td>
                        <a href="{{ route('dosens.show', $dosen->id) }}">Detail</a> | 
                        <a href="{{ route('dosens.edit', $dosen->id) }}">Edit</a> | 
                        <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Edit Dosen</h1>
    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Kode Dosen:</label>
        <input type="text" name="kode_dosen" value="{{ $dosen->kode_dosen }}" required><br>

        <label>Nama Dosen:</label>
        <input type="text" name="nama_dosen" value="{{ $dosen->nama_dosen }}" required><br>

        <label>NIP:</label>
        <input type="text" name="nip" value="{{ $dosen->nip }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $dosen->email }}" required><br>

        <label>Nomor Telepon:</label>
        <input type="text" name="no_telepon" value="{{ $dosen->no_telepon }}"><br>

        <button type="submit">Update</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Detail Dosen</h1>
    <p>Kode Dosen: {{ $dosen->kode_dosen }}</p>
    <p>Nama Dosen: {{ $dosen->nama_dosen }}</p>
    <p>NIP: {{ $dosen->nip }}</p>
    <p>Email: {{ $dosen->email }}</p>
    <p>Nomor Telepon: {{ $dosen->no_telepon }}</p>

    <a href="{{ route('dosens.index') }}">Kembali</a>
@endsection

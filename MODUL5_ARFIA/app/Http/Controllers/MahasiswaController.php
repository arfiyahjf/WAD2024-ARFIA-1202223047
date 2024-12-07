<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource. Tampilkan semua data mahasiswa.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        $nav = "Data Nama-nama mahasiswa";
        return view('mahasiswa.index', compact('mahasiswas', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = "Tambah mahasiswa"; // Menyediakan navigasi untuk form tambah mahasiswa
        return view('mahasiswa.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|unique:mahasiswas|numeric',
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|unique:mahasiswas|email',
            'jurusan' => 'required|string|max:255',
            'dosen_id' => 'required|integer|exists:dosen,id',
        ]);

        Mahasiswa::create($validatedData);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $nav = "Detail mahasiswa - " . $mahasiswa->nama_mahasiswa;
        return view('mahasiswa.show', compact('mahasiswa', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $nav = "Edit mahasiswa - " . $mahasiswa->nama_mahasiswa;
        return view('mahasiswa.edit', compact('mahasiswa', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $validatedData = $request->validate([
            'nim' => 'required|numeric|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'jurusan' => 'required|string|max:255',
            'dosen_id' => 'required|integer|exists:dosen,id',
        ]);

        $mahasiswa->update($validatedData);
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
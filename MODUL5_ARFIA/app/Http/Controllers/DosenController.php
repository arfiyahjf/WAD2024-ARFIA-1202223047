<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        $nav = 'Nama Dosen';
        return view('dosen.index', compact('dosens', 'nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Masukkan Nama Dosen';
        return view('dosen.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestDosen $request)
    {
        $validatedData = $request->validate([
            'kode_dosen' => 'required|unique:data_dosen,kode_dosen|max:3',
            'nama_dosen' => 'required|max:255',
            'nip' => 'required|unique:data_dosen,nip|max:20',
            'email' => 'required|email|unique:data_dosen,email|max:255',
            'no_telepon' => 'nullable|max:15',
        ]);

        Dosen::create($validatedData);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nav = 'Detail Dosen - '. $dosen->nama_dosen;
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $nav = 'Edit Dosen - '. $dosen->nama_dosen;
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateRequest $request, string $id)
    {
        $validatedData = $request->validate([
            'kode_dosen' => 'required|max:3|unique:data_dosen,kode_dosen,' . $id,
            'nama_dosen' => 'required|max:255',
            'nip' => 'required|unique:data_dosen,nip,' . $id,
            'email' => 'required|email|unique:data_dosen,email,' . $id,
            'no_telepon' => 'nullable|max:15',
        ]);

        $dosen->update($validatedData);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus');
    }
}

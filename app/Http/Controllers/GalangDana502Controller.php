<?php
// app/Http/Controllers/GalangDana502Controller.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalangDana502;

class GalangDana502Controller extends Controller
{
    public function create()
    {
        return view('galang_dana.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'judul_502' => 'required|string|max:255',
            'lembaga_502' => 'required|string|max:255',
            'akun_502' => 'required|string|max:255',
            'nominal_502' => 'required|numeric',
            'tujuan_502' => 'required|string',
        ]);

        // Simpan data
        GalangDana502::create([
            'judul' => $request->input('judul_502'),
            'lembaga' => $request->input('lembaga_502'),
            'akun' => $request->input('akun_502'),
            'nominal' => $request->input('nominal_502'),
            'tujuan' => $request->input('tujuan_502'),
        ]);

        // Redirect dengan nama rute yang benar
        return redirect()->route('form.galangdana')->with('success', 'Data berhasil disimpan!');
    }

    public function index()
    {
        $perPage = 3; 

        $data = GalangDana502::paginate($perPage);

        return view('galang_dana.index', compact('data'));
    }

    public function destroy($id)
    {
    
        $data = GalangDana502::findOrFail($id);

        // Hapus data
        $data->delete();

        return redirect()->route('galangDana.index')->with('success', 'Data berhasil dihapus!');
    }

    public function edit($id)
    {
        $galangDana = GalangDana502::findOrFail($id);
        return view('galang_dana.edit', compact('galangDana'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'judul_502' => 'required|string|max:255',
            'lembaga_502' => 'required|string|max:255',
            'akun_502' => 'required|string|max:255',
            'nominal_502' => 'required|numeric',
            'tujuan_502' => 'required|string',
        ]);

        // Temukan data berdasarkan ID
        $galangDana = GalangDana502::findOrFail($id);

        // Update data
        $galangDana->update([
            'judul' => $request->input('judul_502'),
            'lembaga' => $request->input('lembaga_502'),
            'akun' => $request->input('akun_502'),
            'nominal' => $request->input('nominal_502'),
            'tujuan' => $request->input('tujuan_502'),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('galangDana.index')->with('success', 'Data berhasil diperbarui!');
    }
  
}

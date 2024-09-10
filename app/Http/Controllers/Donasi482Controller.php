<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi482;

class Donasi482Controller extends Controller
{
    public function create()
    {
        return view('donasi482.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor' => 'required|string|max:255',
            'jenis_donasi' => 'required|string|max:255',
            'jumlah_donasi' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);
    
        // Menyimpan data ke database
        Donasi482::create([
            'nama' => $request->input('nama'),
            'nomor' => $request->input('nomor'),
            'jenis_donasi' => $request->input('jenis_donasi'),
            'jumlah_donasi' => $request->input('jumlah_donasi'),
            'keterangan' => $request->input('keterangan'),
        ]);
    
        // Redirect atau response setelah menyimpan data
        return redirect()->route('donasi482.index')->with('success', 'Donasi berhasil disimpan!');
    }
    

    public function index()
    {
        $data = Donasi482::paginate(3);
        return view('donasi482.index', compact('data'));
    }

    public function edit($id)
    {
        $donasi = Donasi482::findOrFail($id);
        return view('donasi482.edit', compact('donasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor' => 'required|string|max:255',
            'jenis_donasi' => 'required|string|max:255',
            'jumlah_donasi' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);
    
        $donasi = Donasi482::findOrFail($id);
        $donasi->update([
            'nama' => $request->input('nama'),
            'nomor' => $request->input('nomor'),
            'jenis_donasi' => $request->input('jenis_donasi'),
            'jumlah_donasi' => $request->input('jumlah_donasi'),
            'keterangan' => $request->input('keterangan'),
        ]);
    
        return redirect()->route('donasi482.index')->with('success', 'Data berhasil diperbarui.');
    }
    

    public function destroy($id)
    {
        $donasi = Donasi482::findOrFail($id);
        $donasi->delete();

        return redirect()->route('donasi482.index')->with('success', 'Data berhasil dihapus!');
    }
}

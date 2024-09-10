<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer493;

class Volunteer493Controller extends Controller
{
    public function create()
    {
        return view('volunter493.create'); // Pastikan nama view sesuai
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string',
            'alamat_email' => 'required|email|max:255',
        ]);
    
        Volunteer493::create([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'alamat_email' => $request->input('alamat_email'),
        ]);
    
        return redirect()->route('volunteer493.index')->with('success', 'Data berhasil ditambahkan');
    }
    
    public function index()
    {
        $data = Volunteer493::paginate(3);
        return view('volunter493.index', compact('data'));
    }

    public function edit($id)
    {
        $volunteer = Volunteer493::findOrFail($id);
        return view('volunter493.edit', compact('volunteer')); // Pastikan nama view sesuai
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'alamat_email' => 'required|string|email|max:255',
        ]);

        $volunteer = Volunteer493::findOrFail($id);
        $volunteer->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'alamat_email' => $request->input('alamat_email'),
        ]);

        return redirect()->route('volunteer493.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $volunteer = Volunteer493::findOrFail($id);
        $volunteer->delete();

        return redirect()->route('volunteer493.index')->with('success', 'Data berhasil dihapus!');
    }
}

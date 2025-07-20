<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaWaliKelasController extends Controller
{
    public function index()
    {
        $siswa = Siswa::orderBy(column: 'nama')->get();
        return view('walikelas.siswa.index', compact('siswa'));
    }


    public function create()
    {
        return view('walikelas.siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|unique:siswa,nisn',
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required|date',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan.');
    }

    public function edit($nisn)
    {
        $siswa = Siswa::findOrFail($nisn);
        return view('walikelas.siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nisn)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'tgl_lahir' => 'required|date',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $siswa = Siswa::findOrFail($nisn);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diubah.');
    }

    public function destroy($nisn)
    {
        $siswa = Siswa::findOrFail($nisn);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus.');
    }
}

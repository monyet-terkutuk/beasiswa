<?php

namespace App\Http\Controllers;

use App\Models\FuzzyMamdani;
use Illuminate\Http\Request;
use App\Models\SosialEkonomi;
use App\Models\Siswa;
use Illuminate\Support\Str;

class SosialEkonomiController extends Controller
{
    public function index()
    {
        // $data = SosialEkonomi::with('siswa')->get();
        // return view('operator.sosial_ekonomi.index', compact('data'));

        $data = SosialEkonomi::with(['siswa', 'fuzzyMamdani'])->get();
        return view('operator.sosial_ekonomi.index', compact('data'));

    }

    public function create()
    {
        $siswa = Siswa::all();
        return view('operator.sosial_ekonomi.create', compact('siswa'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nisn' => 'required|exists:siswa,nisn',
        'jml_penghasilan' => 'required',
        'tanggungan' => 'required',
        'tempat_tinggal' => 'required',
        'aset' => 'required',
        'pkh' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'dtks' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        'sktm' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only([
        'nisn', 'jml_penghasilan', 'tanggungan', 'tempat_tinggal', 'aset'
    ]);

    foreach (['pkh', 'dtks', 'sktm'] as $field) {
        if ($request->hasFile($field)) {
            $data[$field] = $request->file($field)->store("uploads/sosial_ekonomi", "public");
        }
    }

    SosialEkonomi::create($data);

    return redirect()->route('sosial-ekonomi.index')->with('success', 'Data berhasil ditambahkan.');
}


    public function edit($id)
    {
        $data = SosialEkonomi::findOrFail($id);
        $siswa = Siswa::all();
        return view('operator.sosial_ekonomi.edit', compact('data', 'siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required|exists:siswa,nisn',
            'jml_penghasilan' => 'nullable|numeric',
            'tanggungan' => 'nullable|integer',
            'tempat_tinggal' => 'nullable|string',
            'aset' => 'nullable|string',
            'pkh' => 'boolean',
            'dtks' => 'boolean',
            'sktm' => 'boolean',
        ]);

        $data = SosialEkonomi::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('sosial-ekonomi.index')->with('success', 'Data berhasil diubah.');
    }

    public function destroy($id)
    {
        SosialEkonomi::findOrFail($id)->delete();
        return redirect()->route('sosial-ekonomi.index')->with('success', 'Data berhasil dihapus.');
    }

   

}

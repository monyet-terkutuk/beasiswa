<?php

namespace App\Http\Controllers;

use App\Models\SosialEkonomi;
use App\Models\FuzzyMamdani;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FuzzyMamdaniController extends Controller
{
    public function proses($id)
    {
        $data = SosialEkonomi::findOrFail($id);

        $nilai = $this->hitungFuzzy($data);
        $status = $nilai >= 50 ? 'layak' : 'tidak_layak';

        FuzzyMamdani::create([
            'id_fuzzy' => Str::uuid(),
            'id_sosial_ekonomi' => $data->id_sosial_ekonomi,
            'kelayakan' => $nilai,
            'status' => $status,
            'tgl_proses' => Carbon::today(),
        ]);

        return redirect()->back()->with('success', 'Proses seleksi kelayakan berhasil disimpan.');
    }

    private function hitungFuzzy($data)
    {
        $skor = 0;

        $skor += (float) $data->jml_penghasilan < 1000000 ? 40 : 10;
        $skor += (int) $data->tanggungan >= 3 ? 30 : 10;
        $skor += in_array(strtolower($data->aset), ['motor', 'tidak ada']) ? 20 : 5;
        $skor += ($data->pkh ? 5 : 0) + ($data->dtks ? 5 : 0) + ($data->sktm ? 5 : 0);

        return min(100, $skor); // nilai maksimal 100
    }

    public function index()
    {
        $data = FuzzyMamdani::with(['sosialEkonomi.siswa'])->get();
        return view('operator.fuzzy_mamdani.index', compact('data'));
    }
}

// Motor, Mobil, Rumah, Tanah, Emas, Lainnya
// dropdown untuk aset dan tanggungan
// tempat tinggal berbentuk foto/upload
// jumlah penghasilan, di buat range gaji

// laporan semua data lengkap dari seluruh database siswa, sosial ekonomi, dan fuzzy mamdani


// nis, nama, gender, sosial ekonomi, fuzzy mamdani dan kelayakan
<?php

namespace App\Http\Controllers;

use App\Models\FuzzyMamdani;
use App\Models\Siswa;
use App\Models\SosialEkonomi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function reportIndex()
    {
        $data = SosialEkonomi::with(['siswa', 'fuzzyMamdani'])->get();

        // $data = FuzzyMamdani::with(['sosialEkonomi.siswa'])->get();
        return view('operator.report', compact('data'));
    }

    public function reportShow($id)
{
    $data = SosialEkonomi::with(['siswa', 'fuzzyMamdani'])->findOrFail($id);
    return view('operator.show_report', compact('data'));
}

public function reportWaliIndex()
{
    $data = SosialEkonomi::with(['siswa', 'fuzzyMamdani'])->get();

    // $data = FuzzyMamdani::with(['sosialEkonomi.siswa'])->get();
    return view('walikelas.report', compact('data'));
}

public function reportWaliShow($id)
{
$data = SosialEkonomi::with(['siswa', 'fuzzyMamdani'])->findOrFail($id);
return view('walikelas.show_report', compact('data'));
}

}

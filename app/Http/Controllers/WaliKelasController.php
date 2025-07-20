<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaliKelasController extends Controller
{
    /**
     * Tampilkan halaman dashboard wali kelas.
     */
    public function index()
    {
        return view('walikelas.dashboard');
    }
}

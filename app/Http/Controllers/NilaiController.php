<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\NilaiHelper;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'uts' => 'required|numeric|min:0|max:100',
            'uas' => 'required|numeric|min:0|max:100',
            'tugas' => 'required|numeric|min:0|max:100',
        ]);

        $uts = $request->input('uts');
        $uas = $request->input('uas');
        $tugas = $request->input('tugas');

        $nilai_akhir = NilaiHelper::hitungNilaiAkhir($uts, $uas, $tugas);
        $grade = NilaiHelper::tentukanGrade($nilai_akhir);

        return view('nilai', compact('uts', 'uas', 'tugas', 'nilai_akhir', 'grade'));
    }
}

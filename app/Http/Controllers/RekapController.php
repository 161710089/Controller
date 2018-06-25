<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekap;
use App\kelas;
use App\absensi_siswa;

class RekapController extends Controller
{
        public function index()
    {
        $kelas = Kelas::all();
        $absensi_siswa = absensi_siswa::all();
        return view('rekap.index', compact('absensi_siswa','kelas'));
    }

    public function index2(Request $request)
    {
        //
        $a = $request->a;
        $b = $request->b;
        $kelas = $request->c;
        $absensi_siswa = absensi_siswa::whereBetween('tanggal', [$a, $b])->where('id_kelas','=',$kelas)->get();
        return view('rekap.index2', compact('absensi_siswa', 'a','b','kelas'));
    }
}

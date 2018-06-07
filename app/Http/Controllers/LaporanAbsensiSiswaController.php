<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi_siswa;
use App\siswa;
use App\kelas;
use App\petugas_piket;

class LaporanAbsensiSiswaController extends Controller
{
    public function index()
    {
            $laporan_absensi_siswa = absensi_siswa::with('siswa','petugas_piket','kelas')->get();
        return view('laporan_absensi_siswa.index',compact('absensi_siswa'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        $kelas = new kelas;
        $petugas_piket = new petugas_piket;
        $siswa = new siswa;
        $laporan_absensi_siswa = absensi_siswa::with('siswa','petugas_piket','kelas')->get();

        return view('laporan_absensi_siswa.create',compact('petugas_piket','siswa','kelas','laporan_absensi_siswa'));
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $this->validate($request,[
            'id_siswa' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'id_PetugasPiket' => 'required|max:255',
            ]);

        $laporan_absensi_siswa = new absensi_siswa;
        
        $laporan_absensi_siswa->id_siswa = $request->id_siswa;
        $laporan_absensi_siswa->id_kelas = $request->id_kelas;
        $laporan_absensi_siswa->tanggal = $request->tanggal;
        $laporan_absensi_siswa->keterangan    = $request->keterangan   ; 
        $laporan_absensi_siswa->id_PetugasPiket = $request->id_PetugasPiket;
        // dd($laporan_absensi_siswa);
        $laporan_absensi_siswa->save();
        return redirect()->route('laporan_absensi_siswa.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\absensi_siswa  $laporan_absensi_siswa
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $laporan_absensi_siswa = absensi_siswa::findOrFail($id);
        return view('laporan_absensi_siswa.show',compact('absensi_siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\absensi_siswa  $laporan_absensi_siswa
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data absensi_siswa berdasrkan id di halaman absensi_siswa edit
        $laporan_absensi_siswa = absensi_siswa::findOrFail($id);
        $kelas = kelas::all();
        $siswa = jurusan::all();
     
        return view('laporan_absensi_siswa.edit',compact('absensi_siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\absensi_siswa  $laporan_absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $this->validate($request,[
            'id_siswa' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'id_PetugasPiket' => 'required|max:255',
            ]);

        $laporan_absensi_siswa =absensi_siswa::findOrFail($id);
        $laporan_absensi_siswa->id_siswa = $request->id_siswa;
        $laporan_absensi_siswa->id_kelas = $request->id_kelas;
        $laporan_absensi_siswa->tanggal = $request->tanggal;
        $laporan_absensi_siswa->keterangan    = $request->keterangan   ; 
        $laporan_absensi_siswa->id_PetugasPiket = $request->id_PetugasPiket;
        // dd($laporan_absensi_siswa);
        $laporan_absensi_siswa->save();
        return redirect()->route('laporan_absensi_siswa.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\absensi_siswa  $laporan_absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $laporan_absensi_siswa = absensi_siswa::findOrFail($id);
        $laporan_absensi_siswa->delete();
        return redirect()->route('laporan_absensi_siswa.index');      }

}

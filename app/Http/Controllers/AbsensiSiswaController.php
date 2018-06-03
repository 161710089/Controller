<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi_siswa;
class AbsensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
            $absensi_siswa = absensi_siswa::all();
        return view('absensi_siswa.index',compact('absensi_siswa'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        return view('absensi_siswa.create');
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

        $absensi_siswa = new absensi_siswa;
        $absensi_siswa->id_siswa = $request->id_siswa;
        $absensi_siswa->id_kelas = $request->id_kelas;
        $absensi_siswa->tanggal = $request->tanggal;
        $absensi_siswa->keterangan    = $request->keterangan   ; 
        $absensi_siswa->id_PetugasPiket = $request->tgl_lahir;
        // dd($absensi_siswa);
        $absensi_siswa->save();
        return redirect()->route('absensi_siswa.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $absensi_siswa = absensi_siswa::findOrFail($id);
        return view('absensi_siswa.show',compact('absensi_siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data absensi_siswa berdasrkan id di halaman absensi_siswa edit
        $absensi_siswa = absensi_siswa::findOrFail($id);
        return view('absensi_siswa.edit',compact('absensi_siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\absensi_siswa  $absensi_siswa
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

        $absensi_siswa =absensi_siswa::findOrFail($id);
        $absensi_siswa->id_siswa = $request->id_siswa;
        $absensi_siswa->id_kelas = $request->id_kelas;
        $absensi_siswa->tanggal = $request->tanggal;
        $absensi_siswa->keterangan    = $request->keterangan   ; 
        $absensi_siswa->id_PetugasPiket = $request->id_PetugasPiket;
        // dd($absensi_siswa);
        $absensi_siswa->save();
        return redirect()->route('absensi_siswa.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\absensi_siswa  $absensi_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $absensi_siswa = absensi_siswa::findOrFail($id);
        $absensi_siswa->delete();
        return redirect()->route('absensi_siswa.index');      }

}

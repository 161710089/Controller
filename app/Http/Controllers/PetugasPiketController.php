<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\petugas_piket;
class PetugasPiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
            $petugas_piket = petugas_piket::all();
        return view('petugas_piket.index',compact('petugas_piket'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        return view('petugas_piket.create');
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

        $petugas_piket = new petugas_piket;
        $petugas_piket->id_siswa = $request->id_siswa;
        $petugas_piket->id_kelas = $request->id_kelas;
        $petugas_piket->tanggal = $request->tanggal;
        $petugas_piket->keterangan    = $request->keterangan   ; 
        $petugas_piket->id_PetugasPiket = $request->tgl_lahir;
        // dd($petugas_piket);
        $petugas_piket->save();
        return redirect()->route('petugas_piket.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\petugas_piket  $petugas_piket
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $petugas_piket = petugas_piket::findOrFail($id);
        return view('petugas_piket.show',compact('petugas_piket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\petugas_piket  $petugas_piket
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data petugas_piket berdasrkan id di halaman petugas_piket edit
        $petugas_piket = petugas_piket::findOrFail($id);
        return view('petugas_piket.edit',compact('petugas_piket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\petugas_piket  $petugas_piket
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

        $petugas_piket =petugas_piket::findOrFail($id);
        $petugas_piket->id_siswa = $request->id_siswa;
        $petugas_piket->id_kelas = $request->id_kelas;
        $petugas_piket->tanggal = $request->tanggal;
        $petugas_piket->keterangan    = $request->keterangan   ; 
        $petugas_piket->id_PetugasPiket = $request->id_PetugasPiket;
        // dd($petugas_piket);
        $petugas_piket->save();
        return redirect()->route('petugas_piket.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\petugas_piket  $petugas_piket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $petugas_piket = petugas_piket::findOrFail($id);
        $petugas_piket->delete();
        return redirect()->route('petugas_piket.index');      }

}

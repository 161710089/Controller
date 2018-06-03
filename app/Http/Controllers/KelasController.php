<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
            $kelas = kelas::all();
        return view('kelas.index',compact('kelas'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        return view('kelas.create');
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $this->validate($request,[
            'nama_kelas' => 'required|max:255',
            'id_jurusan' => 'required|max:255',
            ]);

        $kelas = new kelas;
        $kelas->nama_jurusan = $request->nama_jurusan;
        $kelas->id_jurusan = $request->id_jurusan;
        // dd($kelas);
        $kelas->save();
        return redirect()->route('kelas.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $kelas = kelas::findOrFail($id);
        return view('kelas.show',compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data kelas berdasrkan id di halaman kelas edit
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $this->validate($request,[
            'nama_kelas' => 'required|max:255',
            'id_jurusan' => 'required|max:255',
            ]);

        $kelas =kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->id_jurusan = $request->id_jurusan;
        // dd($kelas);
        $kelas->save();
        return redirect()->route('kelas.index');    }

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

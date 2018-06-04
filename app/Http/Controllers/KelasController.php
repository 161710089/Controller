<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kelas;
use App\jurusan;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
            $kelas = kelas::with('jurusan')->get();
        return view('kelas.index',compact('kelas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        $kelas =  kelas::all();
        $jurusan =  jurusan::all();
        
        return view('kelas.create',compact('kelas','jurusan'));
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
        
        $kelas->nama_kelas = $request->nama_kelas;
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
        $jurusan = jurusan::all();
        $selectedjurusan = jurusan::findOrFail($id)->id_jurusan;
        return view('kelas.edit',compact('jurusan','kelas','selectedjurusan'));
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
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $kelas = kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');      }

}

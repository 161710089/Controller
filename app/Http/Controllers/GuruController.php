<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\guru;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $guru = guru::all();
        return view('guru.index',compact('guru'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        return view('guru.create');
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $this->validate($request,[
            'Nik' => 'required|max:255',
            'Nama' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            
            ]);

        $guru = new guru;
        $guru->Nik = $request->Nik;
        $guru->Nama = $request->Nama;
        $guru->jk    = $request->jk   ; 
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->alamat    = $request->alamat   ; 
        
        // dd($guru);
        $guru->save();
        return redirect()->route('guru.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $guru = guru::findOrFail($id);
        return view('guru.show',compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data guru berdasrkan id di halaman guru edit
        $guru = guru::findOrFail($id);
        return view('guru.edit',compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $this->validate($request,[
            'Nik' => 'required|max:255',
            'Nama' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            ]);

        $guru =guru::findOrFail($id);
        $guru->Nik = $request->Nik;
        $guru->Nama = $request->Nama;
        $guru->jk    = $request->jk   ; 
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->alamat    = $request->alamat   ; 
        // dd($guru);
        $guru->save();
        return redirect()->route('guru.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $guru = guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index');      }

}

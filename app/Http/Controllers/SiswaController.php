<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
            $siswa = siswa::all();
        return view('siswa.index',compact('siswa'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        return view('siswa.create');
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $this->validate($request,[
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            
            ]);

        $siswa = new siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jk    = $request->jk   ; 
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat    = $request->alamat   ; 
        
        // dd($siswa);
        $siswa->save();
        return redirect()->route('siswa.index');    }
    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
    {
        // memanggil data siswa berdasrkan id di halaman siswa edit
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $this->validate($request,[
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            ]);

        $siswa =siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->jk    = $request->jk   ; 
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat    = $request->alamat   ; 
        // dd($siswa);
        $siswa->save();
        return redirect()->route('siswa.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           // delete data beradasarkan id
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');      }

}

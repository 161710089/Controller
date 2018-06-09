<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\kelas;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
            $siswa = siswa::with('kelas')->get();
        return view('siswa.index',compact('siswa'));
         
    }

public function siswa()
    {
            $siswa = siswa::with('kelas')->get();
        return view('member.siswa',compact('siswa'));
         
    }

public function search(Request $request)
    {       
            $cari =$request->get('search');
            $siswa = siswa::where('Nama','LIKE','%'.$cari.'%')->paginate(10)->with('kelas')->get();
            return view('absensi_siswa.index',compact('siswa'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
 {
        $siswa =  siswa::all();
        $kelas =  kelas::all();
        
        return view('siswa.create',compact('kelas','siswa'));
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
         $this->validate($request,[
            'Nis' => 'required|max:255',
            'Nama' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            
            ]);

        $siswa = new siswa;
        $siswa->Nis = $request->Nis;
        $siswa->Nama = $request->Nama;
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
          $kelas = kelas::all();
          $selectkelas = siswa::findOrFail($siswa->id)->id_kelas;
        
        return view('siswa.edit',compact('kelas','siswa','selectkelas'));
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
            'Nis' => 'required|max:255',
            'Nama' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'jk' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255',
            ]);

        $siswa =siswa::findOrFail($id);
        $siswa->Nis = $request->Nis;
        $siswa->Nama = $request->Nama;
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

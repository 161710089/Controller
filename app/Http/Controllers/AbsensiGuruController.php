<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi_guru
class AbsensiGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
            $absensi_guru = absensi_guru::all();
        return view('absensi_guru.index',compact('absensi_guru'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absensi_guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
         'id_guru' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'id_PetugasPiket' => 'required|max:255',
           
        ]);

        $absensi_guru = new absensi_guru;
        $absensi_guru->id_guru = $request->id_guru;
        $absensi_guru->tanggal = $request->tanggal;
        $absensi_guru->keterangan    = $request->keterangan   ; 
        $absensi_guru->id_PetugasPiket = $request->tgl_lahir;
        dd($absensi_guru);
        $absensi_guru->save();
        // return redirect()->route('absensi_guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absensi_guru = absensi_guru::findOrFail($id);
        return view('absensi_guru.show',compact('absensi_guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $absensi_guru = absensi_guru::findOrFail($id);
        return view('absensi_guru.edit',compact('absensi_guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
       'id_guru' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'id_PetugasPiket' => 'required|max:255',
             ]);

        // update data berdasarkan id
        $absensi_guru = absensi_guru::findOrFail($id);
        $absensi_guru->id_guru = $request->id_guru;
        $absensi_guru->tanggal = $request->tanggal;
        $absensi_guru->keterangan    = $request->keterangan   ; 
        $absensi_guru->id_PetugasPiket = $request->tgl_lahir;
        $absensi_guru->save();
        return redirect()->route('absensi_guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $absensi_guru = absensi_guru::findOrFail($id);
        $absensi_guru->delete();
        return redirect()->route('absensi_guru.index');  
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi_guru;
use App\guru;
class Absensi_GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $absensi_guru = absensi_guru::with('guru')->get();
        return view('absensi_guru.index',compact('absensi_guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $absensi_guru = absensi_guru::all();
        $guru = guru::all();
        return view('absensi_guru.create',compact('absensi_guru', 'guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            
            'id_guru' => 'required',
            'keterangan'=>'required|min:2',

        ]);

        $absensi_guru = new absensi_guru;
        $absensi_guru->id_guru = $request->id_guru;
        $absensi_guru->keterangan = $request->keterangan;
        $absensi_guru->save();
        return redirect()->route('absensi_guru.index');
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
            return view('absensi_guru.show', compact('absensi_guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi_guru = absensi_guru::findOrFail($id);
        $guru = guru::all();
        $selectedguru = guru::findOrFail($id)->id_guru;
        return view('absensi_guru.edit',compact('guru','absensi_guru','selectedguru'));
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
         $this->validate($request, [
        
            'id_guru'=>'required|max:255',
            'keterangan'=>'required|min:2',
        ]);

        $absensi_guru = absensi_guru::findOrFail($id);
        $absensi_guru->id_guru = $request->id_guru;
        $absensi_guru->keterangan = $request->keterangan;
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
        $absensi_guru = absensi_guru::findOrFail($id);
       $absensi_guru->delete();
        return redirect()->route('absensi_guru.index');
    }
}

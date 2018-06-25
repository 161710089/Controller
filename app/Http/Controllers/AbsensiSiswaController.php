<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensi_siswa;
use App\siswa;
use App\kelas;
use App\petugas_piket;
use App\User;
use Auth;
class AbsensiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
            $absensi_siswa = absensi_siswa::sortable()->with('siswa','petugas_piket','kelas')->get();
            $kelas =kelas::pluck('nama_kelas','id');
        return view('absensi_siswa.index',compact('absensi_siswa','kelas'));
    
    }



    public function absen()
    {
           $absensi_siswa = Auth::user()->absensi_siswa()->paginate(10);
            $jumlah_data = count($absensi_siswa['absensi_siswa']);
          return view('siswa.absen',compact('absensi_siswa','jumlah_data'));
    
    }


// public function kelasAjax($id){
//     if ($id==0) {
//         $absensi_siswa = absensi_siswa::all();
//     }else{
//         $absensi_siswa = absensi_siswa::where('id_kelas','=',$id)->get();
//     }
//     return $absensi_siswa;
// }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        $absensi_siswa = absensi_siswa::all();
        $siswa = siswa::all();
        $kelas =kelas::all();
        $petugas_piket =petugas_piket::all();
        $user = User::all();
       
        return view('absensi_siswa.create',compact('absensisiswa', 'siswa','kelas','petugas_piket','user'));
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        // $date =date("Y-m-d") tahun-bulan-hari
         $this->validate($request,[
            'id_siswa' => 'required|max:255',
            'id_kelas' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'id_PetugasPiket' => 'required|max:255',
            'id_user'=>'required|max:255',
     
            ]);

        $absensi_siswa = new absensi_siswa;
        
        $absensi_siswa->id_siswa = $request->id_siswa;
        $absensi_siswa->id_kelas = $request->id_kelas;
        $siswas = siswa::findOrFail($request->id_siswa);
        
        $absensi_siswa->tanggal = $request->tanggal;
        $absensi_siswa->keterangan    = $request->keterangan   ; 
        $absensi_siswa->id_PetugasPiket = $request->id_PetugasPiket;
        $absensi_siswa->id_user = $request->id_user;
       
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
   public function edit(absensi_siswa $absensi_siswa)
    {
        $absensi_siswa = absensi_siswa::findOrFail($absensi_siswa->id);
        $petugas_piket = petugas_piket::all();
        $selectpetugaspiket = absensi_siswa::findOrFail($absensi_siswa->id)->id_PetugasPiket;
        $siswa = siswa::all();
        $selectsiswa = absensi_siswa::findOrFail($absensi_siswa->id)->id_siswa;
        $kelas = kelas::all();
        $selectkelas = absensi_siswa::findOrFail($absensi_siswa->id)->id_kelas;
      
        return view('absensi_siswa.edit',compact('siswa','absensi_siswa','selectsiswa','petugas_piket','selectpetugaspiket','kelas','selectkelas'));
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
              'id_siswa'=>'required|max:255',
            'id_kelas'=>'required|max:255',
            'tanggal'=>'required|min:1',
            'keterangan'=>'required',
            'id_PetugasPiket'=>'required|max:255',
          ]);

        $absensi_siswa =absensi_siswa::findOrFail($id);
        $absensi_siswa->id_siswa = $request->id_siswa;
        $absensi_siswa->id_kelas = $request->id_kelas;
        $absensi_siswa->tanggal = $request->tanggal;
        $absensi_siswa->keterangan = $request->keterangan;
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

    public function filter($id)
    {
        $siswa = Siswa::where('id_kelas', $id)->get();
        if($siswa->count() > 0){
            foreach ($siswa as $data) {
                echo '<option class="form-control" value="'.$data->id.'">'.$data->Nama.'</option>';
            }
        }else{
            echo '<option class="form-control">Tidak Ada Hasil</option>';
        }
    }
    }






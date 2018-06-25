<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
use App\kelas;


class AuthController extends Controller
{
    public function getLogin()
    {

    	return view('login');
    }

public function postLogin(Request $request)
{
// 	dd(\Auth::attempt(['email'=>$request->email, 'password'=> $request->password])
// );
if(\Auth::attempt([
	'email'=>$request->emailSiswa, 
	'password'=> $request->passwordSiswa
])){
	return redirect('/');

}else{
 return 'salah Masuk';
}
}
    public function getRegister()
    {

    	return view('register');
    }
    

public function postRegister(Request $request)
{
       $siswa =  siswa::all();
        $kelas =  kelas::all();
        
        return view('siswa.create',compact('kelas','siswa'));
         
	siswa::create([
		'nis' => $request->nis,
		'nama' => $request->nama,
		'id_kelas' => $request->id_kelas,
		'email' => $request->email,
		'password' => bcrypt($request->password),
		'jk' => $request->jk,
		'tempat_lahir' => $request->tempat_lahir,
		'tanggal_lahir' => $request->tanggal_lahir,
		'alamat' => $request->alamat,
	]);

	return redirect()->back();
}
}
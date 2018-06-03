<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas_piket extends Model
{
protected $table = 'petugas_pikets';

	protected $fillable = array('nama_petugas', 'tanggal');
public $timestamp = true;

	public function absensi_siswa() {
		return $this->hasMany('App\absensi_siswa', 'id_PetugasPiket');
	}
	public function absensi_guru() {
		return $this->hasMany('App\absensi_guru', 'id_PetugasPiket');
	}


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi_siswa extends Model
{
    protected $table = 'absensi_siswas';
protected $fillable = array('id_siswa', 'tanggal', 'keterangan','id_PetugasPiket');
public $timestamp = true;


public function siswa() {
	return $this->belongsTo('App\siswa', 'id_siswa');
	}
public function petugas_piket() {
	return $this->belongsTo('App\petugas_piket', 'id_PetugasPiket');
	}

}

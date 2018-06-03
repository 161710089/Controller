<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absensi_guru extends Model
{
    protected $table = 'absensi_gurus';
protected $fillable = array('id_guru', 'tanggal', 'keterangan','id_PetugasPiket');
public $timestamp = true;


public function guru() {
	return $this->belongsTo('App\guru', 'id_guru');
	}
public function petugas_piket() {
	return $this->belongsTo('App\petugas_piket', 'id_PetugasPiket');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
protected $fillable = array('nis', 'nama','id_kelas','jk' ,'tempat_lahir','tanggal_lahir','alamat');
public $timestamp = true;

	public function kelas() {
		return $this->belongsTo('App\kelas', 'id_kelas');
	}
	public function absensi_siswa() {
	return $this->hasOne('App\absensi_siswa', 'id_siswa');
	}

}

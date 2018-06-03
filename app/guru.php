<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
protected $table = 'gurus';
protected $fillable = array('nik', 'nama','jk','tempat_lahir','tanggal_lahir','alamat');

public function absensi_guru() {
	return $this->hasOne('App\absensi_guru', 'id_guru');
	}


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
       protected $table = 'jurusans';
protected $fillable = array('nama_jurusan');
public $timestamp = true;

public function kelas() {
		return $this->hasMany('App\kelas', 'id_kelas');
	}

}

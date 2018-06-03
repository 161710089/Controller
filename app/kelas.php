<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
protected $fillable = array('nama_kelas','id_jurusan');
public $timestamp = true;

	public function siswa() {
		return $this->hasMany('App\siswa', 'id_kelas');
	}
	public function jurusan() {
		return $this->belongsTo('App\jurusan', 'id_jurusan');
	}

}
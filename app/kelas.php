<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class kelas extends Model
{
    protected $table = 'kelas';
	
	use Sortable;

protected $fillable = array('nama_kelas','id_jurusan');
protected $sortable = array('id', 'nama_kelas','id_jurusan');

public $timestamp = true;

	public function siswa() {
		return $this->hasMany('App\siswa', 'id_kelas');
	}
	public function jurusan() {
		return $this->belongsTo('App\jurusan', 'id_jurusan');
	}
	public function absensi_siswa() {
		return $this->hasMany('App\absensi_siswa', 'id_kelas');
	}

}
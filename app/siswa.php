<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class siswa extends Model
{
    protected $table = 'siswas';
protected $fillable = array('nis', 'nama','email','password','id_kelas','jk' ,'tempat_lahir','tanggal_lahir','alamat');
public $timestamp = true;

	public function kelas() {
		return $this->belongsTo('App\kelas', 'id_kelas');
	}
	public function absensi_siswa() {
	return $this->hasOne('App\absensi_siswa', 'id_siswa');
	}
}

class siswaa extends Authenticatable
{
    use Notifiable;

    protected $guard ='siswa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
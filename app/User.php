<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

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
public function absensi_siswa()
{
  // Setiap user akan memiliki banyak absensi_siswa
  return $this->hasMany('App\absensi_siswa','id_user');
}

public function absensi_guru()
{
  // Setiap user akan memiliki banyak absensi_siswa
  return $this->hasMany('App\absensi_guru','id_user');
}

}
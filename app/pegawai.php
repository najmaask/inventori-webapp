<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table='pegawais';

    public function pinjam(){
    	return $this->hasMany('App\pinjam');
	}
}

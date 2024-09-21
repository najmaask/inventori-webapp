<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{

	protected $table='levels';

    public function petugas(){
    	return $this->hasOne('App\petugas');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruang extends Model
{
    protected $table='ruangs';

    public function inventori(){
    	return $this->hasMany('App\inventori');
    }
}

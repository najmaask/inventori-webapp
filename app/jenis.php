<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table='jeniss';

    public function inventori(){
    	return $this->hasMany('App\inventori');
    }
}

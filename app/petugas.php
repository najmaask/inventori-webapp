<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{

	protected $table='petugass';

    public function petugas(){
    	return $this->belongsTo('App\petugas');
	}

	public function inventori(){
    	return $this->hasMany('App\inventori');
    }
}

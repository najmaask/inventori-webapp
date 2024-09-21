<?php

namespace App;

use App\inventori;
use App\jenis;
use App\ruang;
use App\petugas;
use Illuminate\Database\Eloquent\Model;

class inventori extends Model
{

	protected $table='inventoriss';
	

    public function posts(){
    	return $this->belongsToMany('App\jenis','App\ruang','App\petugas');
    }
}

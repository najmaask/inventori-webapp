<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    protected $table="pinjams";

    public function pinjam(){
    	return $this->belongsTo('App\pinjam');
	}
}

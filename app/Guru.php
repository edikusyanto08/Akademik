<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;


class Guru extends Model
{
	
	protected $guarded=['id'];

    public function sebagai_pegawai(){
    	return $this->belongsTo(Pegawai::class,"pegawai_id","id");
    }
}

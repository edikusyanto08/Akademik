<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiAlamat extends Model
{
	protected $guarded = ['id','pegawai_id']; 
    public function pegawai()
    {
    	return $this->belongsTo(Pegawai::class);
    }
}

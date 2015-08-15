<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiPendidikan extends Model
{
    protected $guarded=['id'];

    public function pendidikan(){
    	return $this->belongsTo(Ijazah::class,'pegawai_id','id');
    }
    public function pegawai(){
    	return $this->belongsTo(Pegawai::class);
    }

    public function jurusans(){
    	return $this->belongsTo(Jurusan::class,'jurusan','id');
    }
    public function akta(){
    	return $this->belongsTo(Akta::class);
    }
}

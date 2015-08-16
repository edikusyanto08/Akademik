<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiMengajar extends Model
{
    protected $guarded=['id'];

    public function pegawai(){
    	return $this->belongsTo(Pegawai::class);
    }

    public function mata_pelajaran(){

    	return $this->belongsTo(MataPelajaran::class);
    }
}

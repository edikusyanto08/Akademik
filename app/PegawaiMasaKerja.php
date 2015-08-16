<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiMasaKerja extends Model
{
    protected $guarded=['id'];

    public function Pegawai(){
    	return $this->belongsTo(Pegawai::class);
    }
}

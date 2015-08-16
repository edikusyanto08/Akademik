<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PangkatPegawai extends Model
{
    protected $guarded=['id'];

    public function pekerjaan_pegawai(){
    	return $this->hasOne(PegawaiPekerjaan::class);
    }
}

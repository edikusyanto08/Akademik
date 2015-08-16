<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class GolonganPegawai extends Model
{
    protected $guarded=['id'];

    public function pekerjaan_pegawai(){
    	return $this->hasMany(PegawaiPekerjaan::class);
    }
}

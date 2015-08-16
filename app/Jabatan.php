<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $guarded=['id'];

    public function pegawai_pekerjaan(){
    		return $this->hasOne(PegawaiPekerjaan::class);
    }
}

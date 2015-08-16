<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiPekerjaan extends Model
{
    protected $guarded=['id'];

    public function pegawai(){
    	return $this->belongsTo(Pegawai::class);
    }

    public function jabatan(){
    	return $this->belongsTo(Jabatan::class);
    }

    public function golongan(){
    	return $this->belongsTo(GolonganPegawai::class);
    }

    public function pangkat(){
    	return $this->belongsTo(PangkatPegawai::class,'pangkat_pegawais_id','id');
    }
}


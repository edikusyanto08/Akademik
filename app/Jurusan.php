<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = ['id'];


    public function mataPelajaran(){
    	return $this->hasMany(MataPelajaran::class);
    }

    public function pendidikan(){
    	return $this->hasMany(PegawaiPendidikan::class);
    }
}

<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $guarded=['id'];

    public function siswa(){
    	return $this->hasOne(SiswaEkskul::class);
    }

    public function siswaekskul(){
    	return $this->hasMany(SiswaEkskul::class);
    }
}

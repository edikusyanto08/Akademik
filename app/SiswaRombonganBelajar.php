<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaRombonganBelajar extends Model
{
    protected $guarded = ['siswa_id'];

    public function siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }

    public function rombel(){
    	return $this->belongsToMany(RombonganBelajar::class);
    }
}

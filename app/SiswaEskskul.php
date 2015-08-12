<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaEkskul extends Model
{
    protected $guarded = ['id'];

    public function sisiwa()
    {
    	return $this->belongsTo(Siswa::class,'siswa_id','id');
    }
    public function eskul(){
    	return $this->belongsTo(Eskul::class,'eskul_id','id');
    }
    public function ekskul()
    {
    	return $this->belongsTo(ekskul::class);
    }
}

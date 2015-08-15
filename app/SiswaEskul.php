<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaEskul extends Model
{
    protected $guarded = ['id'];

    public function sisiwa()
    {
    	return $this->belongsTo(Siswa::class,'siswa_id','id');
    }
    public function eskul(){
    	return $this->belongsTo(Eskul::class,'eskul_id','id');
    }
}

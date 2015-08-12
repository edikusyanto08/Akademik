<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaEkskul extends Model
{
    protected $guarded = ['id'];

    public function sisiwa()
    {
    	return $this->belongsTo(Siswa::class);
    }
    public function ekskul()
    {
    	return $this->belongsTo(Ekskul::class);
    }
}

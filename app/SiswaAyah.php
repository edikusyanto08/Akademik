<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaAyah extends Model
{
    protected $guarded = ['siswa_id'];

    public function siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }
}

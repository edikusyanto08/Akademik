<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaHobi extends Model
{
    protected $guarded = ['siswa_id'];

    public function sisiwa()
    {
    	return $this->belongsTo(Siswa::class);
    }
}

<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaHobi extends Model
{
    protected $guarded = ['siswa_id'];

    public function siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }
    public function hobi()
    {
    	return $this->belongsTo(Hobi::claass);
    }
}

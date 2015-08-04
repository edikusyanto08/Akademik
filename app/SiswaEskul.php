<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaEskul extends Model
{
    protected $guarded = ['siswa_id'];

    public function sisiwa()
    {
    	return $this->belongsTo(Siswa::class);
    }
}

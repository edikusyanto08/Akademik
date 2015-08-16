<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class GuruMataPelajaran extends Model
{
    protected $guarded = ['id'];
    public function guru()
    {
    	return $this->belongsTo(Guru::class);
    }
    public function mata_pelajaran()
    {
    	return $this->belongsTo(MataPelajaran::class);
    }
}

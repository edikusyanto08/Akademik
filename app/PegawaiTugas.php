<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiTugas extends Model
{
    protected $guarded = ['id'];

    public function pegawai()
    {
    	return $this->belongsTo(Pegawai::class);
    }
}

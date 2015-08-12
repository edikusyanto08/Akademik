<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaPaskaPendidikan extends Model
{
    	protected $guarded = ['Siswa_id'];

    	public function siswa()
    	{
    		return $this->belongsTo(Siswa::class);
    	}
}

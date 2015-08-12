<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaKesehatan extends Model
{
    	protected $guarded = ['siswa_id'];

    	public function siswa()
    	{
    		return $this->belongsTo(Siswa::class);
    	}
    	public function kebutuhan_khusus()
    	{
    		return $this->belongsTo(KebutuhanKhusus::class);
    	}
}

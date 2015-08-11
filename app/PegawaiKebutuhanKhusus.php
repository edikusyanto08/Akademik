<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class PegawaiKebutuhanKhusus extends Model
{
    	protected $guarded = ['pegawai_id'];

    	public function pegawai()
    	{
    		return $this->belongsTo(Pegawai::class);
    	}
}

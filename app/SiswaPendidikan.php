<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaPendidikan extends Model
{
	protected $guarded = ['id'];
	public function siswa()
	{
		return $this->belongsTo(Siswa::class);
	}
	public function jurusan()
	{
		return $this->belongsTo(Jurusan::class);
	}
	public function kelas()
	{
		return $this->belongsTo(Kelas::class);
	}

	
}

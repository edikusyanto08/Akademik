<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class SiswaPendidikan extends Model
{
	protected $guarded = ['siswa_id'];
	public function siswa()
	{
		return $this->belongsTo(Siswa::class);
	}
	public function program()
	{
		return $this->belongsTo(Program::class);
	}
	public function kelas()
	{
		return $this->belongsTo(Kelas::class);
	}
}

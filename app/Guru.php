<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;


class Guru extends Model
{
	
	protected $guarded=['id'];

    public function pegawai(){
    	return $this->belongsTo(Pegawai::class);
    }
    public function mengajar()
    {
        return $this->hasMany(GuruMataPelajaran::class);
    }
    public function listWithPegawaiName()
    {
    	$lists = [];
    	foreach ($this->all() as $list) {
    		$lists[$list->id] = "{$list->pegawai->nama} ({$list->pegawai->nip})";
    	}
    	return $lists;
    }
}

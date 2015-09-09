<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $guarded=['id'];

    public function siswahobi(){
    	return $this->hasMany(SiswaHobi::class);
    }

    public function daftar_hobi(){
    	$lists=[];

    	foreach ($this->all() as $daftar) {
    		$lists[$daftar->jenis_hobi][$daftar->id]="{$daftar->label}";
    	}
    	return $lists;
    }
}

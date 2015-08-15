<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class KategoriMataPelajaran extends Model
{
    protected $guarded=['id'];
    public function matapelajaran()
    {
    	return $this->hasMany(MataPelajaran::class);
    }
    public function listing()
    {
    	$lists = [];
    	foreach ($this->all() as $list) {
    		$lists[$list->id] = "{$list->label} ({$list->huruf})";
    	}
    	return $lists;
    }
}

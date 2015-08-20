<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $guarded = ['id'];

    public function rombongan(){
    	return $this->hasMany(RombonganBelajar::class);
    }
}

<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $guarded = ['id'];

    public function rombel(){
    	return $this->hasMany(RombonganBelajar::class);
    }
}

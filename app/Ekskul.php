<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    protected $guarded=['id'];

    public function siswa(){
    	return $this->hasOne(SiswaEskul::class);
    }
}

<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $guarded=['id'];

    public function siswaeskul(){
    	return $this->hasOne(SiswaEskul::class);
    }
}

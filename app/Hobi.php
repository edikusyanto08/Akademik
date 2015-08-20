<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $guarded=['id'];

    public function siswahobi(){
    	return $this->hasMany(SiswaHobi::class);
    }
}

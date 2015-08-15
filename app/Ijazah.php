<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    protected $guarded=['id'];

    public function ijazah(){
    	return $this->hasOne(PegawaiPendidikan::class);
    }
    
}

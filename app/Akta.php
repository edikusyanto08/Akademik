<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Akta extends Model
{
    protected $guarded=['id'];

    public function pendidikan(){
    	return $this->hasMany(PegawaiPendidikan::class);
    }
}

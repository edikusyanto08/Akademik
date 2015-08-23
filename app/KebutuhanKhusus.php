<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class KebutuhanKhusus extends Model
{
    protected $guarded = ['id'];

    public function kehehatan()
    {
    	return $this->hasMany(SiswaKesehatan::class);
    }
    
}

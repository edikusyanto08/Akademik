<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $guarded = ['id'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

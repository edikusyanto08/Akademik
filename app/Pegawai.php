<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = ['id'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function tugas()
    {
    	return $this->hasMany(PegawaiTugas::class);
    }
}

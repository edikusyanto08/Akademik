<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $guarded = ['id'];
    public function category()
    {
    	return $this->belongsTo(KategoriMataPelajaran::class,'kategori_mata_pelajaran_id','id');
    }
    public function taught()
    {
    	return $this->belongsTo(Guru::class);
    }
    public function lecture($value='')
    {
    	# code...
    }
}

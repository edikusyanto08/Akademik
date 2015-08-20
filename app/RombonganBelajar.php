<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class RombonganBelajar extends Model
{
    protected $guarded=['id'];

    public function siswarombel(){
    	return $this->hasMany(SiswaRombonganBelajar::class);
    }
    public function jurusan(){
    	return $this->belongsTo(Jurusan::class);
    }
    public function tahun_ajaran(){
    	return $this->belongsTo(TahunAjaran::class);
    }

    public function kelas(){
    	return $this->belongsTo(Kelas::class,'kelas_id','id');
    }

    public function ruangan(){
    	return $this->belongsTo(Ruangan::class);
    }
}

<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $guarded = ['id'];
    public function kategori_mata_pelajaran()
    {
    	return $this->belongsTo(KategoriMataPelajaran::class);
    }
    public function guru()
    {
    	return $this->belongsTo(Guru::class);
    }
    public function jurusan()
    {
    	return $this->belongsTo(Jurusan::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function pegawai_mengajar(){
        return $this->hasMany(PegawaiMengajar::class);
    }

}

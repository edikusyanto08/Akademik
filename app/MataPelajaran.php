<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $guarded = ['id'];
    public function kategori()
    {
    	return $this->belongsTo(KategoriMataPelajaran::class,'kategori_mata_pelajaran_id','id');
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
    public function pengajar()
    {
        return $this->hasMany(GuruMataPelajaran::class);
    }
    public function listAllAttribute()
    {
        $lists = [];
        foreach ($this->all() as $list) {
            $lists["Jurusan {$list->jurusan->label} Kelas-{$list->kelas->label}"][$list->id] = "{$list->label} ({$list->kategori->label} - {$list->kategori->huruf})";
        }
        return $lists;
    }

}

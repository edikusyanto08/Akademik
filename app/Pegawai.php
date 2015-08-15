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
    public function alamat()
    {
        return $this->hasOne(PegawaiAlamat::class);
    }
    public function menjadi_guru(){
    	return $this->hasOne(Guru::class);
    }

    public function pegawai_pendidikan(){
        return $this->hasOne(PegawaiPendidikan::class);
    }
    public function diklat(){
        return $this->hasOne(PegawaiDiklat::class);
    }
}

<?php

namespace Akademik;

use Illuminate\Database\Eloquent\Model;

class KebutuhanKhusus extends Model
{
    protected $guarded = ['id'];

   public function siswa()
   {
   		return $this->hasMany(SiswaKesehatan::class);
   }   
   public function pegawai()
   {
   	return $this->hasMany(PegawaiKebutuhanKhusus::class);
   }
}

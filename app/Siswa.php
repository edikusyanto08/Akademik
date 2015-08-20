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
    public function alamat()
    {
    	return $this->hasOne(SiswaAlamat::class);
    }
    public function ayah()
    {
    	return $this->hasOne(SiswaAyah::class);
    }
    public function ibu()
    {
    	return $this->hasOne(SiswaIbu::class);
    }
    public function wali()
    {
    	return $this->hasOne(SiswaWali::class);
    }
    public function eskul()
    {
    	return $this->hasOne(SiswaEskul::class);
    }
    public function hobi()
    {
    	return $this->hasOne(SiswaHobi::class);
    }

    public function perkembangan(){
        return $this->hasOne(SiswaPerkembangan::class);
    }
}

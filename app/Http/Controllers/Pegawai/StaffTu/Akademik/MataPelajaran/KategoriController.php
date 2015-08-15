<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik\MataPelajaran;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\KategoriMataPelajaran;
use Akademik\Http\Requests\MataPelajaranKategoriRequest;

class KategoriController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.akademik.mapelkategori', new KategoriMataPelajaran(), 'Kategori MataPelajaran');
    }

 /**
  * Store a newly created resource in storage.
  *
  * @return Response
  */
 public function store(KategoriMataPelajaran $model, MataPelajaranKategoriRequest $r)
 {
     if ($model->fill($r->all())->save()) {
         return $this->routeAndSuccess('store');
     }
     return $this->routeBackWithError('store');
 }

 /**
  * Update the specified resource in storage.
  *
  * @param int $id
  *
  * @return Response
  */
 public function update(KategoriMataPelajaran $model, MataPelajaranKategoriRequest $r)
 {
     if ($model->fill($r->all())->save()) {
         return $this->routeAndSuccess('update');
     }
     return $this->routeBackWithError('update');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param int $id
  *
  * @return Response
  */
 public function destroy(KategoriMataPelajaran $model)
 {
     if ($model->delete()) {
         return $this->routeAndSuccess('destroy');
     }
     return $this->routeBackWithError('destroy');
 }
}

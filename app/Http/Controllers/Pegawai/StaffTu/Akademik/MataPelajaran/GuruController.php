<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik\MataPelajaran;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\Http\Requests\GuruMataPelajaranRequest;
use Akademik\GuruMataPelajaran as Guru ;


class GuruController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.akademik.mapel.guru_mapel', new Guru(), 'Kategori MataPelajaran');
   }

 /**
  * Store a newly created resource in storage.
  *
  * @return Response
  */

 public function store(Guru $model, GuruMataPelajaranRequest $r)
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

 public function update(Guru $model, GuruMataPelajaranRequest $r)
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

 public function destroy(Guru $model)
 {
     if ($model->delete()) {
         return $this->routeAndSuccess('destroy');
     }
     return $this->routeBackWithError('destroy');
 }
}

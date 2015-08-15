<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Requests\KelasRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Kelas;

class KelasController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.akademik.kelas', new Kelas(), 'Kelas');
    }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store(Kelas $model, KelasRequest $r)
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
     public function update(Kelas $model, KelasRequest $r)
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
     public function destroy(Kelas $model)
     {
         if ($model->delete()) {
             return $this->routeAndSuccess('destroy');
         }
         return $this->routeBackWithError('destroy');
     }
}

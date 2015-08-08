<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\MasterData;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Requests\DegreeRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Kelas;

class DegreeController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.masterdata.degree', new Kelas(), 'Nama Kelas');
    }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store(Kelas $model, DegreeRequest $r)
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
     public function update(Kelas $model, DegreeRequest $r)
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

<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik;

use Akademik\Http\Requests\RuanganRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Ruangan;

class RuanganController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.akademik.classroom', new Ruangan(),'Ruang Belajar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Ruangan $model, RuanganRequest $r)
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
    public function update(Ruangan $model, RuanganRequest $r)
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
    public function destroy(Ruangan $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

<?php

namespace Akademik\Http\Controllers\StaffTu\Kepegawaian;

use Akademik\Http\Requests\PegawaiRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Pegawai;

class PegawaiController  extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.kepegawaian.pegawai', new Pegawai(), 'Jamil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Pegawai $model, PegawaiRequest $r)
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
    public function update(Pegawai $model, PegawaiRequest $r)
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
    public function destroy(Pegawai $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik\MataPelajaran;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\MataPelajaran;
use Akademik\Http\Requests\MataPelajaranRequest;

class DataController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.akademik.mapel.data', new MataPelajaran(), 'Mata Pelajaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(MataPelajaran $model, MataPelajaranRequest $r)
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
    public function update(MataPelajaran $model, MataPelajaranRequest $r)
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
    public function destroy(MataPelajaran $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

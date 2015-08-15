<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\Http\Requests\JurusanRequest;
use Akademik\Jurusan;

class JurusanController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.akademik.jurusan', new Jurusan(), 'Jurusan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Jurusan $model, JurusanRequest $r)
    {
        $data = $r->all();
        if ($model->fill($data)->save()) {
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
    public function update(Jurusan $model, JurusanRequest $r)
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
    public function destroy(Jurusan $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

<?php

namespace Akademik\Http\Controllers\StaffTu\MasterData;

use Illuminate\Http\Request;
use Akademik\Http\Requests;
use Akademik\Http\Controllers\Controller;
use Akademik\Http\Requests\ProgramRequest;
use Akademik\Program;

class ProgramController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.masterdata.program', new Program(), 'Jurusan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Program $model, ProgramRequest $r)
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
    public function update(Program $model, ProgramRequest $r)
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
    public function destroy(Program $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

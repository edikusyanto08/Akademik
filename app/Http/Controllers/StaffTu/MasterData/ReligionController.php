<?php

namespace Akademik\Http\Controllers\StaffTu\MasterData;

use Illuminate\Http\Request;
use Akademik\Http\Requests\ReligionRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Agama;

class ReligionController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.masterdata.religion', new Agama(), 'Religion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Agama $model, ReligionRequest $r)
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
    public function update(Agama $model, ReligionRequest $r)
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
    public function destroy(Agama $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

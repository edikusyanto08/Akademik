<?php

namespace Akademik\Http\Controllers\StaffTu\MasterData;

use Akademik\Http\Requests\ClassroomRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\Ruangan;

class ClassRoomController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.masterdata.classroom', new Ruangan(),'Ruang Belajar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Ruangan $model, ClassroomRequest $r)
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
    public function update(Ruangan $model, ClassroomRequest $r)
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

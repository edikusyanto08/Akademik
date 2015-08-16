<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Pengaturan;

use Illuminate\Http\Request;

use Akademik\Http\Requests\SpecialNeedRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\KebutuhanKhusus;

class KebutuhanKhususController extends Controller
{
    public function __construct()
    {
        parent::__construct('stafftu.pengaturan.kebutuhankhusus', new KebutuhanKhusus(), 'Kebutuhan Khusus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(KebutuhanKhusus $model, SpecialNeedRequest $r)
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
    public function update(KebutuhanKhusus $model, SpecialNeedRequest $r)
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
    public function destroy(KebutuhanKhusus $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }

}

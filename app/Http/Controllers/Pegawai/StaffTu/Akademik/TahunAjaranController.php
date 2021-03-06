<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Akademik;

use Illuminate\Http\Request;

use Akademik\Http\Requests\TahunAjaranRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\TahunAjaran;

class TahunAjaranController extends Controller
{
     public function __construct()
    {
        parent::__construct('stafftu.akademik.tahunajaran', new TahunAjaran(), 'Tahun Ajaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TahunAjaran $model, TahunAjaranRequest $r)
    {
        if($r->input('awal') > $r->input('akhir')){
            return redirect()->back()->withInput()->withErrors(["Year End can't bigger than Year Start"]);
        }
        $model->label=$r->input('awal').'/'.$r->input('akhir');
        if ($model->save()) {
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
    public function update(TahunAjaran $model, TahunAjaranRequest $r)
    {
        if($r->input('awal') > $r->input('akhir')){
            return redirect()->back()->withInput()->withErrors(["Year End can't bigger than Year Start"]);
        }
        $model->label=$r->input('awal').'/'.$r->input('akhir');

        if ($model->save()) {
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
    public function destroy(TahunAjaran $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('destroy');
        }
        return $this->routeBackWithError('destroy');
    }
}

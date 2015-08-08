<?php

namespace Akademik\Http\Controllers\Pegawai\StaffTu\Pengaturan;

use Illuminate\Http\Request;

use Akademik\Http\Requests\PangkatRequest;
use Akademik\Http\Controllers\Controller;
use Akademik\PangkatPegawai;

class PangkatController extends Controller
{
    public function __construct(){

        parent:: __construct('stafftu.pengaturan.pangkat',new PangkatPegawai(),'Pangkat');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PangkatPegawai $model,PangkatRequest $j)
    {
        if ($model->fill($j->all())->save()) {
            return $this->routeAndSuccess('store');
        }
        return $this->routeBackWithError('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(PangkatPegawai $model,PangkatRequest $j)
    {
        if ($model->fill($j->all())->save()) {
            return $this->routeAndSuccess('update');
        }
        return $this->routeBackWithError('update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(PangkatPegawai $model)
    {
        if ($model->delete()) {
            return $this->routeAndSuccess('delete');
        }
        return $this->routeBackWithError('delete');
    }
}
